<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

use App\Models\Paypal;
/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use App\Models\Category;
use App\Models\ClientCoupon;
use App\Models\Product;

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use URL;
use Notification;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PaymentController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }
    public function index()
    {
        return view('paywithpaypal');
    }
    public function payWithpaypal(Request $request)
    {
        
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Item 1') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount')); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($request->get('amount'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
            ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');

    }


    public function payWithpaypalUrl($amounturl1)
    {
        $amounturl=explode("-",$amounturl1);
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Item 1') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($amounturl[0]); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($amounturl[0]);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
            ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
            Session::put('plan', $amounturl[1]);
        /** dd($payment->create($this->_api_context));exit; **/
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');

    }

    public function getPaymentStatus()
    {
        
        $request=request();//try get from method

        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        //if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
        if (empty($request->PayerID) || empty($request->token)) {

            Session::put('error', 'Payment failed');
            //return Redirect::to('/');
            return view('seller.dashboard.failure');
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        //$execution->setPayerId(Input::get('PayerID'));
        $execution->setPayerId($request->PayerID);

        /**Execute the payment **/
         $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            Session::put('success', 'Payment success');

            // mail sent
            $details = [
                'title' => 'Mail from adspaymax.com',
                'body' => 'Thanks for your payment',
                'data'=>json_decode($result,true)
            ];
           
            \Mail::to('konarch92@gmail.com')->send(new \App\Mail\PaypalMail($details));

            // mail sent
            $res=json_decode($result,true);
            $paypal = new Paypal;
 
            $paypal->user_id = session::get('sid');
            $paypal->plan=Session::get('plan');
            $paypal->amount=$res['transactions'][0]['amount']['total'];
            $paypal->currency=$res['transactions'][0]['amount']['currency'];
            $paypal->date_start= Carbon::now()->format('Y-m-d');
            $paypal->date_end= Carbon::now()->addDays(30)->format('Y-m-d');
            $paypal->created_at=Carbon::now()->format('Y-m-d');
            $paypal->updated_at=Carbon::now()->format('Y-m-d');
            $paypal->save();
          //  session::forget('plan');
            //add update record for cart
            return view('seller.dashboard.success',['data'=>json_decode($result,true)]);  //back to product page

        }

        Session::put('error', 'Payment failed');
       // return Redirect::to('/'); 

       return view('seller.dashboard.failure');
    }





    public function clientpayWithpaypalUrl($pid,$amounturl1)
    {
      
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        Session::put('cartpid',$pid);
        $item_1 = new Item();

        $item_1->setName('Item 1') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($amounturl1); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($amounturl1);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('client/status')) /** Specify return URL **/
            ->setCancelUrl(URL::to('client/status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
            Session::put('plan', $amounturl1);
        /** dd($payment->create($this->_api_context));exit; **/
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');

    }


    
    public function clientgetPaymentStatus()
    {
        
        $request=request();//try get from method

        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');

        $category=Category::select('id','name')->where('parent_id',0)->get();
        foreach($category as $val)
        {
            
            $subcategory=Category::select('id','name')->where('parent_id',$val->id)->get();
          
            foreach($subcategory as $vals)
            {
                
                $menu['menu'][$val->name][]=["primary"=>$val->id,'id'=>$vals->id,'name'=>$vals->name];
            }
        }
      
        //if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
        if (empty($request->PayerID) || empty($request->token)) {

            Session::put('error', 'Payment failed');
            //return Redirect::to('/');
            return view('client.failure',['category'=>$category,'menu'=>$menu]);
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        //$execution->setPayerId(Input::get('PayerID'));
        $execution->setPayerId($request->PayerID);

        /**Execute the payment **/
         $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            Session::put('success', 'Payment success');

            // mail sent
            $details = [
                'title' => 'Mail from adspaymax.com',
                'body' => 'Thanks for your payment',
                'data'=>json_decode($result,true)
            ];
/*
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
                    */
           
        
            // mail sent
            $res=json_decode($result,true);
            $paypal = new Paypal;
 
            $paypal->user_id = session::get('cid');
            $paypal->plan='1 max download';
            $paypal->amount=$res['transactions'][0]['amount']['total'];
            $paypal->currency=$res['transactions'][0]['amount']['currency'];
            $paypal->date_start= Carbon::now()->format('Y-m-d');
            $paypal->date_end= Carbon::now()->addDays(3)->format('Y-m-d');
            $paypal->created_at=Carbon::now()->format('Y-m-d');
            $paypal->updated_at=Carbon::now()->format('Y-m-d');
            $paypal->save();
            //  session::forget('plan');
            //add update record for cart

            $productsel=Product::select("*")->where('id',Session::get('cartpid'))->first();
            $couponclient=new ClientCoupon;
            $couponclient->customer_id=session::get('cid');
            $couponclient->seller_id=$productsel->user_id;
            $couponclient->valid_till=$productsel->valid_till;
            $couponclient->product_id=$productsel->id;
            $couponclient->detail=json_encode(["code"=>$productsel->code,"discount"=>$productsel->discount,"price"=>$productsel->price,"sale_price"=>$productsel->sale_price]);
            $couponclient->download_date=date('Y-m-d');
            $couponclient->save();

            Session::forget('cartpid');
            \Mail::to('konarch@patterns247.net')->send(new \App\Mail\CouponMail($details,$couponclient->id));

            return view('client.success',['couponid'=>$couponclient->id,'category'=>$category,'menu'=>$menu,'data'=>json_decode($result,true)]);  //back to product page

        }

        Session::put('error', 'Payment failed');
       // return Redirect::to('/'); 

       return view('client.failure',['category'=>$category,'menu'=>$menu]);
    }

}