<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Zip;
use App\Models\Country;
use App\Models\Paypal;
use App\Models\State;
use Illuminate\Http\Request;
use DB;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class clientController extends Controller
{
    public function show()
    {
        $from = [255, 0, 0];
$to = [0, 0, 255];
        $data = QrCode::size(200)
        ->format('png')
        ->merge('/public/assets/img/logo.png',.4)
        ->errorCorrection('M')
        ->style('square')
    ->eye('circle')
    ->gradient($from[0], $from[1], $from[2], $to[0], $to[1], $to[2], 'diagonal')
    ->margin(0)
        ->generate(
            'https://twitter.com/HarryKir',
        );

    return response($data)
        ->header('Content-type', 'image/png');


    }
    public function index(Request $request){

        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        
            $storeproduct= DB::table('products')->select('users.store','products.name','products.code','products.id','products.detail','products.valid_till','products.image','users.name',
            'users.country','users.state','users.city')->where('products.status',1)->join('users','users.id', '=', 'products.user_id')->orderBy('products.id','desc')->limit(8)->get();

            $product=Product::select('*')->where('status',1)->orderBy('id','desc')->limit(8)->get();
            $store=User::select('*')->where('type','vendor')->where('status',1)->orderBy('id','desc')->get();
            
            // map //


            $url = "https://api.ipify.org/?format=json";
 
            // Initialize a CURL session.
            $ch = curl_init(); 
     
            // Return Page contents.
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     
            //grab URL and pass it to the variable.
            curl_setopt($ch, CURLOPT_URL, $url);
     
            $result = json_decode(curl_exec($ch),true);
     
    
            //    $ip = $result['ip']; 
            $ip="23.227.202.6";
            $data = \Location::get($ip);
    
            $latitude=$data->latitude;
            $longitude=$data->longitude;
            $latitudes  = [floor($latitude)-2, ceil($latitude)+2];
            $longitudes = [floor($longitude)-1, ceil($longitude)+1];
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
        
                if ($miles <= 15){
                    $zips[] = $location->zip;
                    $city[] = $location->primary_city;
                    $state[] = $location->state;
                    $country[] = $location->country;
                }
            }
           // return $zips;
          // print_r($zips);
            $nearstore=User::select('*')->whereIn('zip',$zips)->get();

            // map end //
            return view('client.index',['category'=>$category,'menu'=>$menu,'product'=>$product,'store'=>$store,'seller'=>$storeproduct,'nearstore'=>$nearstore]);
    }

    
    public function dealsGrid(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.deals-grid',['category'=>$category,'menu'=>$menu]);
    }
    
    
    public function dealsList(Request $request){

        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }

        return view('client.deals-list',['category'=>$category,'menu'=>$menu]);
    }

    public function dealsSingle(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.deals-single',['category'=>$category,'menu'=>$menu]);
      
    }

    public function couponGrid(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }

        $storeproduct= DB::table('products')->select('products.id','users.store','products.name as pname','products.code','products.id','products.detail','products.valid_till','products.image','users.name',
        'users.country','users.state','users.city')->where('products.status',1)->join('users','users.id', '=', 'products.user_id')->orderBy('products.id','desc')->limit(8)->get();

        return view('client.coupon-grid',['category'=>$category,'menu'=>$menu,'store'=>$storeproduct]);
     
    }
    
    public function couponList(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.coupon-list',['category'=>$category,'menu'=>$menu]);
       
    }

    public function couponDetail($id){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }

         $storeproduct= DB::table('products')->select('users.store','products.name','products.price','products.sale_price','products.discount','products.id','products.code','products.detail','products.valid_till','products.image','users.name as username',
         'users.address','users.zip', 'users.country','users.state','users.city')->where('products.status',1)->where('products.id',$id)->join('users','users.id', '=', 'products.user_id')->get();


        return view('client.coupon-detail',['category'=>$category,'menu'=>$menu,'detail'=>$storeproduct]);
       
    }

    public function blog(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.blog',['category'=>$category,'menu'=>$menu]);
   
    }

    public function blogList(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.blog-list',['category'=>$category,'menu'=>$menu]);
      
    }

    public function category(Request $request){

        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.category',['category'=>$category,'menu'=>$menu]);
    }

    public function cart(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.cart',['category'=>$category,'menu'=>$menu]);
        
    }

    public function wishList(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.wishlist',['category'=>$category,'menu'=>$menu]);
       
    }
  
    public function contact(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.contact',['category'=>$category,'menu'=>$menu]);
        
        
    }
    
    public function store(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
         $a=User::select('*')->where('store','like','a%')->where('type','vendor')->get();
         $b=User::select('*')->where('store','like','b%')->where('type','vendor')->get();
         $c=User::select('*')->where('store','like','c%')->where('type','vendor')->get();
         $d=User::select('*')->where('store','like','d%')->where('type','vendor')->get();
         $e=User::select('*')->where('store','like','e%')->where('type','vendor')->get();
         $f=User::select('*')->where('store','like','f%')->where('type','vendor')->get();
         $g=User::select('*')->where('store','like','g%')->where('type','vendor')->get();
         $h=User::select('*')->where('store','like','h%')->where('type','vendor')->get();
         $i=User::select('*')->where('store','like','i%')->where('type','vendor')->get();
         $j=User::select('*')->where('store','like','j%')->where('type','vendor')->get();
         $k=User::select('*')->where('store','like','k%')->where('type','vendor')->get();
         $l=User::select('*')->where('store','like','l%')->where('type','vendor')->get();
         $m=User::select('*')->where('store','like','m%')->where('type','vendor')->get();
         $n=User::select('*')->where('store','like','n%')->where('type','vendor')->get();
         $o=User::select('*')->where('store','like','o%')->where('type','vendor')->get();
         $p=User::select('*')->where('store','like','p%')->where('type','vendor')->get();
         $q=User::select('*')->where('store','like','q%')->where('type','vendor')->get();
         $r=User::select('*')->where('store','like','r%')->where('type','vendor')->get();
         $s=User::select('*')->where('store','like','s%')->where('type','vendor')->get();
         $t=User::select('*')->where('store','like','t%')->where('type','vendor')->get();
         $u=User::select('*')->where('store','like','u%')->where('type','vendor')->get();
         $v=User::select('*')->where('store','like','v%')->where('type','vendor')->get();
         $w=User::select('*')->where('store','like','w%')->where('type','vendor')->get();
         $x=User::select('*')->where('store','like','x%')->where('type','vendor')->get();
         $y=User::select('*')->where('store','like','y%')->where('type','vendor')->get();
         $z=User::select('*')->where('store','like','z%')->where('type','vendor')->get();

        return view('client.store',['category'=>$category,'menu'=>$menu,'store'=>['a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,'e'=>$e,
        'f'=>$f,'g'=>$g,'h'=>$h,'i'=>$i,'j'=>$j,'k'=>$k,'l'=>$l,'m'=>$m,'n'=>$n,'o'=>$o,'p'=>$p
        ,'q'=>$q,'r'=>$r,'s'=>$s,'t'=>$t,'u'=>$u,'v'=>$v,'w'=>$w,'x'=>$x,'y'=>$y,'z'=>$z]]);

    }


    public function about(Request $request){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.about',['category'=>$category,'menu'=>$menu]);

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
 
        $result = json_decode(curl_exec($ch),true);
 

        //    $ip = $result['ip']; 
        $ip="99.88.83.171";
        $data = \Location::get($ip);

        $latitude=$data->latitude;
        $longitude=$data->longitude;
        $latitudes  = [floor($latitude)-2, ceil($latitude)+2];
        $longitudes = [floor($longitude)-1, ceil($longitude)+1];
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
    
            if ($miles <= 15){
                $zips[] = $location->zip;
                $city[] = $location->primary_city;
                $state[] = $location->state;
                $country[] = $location->country;
            }
        }
       // return $zips;
      // print_r($zips);
        $store=User::select('*')->whereIn('zip',$zips)->get();
    
     // return view('client.about',['category'=>$category,'menu'=>$menu]);



    }

    public function storeDetail($id){
        
        $planrow=Paypal::select("plan")->whereDate('date_end','>=',date('Y-m-d'))->where('user_id',$id)->count();
       if($planrow>0)
       {
          $plan=Paypal::select("plan")->whereDate('date_end','>=',date('Y-m-d'))->where('user_id',$id)->orderBy('id','desc')->take(1)->get();
        foreach($plan as $val){
            $planlist[]=substr($val->plan,0,1);
        }
       $plancount=array_sum($planlist);
    }
    else{
        
       $plancount=1;
    }
        
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }

        $store=User::find($id);
       // $product=Product::select('*')->where('user_id',$id)
      //  ->groupLimit($plancount, 'category')->get();
       $cat=Category::all();
      foreach($cat as $val){
        $num[]=$val['id'];
      }
    
   
      $query="";
      $cnum=count($num);
      foreach($num as $key=>$val)
      {
        if($key!=$cnum-1)
        {
        $query.="(select `products`.*, `categories`.`id` as `pivot_category_id`,  `categories`.`name` as `cname`, `products`.`category` as `pivot_product_id` from `products` 
        inner join `categories` on `products`.`category` = `categories`.`id`
         where `categories`.`id`='".$val."' and `user_id`='".$id."' limit ".$plancount.") union all ";
        }
        else{
            $query.="(select `products`.*, `categories`.`id` as `pivot_category_id`, `categories`.`name` as `cname`, `products`.`category` as `pivot_product_id` from `products` 
            inner join `categories` on `products`.`category` = `categories`.`id`
             where `categories`.`id`='".$val."'  and `user_id`='".$id."' limit ".$plancount.") ";
        }
      }
     
     
      $categoriesWithProducts = DB::select($query);

        return view('client.store-detail',['category'=>$category,'menu'=>$menu,'store'=>$store,'product'=>$categoriesWithProducts]);
    }



    public function categoryList($id){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }


        
        $category1=Category::select('name','parent_id')->find($id);
       
        if($category1->parent_id!=0){
            $product=Product::select('products.id as pid','products.name as pname','products.price','products.code','products.sale_price'
        ,'products.image','products.discount', 'products.detail','users.id','users.name','users.store','users.id')->join('users','users.id', '=', 'products.user_id')->where('category',$category1->id)->get();
          
        }
        else{
        $product1=Category::select('id')->where('parent_id',$id)->get();
        foreach($product1 as $val)
        {
            $tmpid[]=$val->id;
        }
        
             $product=Product::select('products.id as pid','products.name as pname','products.price','products.code','products.sale_price'
            ,'products.image','products.discount','products.category', 'products.detail','users.id',
            'users.name','users.store','users.id')->join('users','users.id', '=', 'products.user_id')->whereIn('products.category',$tmpid)->get();
              
        }
        return view('client.category-list',['category'=>$category,'menu'=>$menu,'product'=>$product,'category1'=>$category1]);
       
    }

    public function login(){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        return view('client.login',['category'=>$category,'menu'=>$menu]);
    }
      
    public function signup(){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        $data= Country::get(["name", "id"])
        ->where("id", 1);
        return view('client.signup',['category'=>$category,'menu'=>$menu,'data'=>$data]);
    }



    public function register(Request $request){
       
          $selUser=User::select("email","type")->where(['email'=>$request->email,'type'=>"client","status"=>1])->count();
          if($selUser>0)
          {
              Session::flash('message', 'Already have a Account'); 
              Session::flash('alert-class', 'alert-danger'); 
              return redirect()->route('client.signup');
                 
          }
          else{
  
  
              $inputs = [
                  'email'    => $request->email,
                  'password' =>$request->password,
                  'name' => $request->name,
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
                  return redirect()->route('client.signup')->withErrors($messages);
                 
          
              }
              else{
              
  
          
          $hashedPassword = Hash::make($request->password);
          $country=Country::find($request->country);
  
        //  return Hash::check("12334556h6", '$2y$10$u8PPa.xrp.Sog0u8TzaHHOV.BQ6wZJCd5sSwm.eVcAa/KM.6a6ZTS');
          $userInsert=User::Create(['name'=>$request->name,
          'email'=>$request->email,
          "password"=>$hashedPassword,
          'status'=>1,
          "type"=>"client",
          "country"=>$country->name,
          "state"=>$request->state,
          "city"=>$request->city,
          "zip"=>$request->zip,
          "address"=>$request->address]);
          if($userInsert)
          {
  
            
       
              session::put('cusername',  $request->name);
              session::put('cemail',  $request->email);
              session::put('ctype',  "client");
              session::put('cid',  $userInsert->id);
  
            
  
              
             
          }         
          return redirect()->route('client.home');
                 
      }
          }
          
      }


      public function logOut(){

        session::forget('cusername');
        session::forget('cemail');
        session::forget('ctype');
        session::forget('cid');
        return redirect()->route('client.login');

    }

    public function signIn(Request $request){
      
        $selUser=User::select("email","type")->where(['email'=>$request->email,'type'=>"client"])->count();
        if($selUser>0)
        {
            $selUserData=User::select("id","name","email","type","password")->where(['email'=>$request->email,'type'=>"client"])->get();
          
            $hashedPassword = Hash::make($request->password);
          
            if (Hash::check($request->password, $selUserData[0]['password'])) 
            {

            session::put('cusername', $selUserData[0]['name']);
            session::put('cemail', $selUserData[0]['email']);
            session::put('ctype',$selUserData[0]['type']);
            session::put('cid', $selUserData[0]['id']);
            return redirect()->route('client.home');
            }
            else{
                Session::flash('message', 'Username or password does not match'); 
                Session::flash('alert-class', 'alert-danger'); 
                return redirect()->route('client.login');
            }
        }
        else{

            Session::flash('message', 'User does nor exist'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect()->route('client.login');

        }
        
    }


    public function scan($id){
        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
        $coupondata= DB::table('client_coupons')->select('*')->where('id',$id)->get();
         $storeproduct= DB::table('products')->select('users.store','products.name','products.price','products.sale_price','products.discount','products.id','products.code','products.detail','products.valid_till','products.image','users.name as username',
         'users.address','users.zip', 'users.country','users.state','users.city')->where('products.status',1)->where('products.id',$coupondata[0]->product_id)->join('users','users.id', '=', 'products.user_id')->get();
         $userdata= DB::table('users')->select('*')->where('id',$coupondata[0]->customer_id)->get();
         


        return view('client.scan-detail',['userdata'=>$userdata,'coupondata'=>$coupondata,'category'=>$category,'menu'=>$menu,'detail'=>$storeproduct]);
       
    }


    public function createForm(){
        return view('file-upload');
      }
      public function fileUpload(Request $req){
            $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);
         //   $fileModel = new File;
            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
              
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', 'uploaded');
            }
       }
          
    
}
