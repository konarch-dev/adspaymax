<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Zip;
use App\Models\Country;
use App\Models\State;
use App\Models\Paypal;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Support\Facades\File;
use DB;
use Carbon\Carbon;

class vendorController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::where('user_id', session::get('sid'))->count();
        $active = Product::where('user_id', session::get('sid'))->where('status', 1)->count();
        $inactive = Product::where('user_id', session::get('sid'))->where('status', 0)->count();

        return view('seller.dashboard.index', ["product" => $product, "active" => $active, "inactive" => $inactive]);
    }

    public function pricing(Request $request)
    {

        return view('seller.dashboard.pricing');
    }

    public function businessprice(Request $request)
    {

        return view('seller.dashboard.business');
    }

    public function payhistory(Request $request)
    {

        $payhistory = Paypal::select("*")->where('user_id', Session::get('sid'))->get();

        return view('seller.dashboard.payhistory', ['payhistory' => $payhistory]);
    }

    public function paymentsuccess(Request $request)
    {

        return view('seller.dashboard.success');
    }
    public function register(Request $request)
    {

        $data['countries'] = Country::get(["name", "id"])
            ->where("id", 1);


        return view('seller.dashboard.register', $data);
    }

    public function singnUp(Request $request)
    {
        //  return $request->state;
        $selUser = User::select("email", "type")->where(['email' => $request->email, 'type' => "vendor", "status" => 1])->count();
        if ($selUser > 0) {
            Session::flash('message', 'Already have seller Account');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('seller.register');
        } else {


            $inputs = [
                'email'    => $request->email,
                'password' => $request->password,
                'name' => $request->fname,
                'logo' => $request->logo,
            ];

            $rules = array(
                'name'             => 'required',                        // just a normal required validation
                'email'            => 'required|email',     // required and must be unique in the ducks table
                'password'         => 'required|min:6',        // required and has to match the password field
                // 'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',   // required and has to match the logo
            );

            // do the validation ----------------------------------
            // validate against the inputs from our form
            $validator = Validator::make($inputs, $rules);

            // check if the validator failed -----------------------
            if ($validator->fails()) {

                // get the error messages from the validator
                $messages = $validator->messages();


                // redirect our user back to the form with the errors from the validator
                return redirect()->route('seller.register')->withErrors($messages);
            } else {



                $hashedPassword = Hash::make($request->password);
                $country = Country::find($request->country);

                //  return Hash::check("12334556h6", '$2y$10$u8PPa.xrp.Sog0u8TzaHHOV.BQ6wZJCd5sSwm.eVcAa/KM.6a6ZTS');
                $userInsert = User::Create([
                    'name' => $request->fname,
                    'email' => $request->email,
                    "password" => $hashedPassword,
                    'detail' => $request->detail,
                    'store' => $request->storename,
                    'status' => 1,
                    "type" => "vendor",
                    "country" => $country->name,
                    "state" => $request->state,
                    "city" => $request->city,
                    "zip" => $request->zip,
                    "address" => $request->address
                ]);
                if ($userInsert) {



                    session::put('susername',  $request->fname);
                    session::put('semail',  $request->email);
                    session::put('stype',  "vendor");
                    session::put('sid',  $userInsert->id);


                    $imageName =  session::get('sid') . time() . '.' . $request->logo->extension();

                    $path = public_path('images\\seller\\' . session::get('sid') . '\\');
                    if (!File::exists($path)) {
                        File::makeDirectory($path, 0777, true); //creates directory
                    }

                    $request->logo->move($path, $imageName);

                    $products = User::find(session::get('sid'));
                    $products->logo = '\images\\seller\\' . session::get('sid') . '\\' . "\\" . $imageName;
                    $products->save();
                }
                return redirect()->route('seller.dashboard');
            }
        }
    }

    public function login(Request $request)
    {
        return view('seller.dashboard.login');
    }

    public function signIn(Request $request)
    {

        $selUser = User::select("email", "type")->where(['email' => $request->email, 'type' => "vendor"])->count();
        if ($selUser > 0) {
            $selUserData = User::select("id", "name", "email", "type", "password")->where(['email' => $request->email, 'type' => "vendor"])->get();

            $hashedPassword = Hash::make($request->password);

            if (Hash::check($request->password, $selUserData[0]['password'])) {

                session::put('susername', $selUserData[0]['name']);
                session::put('semail', $selUserData[0]['email']);
                session::put('stype', $selUserData[0]['type']);
                session::put('sid', $selUserData[0]['id']);
                return redirect()->route('seller.dashboard');
            } else {
                Session::flash('message', 'Username or password does not match');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->route('seller.login');
            }
        } else {

            Session::flash('message', 'User does nor exist');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('seller.login');
        }
    }

    public function logOut()
    {

        session::forget('susername');
        session::forget('semail');
        session::forget('stype');
        session::forget('sid');
        return redirect()->route('seller.login');
    }



    /*    add coupon */

    public function addCoupon(Request $request)
    {
        $category = Category::all();

        return view('seller.dashboard.addcoupon', ['category' => $category]);
    }


    public function addCategory(Request $request)
    {

        $sel = Category::all();
        return view('seller.dashboard.addcategory', ["category" => $sel]);
    }


    public function categoryStore(Request $request)
    {
        Category::Create(['name' => $request->name, 'parent_id' => $request->parent_catgory]);

        return back()
            ->with('success', 'You have successfully added category.');
    }


    public function imageStore(Request $request)
    {

        if ($request->image != "") {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName =  session::get('sid') . time() . '.' . $request->image->extension();

            $path = public_path('images\\seller\\' . session::get('sid') . '\\');
            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true); //creates directory
            }

            $request->image->move($path, $imageName);
        }
        /*
            Write Code Here for
            Store $imageName name in DATABASE from HERE
        */
        $zipuser = User::find((int)session::get('sid'));
        Product::Create([
            'name' => $request->name,
            'price' => $request->price,
            'user_id' => (int)session::get('sid'),
            'sale_price' => $request->saleprice,
            'discount' => $request->discount,
            'detail' => $request->detail,
            'code' => $request->code,
            'category' => $request->parent_category,
            'valid_till' => $request->valid,
            'status' => $request->listing,
            'image' => '\images\\seller\\' . session::get('sid') . '\\' . "\\" . $imageName,
            'zip1' => $zipuser->zip
        ]);


        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }




    public function updateCategory(Request $request)
    {

        //get the object of product you want to update
        $products = Category::find($request->cid);
        $products->name = $request->name;
        $products->parent_id = $request->parent_category;
        $products->save();
        return back()
            ->with('success', 'You have successfully updated the data.');
    }


    public function updateimageStore(Request $request)
    {

        //    return $request->image;
        $product = Product::find($request->cid);
        if ($request->image) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName =  session::get('sid') . time() . '.' . $request->image->extension();

            $path = public_path('images\\seller\\' . session::get('sid') . '\\');
            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true); //creates directory
            }

            $request->image->move($path, $imageName);

            $products = Product::find($request->cid);
            $products->name = $request->name;
            $products->price = $request->price;
            $products->sale_price = $request->saleprice;
            $products->discount = $request->discount;
            $products->detail = $request->detail;
            $products->code = $request->code;
            $products->category = $request->parent_category;
            $products->image = '\images\\seller\\' . session::get('sid') . '\\' . "\\" . $imageName;

            $products->status = $request->listing;
            $products->valid_till =  Carbon::createFromFormat('d-m-Y', $request->valid)->format('Y-m-d');
            $products->save();
        } else {

            //get the object of product you want to update
            $products = Product::find($request->cid);
            $products->name = $request->name;
            $products->price = $request->price;
            $products->sale_price = $request->saleprice;
            $products->discount = $request->discount;
            $products->detail = $request->detail;
            $products->code = $request->code;
            $products->category = $request->parent_category;
            $products->status = $request->listing;
            $products->valid_till =  Carbon::createFromFormat('d-m-Y', $request->valid)->format('Y-m-d');
            $products->zip1 = $request->zip;
            $products->save();
        }


        return back()
            ->with('success', 'You have successfully updated the data.');
    }

    /*  add coupon end */

    public function couponList(Request $request)
    {
        $sel = Product::select("*")->where('user_id', session::get('sid'))->get();
        return view('seller.dashboard.couponlist', ['productList' => $sel]);
    }

    public function categoryList(Request $request)
    {
        $sel = Category::select("*")->get();
        return view('seller.dashboard.categorylist', ['productList' => $sel]);
    }


    public function couponDelete($id)
    {
        $res = Product::find($id)->delete();
        $sel = Product::select("*")->get();
        return redirect()->route('seller.coupon.list', ['productList' => $sel]);
    }



    public function categoryDelete($id)
    {
        $res = Category::find($id)->delete();
        $sel = Category::select("*")->get();
        return redirect()->route('seller.category.list', ['productList' => $sel]);
    }



    public function couponEdit($id)
    {
        $res = Product::find($id);

        if ($res->category != 0) {

            $res1 = Category::find($res->category);

            $catlist = Category::select('name')->where('parent_id', $res1->parent_id)->get();
            if (count($catlist) > 0) {
                $catlistdata = $catlist[0]['name'];
            } else {
                $catlistdata = "";
            }
        } else {
            $catlistdata = "";
        }
        $cat = Category::all();
        return view('seller.dashboard.editcoupon', ['detail' => $res, 'category' => $cat, "category_name" => $catlistdata]);
    }

    public function categoryEdit($id)
    {
        $res = Category::find($id);
        $catlist = Category::select('name')->where('id', $res->parent_id)->get();
        if (count($catlist) > 0) {
            $catlistdata = $catlist[0]['name'];
        } else {
            $catlistdata = "";
        }
        $cat = Category::all();
        return view('seller.dashboard.editcategory', ['detail' => $res, 'category' => $cat, "category_name" => $catlistdata]);
    }

    public function map()
    {

        $url = "https://api.ipify.org/?format=json";

        // Initialize a CURL session.
        $ch = curl_init();

        // Return Page contents.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //grab URL and pass it to the variable.
        curl_setopt($ch, CURLOPT_URL, $url);

        $result = json_decode(curl_exec($ch), true);


        //    $ip = $result['ip'];
        $ip = "99.88.83.171";
        $data = \Location::get($ip);

        $latitude = $data->latitude;
        $longitude = $data->longitude;
        $latitudes  = [floor($latitude) - 2, ceil($latitude) + 2];
        $longitudes = [floor($longitude) - 1, ceil($longitude) + 1];
        $locations  = Zip::whereBetween('latitude', [$latitudes])->whereBetween('longitude', [$longitudes])
            ->get();
        $zips = [];
        $city = [];
        $state = [];

        foreach ($locations as $location) {
            $theta = $longitude - $location->longitude;
            $dist = sin(deg2rad($latitude)) * sin(deg2rad($location->latitude)) +  cos(deg2rad($latitude)) * cos(deg2rad($location->latitude)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;

            if ($miles <= 15) {
                $zips[] = $location->zip;
                $city[] = $location->primary_city;
                $state[] = $location->state;
                $country[] = $location->country;
            }
        }
        return $zips;
    }



    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id", $request->country_id)->orderBy('name', 'asc')
            ->get(["name", "state_id", "id"]);

        return response()->json($data);
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = Zip::select('primary_city', 'state')->where("state", $request->state_id)
            ->distinct("primary_city")->orderBy('primary_city', 'asc')->get();

        return response()->json($data);
    }


    public function profile(Request $request)
    {
        $data['countries'] = Country::get(["name", "id"])
            ->where("id", 1);
        $data['user'] = User::select("*")->where('id', session::get('sid'))->get();

        return view('seller.dashboard.profile', $data);
    }


    public function updateProfile(Request $request)
    {



        $country = Country::find($request->country);
        $userInsert = User::find(session::get('sid'));
        if ($request->image) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName =  session::get('sid') . time() . '.' . $request->image->extension();

            $path = public_path('images\\seller\\' . session::get('sid') . '\\');
            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true); //creates directory
            }

            $request->image->move($path, $imageName);
            $country = Country::find($request->country);
            $userInsert = User::find(session::get('sid'));
            $userInsert->name = $request->fname;
            $userInsert->detail = $request->detail;
            $userInsert->store = $request->store;
            $userInsert->country = $country->name;
            $userInsert->state = $request->state;
            $userInsert->city = $request->city;
            $userInsert->zip = $request->zip;
            $userInsert->address = $request->address;
            $userInsert->logo = '\images\\seller\\' . session::get('sid') . '\\' . "\\" . $imageName;

            $userInsert->save();
        } else {

            //get the object of product you want to update


            $country = Country::find($request->country);
            $userInsert = User::find(session::get('sid'));
            $userInsert->name = $request->fname;
            $userInsert->detail = $request->detail;
            $userInsert->store = $request->store;
            $userInsert->country = $country->name;
            $userInsert->state = $request->state;
            $userInsert->city = $request->city;
            $userInsert->zip = $request->zip;
            $userInsert->address = $request->address;
            $userInsert->save();
        }


        return back()
            ->with('success', 'You have successfully updated the data.');
    }



    public function password(Request $request)
    {
        $data['user'] = User::select("*")->where('id', session::get('sid'))->get();

        return view('seller.dashboard.password', $data);
    }

    public function updatePassword(Request $request)
    {

        $userInsert = User::find(session::get('sid'));

        $hashedPassword = Hash::make($request->password);
        $userInsert->password = $hashedPassword;
        $userInsert->save();

        return back()
            ->with('success', 'You have successfully updated the password.');
    }



    public function dates(Request $request)
    {

        return $date = Carbon::now()->addDays(5)->format('m/d/Y');
    }
}
