<!doctype html>
<html lang="en" dir="ltr">





@include('seller/dashboard/master/header1')


<!--   add coupon form -->

<main class="main-content">
    @include('seller/dashboard/master/navigation')
    <br> <br> <br>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            

            <div class="col-md-12 col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Payment History</h4>
                        </div>
                    </div>
              


                    <div class="row">
                        <div class="col-sm-12">
                           <div class="card">
                              <div class="card-header d-flex justify-content-between">
                                 <div class="header-title">
                                 </div>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>Plan</th>
                                             <th>Amount</th>
                                             <th>Valid from</th>
                                             <th>Valid to</th>
                                           
                                          </tr>
                                       </thead>
                                       <tbody>
                                         @foreach ($payhistory as $val)
                                            
                                          <tr>
                                             <td>{{$val->id}}</td>
                                             <td>{{$val->plan}}</td>
                                             <td>{{$val->amount}}&nbsp;{{$val->currency}}</td>
                                            
                                             <td>{{$val->date_start}}</td>
                                             <td>{{$val->date_end}}</td>
                                          </tr>
                                          
                                         @endforeach
                                       </tbody>
                                       <tfoot>
                                          <tr>
                                            <th>Id</th>
                                            <th>Plan</th>
                                            <th>Amount</th>
                                            <th>Valid from</th>
                                            <th>Valid to</th>
                                          </tr>
                                       </tfoot>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>




                </div>

            </div>
        </div>
    </div>
</main>



@include('seller/dashboard/master/footer')

@yield('script')
</body>

</html>
