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
                    <h3 class="block-title">Transaction Detail</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive pt-2">
                        <table id="my-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>

                                    </th>
                                    <th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center child-cell">
                                        Transaction
                                    </td>
                                    <td class="text-center child-cell active">
                                        Detail
                                    </td>

                                </tr>

                                <tr>
                                    <td class="text-center child-cell">
                                        Payment Id
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['id'] }}
                                    </td>

                                </tr>


                                <tr>
                                    <td class="text-center child-cell">
                                        state
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['state'] }}
                                    </td>

                                </tr>

                                <tr>
                                    <td class="text-center child-cell">
                                        method of payment
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['payer']['payment_method'] }}
                                    </td>

                                </tr>

                                <tr>
                                    <td class="text-center child-cell">
                                        status
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['payer']['status'] }}
                                    </td>

                                </tr>



                                @foreach ($data['payer']['payer_info'] as $keys => $vals)
                                    @if ($keys != 'shipping_address')
                                        <tr>
                                            <td class="text-center child-cell">
                                                {{ $keys }}
                                            </td>
                                            <td class="text-center child-cell active">
                                                {{ $vals }}
                                            </td>

                                        </tr>
                                    @endif
                                @endforeach

                                @foreach ($data['payer']['payer_info']['shipping_address'] as $keyss => $valss)
                                    <tr>
                                        <td class="text-center child-cell">
                                            {{ $keyss }}
                                        </td>
                                        <td class="text-center child-cell active">
                                            {{ $valss }}
                                        </td>

                                    </tr>
                                @endforeach



                                @foreach ($data['transactions'][0]['amount'] as $keys => $vals)
                                    @if ($keys != 'details')
                                        <tr>
                                            <td class="text-center child-cell">
                                                {{ $keys }}
                                            </td>
                                            <td class="text-center child-cell active">
                                                {{ $vals }}
                                            </td>

                                        </tr>
                                    @endif
                                @endforeach


                                @foreach ($data['transactions'][0]['amount']['details'] as $keys => $vals)
                                    <tr>
                                        <td class="text-center child-cell">
                                            {{ $keys }}
                                        </td>
                                        <td class="text-center child-cell active">
                                            {{ $vals }}
                                        </td>

                                    </tr>
                                @endforeach



                                <tr>
                                    <td class="text-center child-cell">
                                        Total
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['transactions'][0]['amount']['total'] }}&nbsp;
                                        {{ $data['transactions'][0]['amount']['currency'] }}
                                    </td>
                                </tr>




                                <tr>
                                    <td class="text-center child-cell">
                                        Details
                                    </td>
                                    <td class="text-center child-cell active">

                                    </td>
                                </tr>


                                <tr>
                                    <td class="text-center child-cell">
                                        Total
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['transactions'][0]['amount']['details']['subtotal'] }}&nbsp;
                                        {{ $data['transactions'][0]['amount']['currency'] }}
                                    </td>
                                </tr>



                                <tr>
                                    <td class="text-center child-cell">
                                        Total
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['transactions'][0]['amount']['details']['subtotal'] }}&nbsp;
                                        {{ $data['transactions'][0]['amount']['currency'] }}
                                    </td>
                                </tr>



                                <tr>
                                    <td class="text-center child-cell">
                                        shipping
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['transactions'][0]['amount']['details']['shipping'] }}&nbsp;
                                        {{ $data['transactions'][0]['amount']['currency'] }}
                                    </td>
                                </tr>


                                <tr>
                                    <td class="text-center child-cell">
                                        insurance
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['transactions'][0]['amount']['details']['insurance'] }}&nbsp;
                                        {{ $data['transactions'][0]['amount']['currency'] }}
                                    </td>
                                </tr>




                                <tr>
                                    <td class="text-center child-cell">
                                        Handling Fee
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['transactions'][0]['amount']['details']['handling_fee'] }}&nbsp;
                                        {{ $data['transactions'][0]['amount']['currency'] }}
                                    </td>
                                </tr>



                                <tr>
                                    <td class="text-center child-cell">
                                        Shipping Fee
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['transactions'][0]['amount']['details']['shipping_discount'] }}&nbsp;
                                        {{ $data['transactions'][0]['amount']['currency'] }}
                                    </td>
                                </tr>



                                <tr>
                                    <td class="text-center child-cell">
                                        Discount
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['transactions'][0]['amount']['details']['discount'] }}&nbsp;
                                        {{ $data['transactions'][0]['amount']['currency'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center child-cell">
                                        Item Detail
                                    </td>
                                    <td class="text-center child-cell active">

                                    </td>
                                </tr>

                                @foreach ($data['transactions'][0]['item_list']['items'][0] as $key => $val)
                                    <tr>
                                        <td class="text-center child-cell">
                                            {{ $key }}
                                        </td>
                                        <td class="text-center child-cell active">
                                            {{ $val }}
                                        </td>
                                    </tr>
                                @endforeach


                                <tr>
                                    <td class="text-center child-cell">
                                        Shipping Address
                                    </td>
                                    <td class="text-center child-cell active">

                                    </td>
                                </tr>



                                @foreach ($data['transactions'][0]['item_list']['shipping_address'] as $key => $val)
                                    <tr>
                                        <td class="text-center child-cell">
                                            {{ $key }}
                                        </td>
                                        <td class="text-center child-cell active">
                                            {{ $val }}
                                        </td>
                                    </tr>
                                @endforeach


                                <tr>
                                    <td class="text-center child-cell">
                                        Cart
                                    </td>
                                    <td class="text-center child-cell active">
                                        {{ $data['cart'] }}
                                    </td>
                                </tr>



                            </tbody>
                        </table>

                    </div>
                </div>

            </div>


        </div>
</main>



@include('seller/dashboard/master/footer')

@yield('script')
</body>

</html>
