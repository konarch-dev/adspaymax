<!doctype html>
<html lang="en" dir="ltr">





@include('admin/dashboard/master/header1')


<!--   add coupon form -->

<main class="main-content">
    @include('admin/dashboard/master/navigation')
    <br> <br> <br>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            

            <div class="col-md-12 col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Coupon List</h4>
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
                                             <th>Name</th>
                                             <th>Price</th>
                                             <th>Sale Price</th>
                                             <th>Discount</th>
                                             <th>Code</th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                         @foreach ($productList as $val)
                                            
                                          <tr>
                                             <td>{{$val->id}}</td>
                                             <td>{{$val->name}}</td>
                                             <td>{{$val->price}}</td>
                                             <td>{{$val->sale_price}}</td>
                                             <td>{{$val->discount}}</td>
                                             <td>{{$val->code}}</td>
                                             <td>
                                                <a href="coupon/edit/{{$val->id}}" class="btn btn-primary">Edit</a> 
                                                <a href="coupon/delete/{{$val->id}}" class="btn btn-danger">Delete</a>
                                                
                                                </</td>
                                          </tr>
                                          
                                         @endforeach
                                       </tbody>
                                       <tfoot>
                                          <tr>
                                             <th>Id</th>
                                             <th>Name</th>
                                             <th>Price</th>
                                             <th>Sale Price</th>
                                             <th>Discount</th>
                                             <th>Code</th>
                                             <th></th>
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



@include('admin/dashboard/master/footer')

@yield('script')
</body>

</html>
