
<!doctype html>
<html lang="en" dir="ltr">

@include('seller/dashboard/master/header1')
<!--   add coupon form -->
<main class="main-content">
    @include('seller/dashboard/master/navigation')
    <br> <br> <br>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">

            @php
            /*
            $data=json_decode('{
          "id": "PAYID-MVFLIKQ9WB86875SY844725R",
          "intent": "sale",
          "state": "approved",
          "cart": "7K120414J1875162L",
          "payer": {
            "payment_method": "paypal",
            "status": "UNVERIFIED",
            "payer_info": {
              "email": "konarch92@gmail.com",
              "first_name": "tester",
              "last_name": "tester",
              "payer_id": "PC44QWT8V3B8W",
              "shipping_address": {
                "recipient_name": "tester tester",
                "line1": "ghj",
                "line2": "ghj",
                "city": "florida",
                "state": "FL",
                "postal_code": "32001",
                "country_code": "US"
              },
              "country_code": "US"
            }
          },
          "transactions": [
            {
              "amount": {
                "total": "24.99",
                "currency": "USD",
                "details": {
                  "subtotal": "24.99",
                  "shipping": "0.00",
                  "insurance": "0.00",
                  "handling_fee": "0.00",
                  "shipping_discount": "0.00",
                  "discount": "0.00"
                }
              },
              "payee": {
                "merchant_id": "D63F95RQLD9VS",
                "email": "sb-5ti4a23949030@business.example.com"
              },
              "description": "Your transaction description",
              "soft_descriptor": "PAYPAL *TEST STORE",
              "item_list": {
                "items": [
                  {
                    "name": "Item 1",
                    "price": "24.99",
                    "currency": "USD",
                    "tax": "0.00",
                    "quantity": 1,
                    "image_url": ""
                  }
                ],
                "shipping_address": {
                  "recipient_name": "tester tester",
                  "line1": "ghj",
                  "line2": "ghj",
                  "city": "florida",
                  "state": "FL",
                  "postal_code": "32001",
                  "country_code": "US"
                }
              },
              "related_resources": [
                {
                  "sale": {
                    "id": "0GC98874RX462710H",
                    "state": "pending",
                    "amount": {
                      "total": "24.99",
                      "currency": "USD",
                      "details": {
                        "subtotal": "24.99",
                        "shipping": "0.00",
                        "insurance": "0.00",
                        "handling_fee": "0.00",
                        "shipping_discount": "0.00",
                        "discount": "0.00"
                      }
                    },
                    "payment_mode": "INSTANT_TRANSFER",
                    "reason_code": "PAYMENT_REVIEW",
                    "protection_eligibility": "INELIGIBLE",
                    "transaction_fee": {
                      "value": "1.50",
                      "currency": "USD"
                    },
                    "receipt_id": "985238656505976",
                    "parent_payment": "PAYID-MVFLIKQ9WB86875SY844725R",
                    "create_time": "2023-11-07T22:05:45Z",
                    "update_time": "2023-11-07T22:05:45Z",
                    "links": [
                      {
                        "href": "https://api.sandbox.paypal.com/v1/payments/sale/0GC98874RX462710H",
                        "rel": "self",
                        "method": "GET"
                      },
                      {
                        "href": "https://api.sandbox.paypal.com/v1/payments/sale/0GC98874RX462710H/refund",
                        "rel": "refund",
                        "method": "POST"
                      },
                      {
                        "href": "https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MVFLIKQ9WB86875SY844725R",
                        "rel": "parent_payment",
                        "method": "GET"
                      }
                    ],
                    "soft_descriptor": "PAYPAL *TEST STORE"
                  }
                }
              ]
            }
          ],
          "redirect_urls": {
            "return_url": "http://localhost/apmax1/status?paymentId=PAYID-MVFLIKQ9WB86875SY844725R",
            "cancel_url": "http://localhost/apmax1/status"
          },
          "create_time": "2023-11-07T22:03:21Z",
          "update_time": "2023-11-07T22:05:45Z",
          "links": [
            {
              "href": "https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MVFLIKQ9WB86875SY844725R",
              "rel": "self",
              "method": "GET"
            }
          ],
          "failed_transactions": []
        }',true);
       */
        @endphp
            <div class="card">
                <div class="card-header pb-3">
                  <h3 class="block-title">Transaction Failure </h3>
                </div>
                <div class="card-body p-0">
                   <div class="table-responsive pt-2">
                      Sorry we cant intiate the transaction 
                      <br>
                      <a href="seller/pricing" class="btn btn-primary">Try Again</a>
                      
                   </div>
                </div>

            </div>
            
          
    </div>
</main>



@include('seller/dashboard/master/footer')

@yield('script')
</body>

</html>
