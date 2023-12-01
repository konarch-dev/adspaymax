<!DOCTYPE html>

 

<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

 

<head>

<meta charset="utf-8″>

<meta name="viewport" content="width=device-width, initial-scale=1″>

 

<title>Laravel 7 PayPal Payment Gateway Integration Tutorial</title>

 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

</head>

 

<body>

    <h4>I want to pay 768 USD</h4>
    <form method="post" action="{!! URL::to('paypal') !!}" >
        @csrf
       <input type="hidden" name="amount" value="768"> 
       <input type="submit" name="paynow" value="Pay Now">
    </form>

</body>

 

</html>