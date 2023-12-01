<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Zip;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Support\Facades\File;
use DB;
use Carbon\Carbon;


use App\Models\Country;
use App\Models\State;
use App\Models\City;


use function PHPSTORM_META\map;

//use Session;



class adminController extends Controller
{
    public function index(Request $request)
    {

        $product = Product::count();
        $active = Product::where('status', 1)->count();
        $inactive = Product::where('status', 0)->count();
        return view('admin.dashboard.index', ["product" => $product, "active" => $active, "inactive" => $inactive]);
    }

    public function register(Request $request)
    {
        return view('admin.dashboard.register');
    }

    public function singnUp(Request $request)
    {
        $selUser = User::select("email", "type")->where(['email' => $request->email, 'type' => "admin"])->count();
        if ($selUser > 0) {
            Session::flash('message', 'Already have Admin Account');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin.register');
        } else {


            $inputs = [
                'email'    => $request->email,
                'password' => $request->password,
                'name' => $request->fname
            ];

            $user_create = User::create($inputs);
            Mail::to($request->email)->send(new 'UserSignUpMail');


            $rules = array(
                'name'             => 'required',                        // just a normal required validation
                'email'            => 'required|email',     // required and must be unique in the ducks table
                'password'         => 'required|min:6'         // required and has to match the password field
            );

            // do the validation ----------------------------------
            // validate against the inputs from our form
            $validator = 'Validator'::make($inputs, $rules);

            // check if the validator failed -----------------------
            if ($validator->fails()) {

                // get the error messages from the validator
                $messages = $validator->messages();


                // redirect our user back to the form with the errors from the validator
                return redirect()->route('admin.register')->withErrors($messages);
            } else {




                $hashedPassword = Hash::make($request->password);

                //  return Hash::check("12334556h6", '$2y$10$u8PPa.xrp.Sog0u8TzaHHOV.BQ6wZJCd5sSwm.eVcAa/KM.6a6ZTS');
                $userInsert = User::Create(['name' => $request->fname, 'email' => $request->email, "password" => $hashedPassword, "type" => "admin"]);
                if ($userInsert) {

                    session::put('ausername',  $request->fname);
                    session::put('aemail',  $request->email);
                    session::put('atype',  "admin");
                    session::put('aid',  $userInsert->id);
                }
                return redirect()->route('admin.dashboard');
            }
        }
    }

    public function login(Request $request)
    {
        return view('admin.dashboard.login');
    }

    public function signIn(Request $request)
    {

        $selUser = User::select("email", "type")->where(['email' => $request->email, 'type' => "admin"])->count();
        if ($selUser > 0) {
            $selUserData = User::select("id", "name", "email", "type", "password")->where(['email' => $request->email, 'type' => "admin", 'status' => 1])->get();

            $hashedPassword = Hash::make($request->password);

            if (Hash::check($request->password, $selUserData[0]['password'])) {

                session::put('ausername', $selUserData[0]['name']);
                session::put('aemail', $selUserData[0]['email']);
                session::put('atype', $selUserData[0]['type']);
                session::put('aid', $selUserData[0]['id']);
                return redirect()->route('admin.dashboard');
            } else {
                Session::flash('message', 'Username or password does not match');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->route('admin.login');
            }
        } else {

            Session::flash('message', 'User does nor exist');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin.login');
        }
    }

    public function logOut()
    {

        session::forget('ausername');
        session::forget('aemail');
        session::forget('atype');
        session::forget('aid');
        return redirect()->route('admin.login');
    }



    /*    add coupon */

    public function addCoupon(Request $request)
    {
        $category = Category::all();

        return view('admin.dashboard.addcoupon', ['category' => $category]);
    }


    public function addCategory(Request $request)
    {

        $sel = Category::all();
        return view('admin.dashboard.addcategory', ["category" => $sel]);
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

            $imageName =  session::get('aid') . time() . '.' . $request->image->extension();

            $path = public_path('images\\seller\\' . session::get('aid') . '\\');
            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true); //creates directory
            }

            $request->image->move($path, $imageName);
        }
        /*
            Write Code Here for
            Store $imageName name in DATABASE from HERE
        */
        Product::Create([
            'name' => $request->name,
            'price' => $request->price,
            'user_id' => (int)session::get('aid'),
            'sale_price' => $request->saleprice,
            'discount' => $request->discount,
            'detail' => $request->detail,
            'code' => $request->code,
            'category' => $request->parent_category,
            'valid_till' => $request->valid,
            'status' => $request->listing,
            'image' => '\images\\' . session::get('aid') . '\\' . "\\" . $imageName,
            'zip1' => $request->zip
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

            $imageName =  session::get('aid') . time() . '.' . $request->image->extension();

            $path = public_path('images\\' . session::get('aid') . '\\');
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
            $products->image = '\images\\' . session::get('aid') . '\\' . "\\" . $imageName;
            $products->zip1 = $request->zip;
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
        $sel = Product::select("*")->get();
        return view('admin.dashboard.couponlist', ['productList' => $sel]);
    }

    public function categoryList(Request $request)
    {
        $sel = Category::select("*")->get();
        return view('admin.dashboard.categorylist', ['productList' => $sel]);
    }


    public function couponDelete($id)
    {
        $res = Product::find($id)->delete();
        $sel = Product::select("*")->get();
        return redirect()->route('admin.coupon.list', ['productList' => $sel]);
    }




    public function categoryDelete($id)
    {
        $res = Category::find($id)->delete();
        $sel = Category::select("*")->get();
        return redirect()->route('admin.category.list', ['productList' => $sel]);
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
        return view('admin.dashboard.editcoupon', ['detail' => $res, 'category' => $cat, "category_name" => $catlistdata]);
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
        return view('admin.dashboard.editcategory', ['detail' => $res, 'category' => $cat, "category_name" => $catlistdata]);
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
        $data = 'Location'::get($ip);

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



    public function profile(Request $request)
    {
        $data['countries'] = Country::get(["name", "id"])
            ->where("id", 1);
        $data['user'] = User::select("*")->where('id', session::get('aid'))->get();

        return view('admin.dashboard.profile', $data);
    }


    public function updateProfile(Request $request)
    {





        //get the object of product you want to update


        $country = Country::find($request->country);
        $userInsert = User::find(session::get('aid'));
        $userInsert->name = $request->fname;
        $userInsert->detail = $request->detail;
        $userInsert->country = $country->name;
        $userInsert->state = $request->state;
        $userInsert->city = $request->city;
        $userInsert->zip = $request->zip;
        $userInsert->address = $request->address;
        $userInsert->save();
        return back()
            ->with('success', 'You have successfully updated the data.');
    }



    public function password(Request $request)
    {
        $data['user'] = User::select("*")->where('id', session::get('aid'))->get();

        return view('admin.dashboard.password', $data);
    }

    public function updatePassword(Request $request)
    {

        $userInsert = User::find(session::get('aid'));

        $hashedPassword = Hash::make($request->password);
        $userInsert->password = $hashedPassword;
        $userInsert->save();

        return back()
            ->with('success', 'You have successfully updated the password.');
    }



    public function userList(Request $request)
    {

        $userList = User::all()->where('type', 'vendor');


        return view('admin.dashboard.userlist', ["userlist" => $userList]);
    }



    public function adminList(Request $request)
    {

        $userList = User::all()->where('type', 'admin');


        return view('admin.dashboard.adminlist', ["userlist" => $userList]);
    }


    public function userstatus(Request $request)
    {
        $products = User::find($request->id);
        if ($products->status == 1) {
            $products->status = 0;

            $item = Product::where('user_id', $request->id)->update(['status' => 0]);
        } else {
            $products->status = 1;
            $item = Product::where('user_id', $request->id)->update(['status' => 1]);
        }
        $products->save();

        return $products->status;
    }
}
