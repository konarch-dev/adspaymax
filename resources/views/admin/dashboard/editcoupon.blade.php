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
                            <h4 class="card-title"> Edit Coupon</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Please Enter The Details</p>

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      
                    @endif

                        <form action="{{ route('admin.coupon.editdetail') }}" method="POST" enctype="multipart/form-data">
                          
                            @csrf
                            <input type="hidden" value="{{$detail->id}}" name="cid">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault01">Name</label>
                                    <input type="text" value="{{$detail->name}}" name="name" class="form-control" id="validationDefault01" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault02">Detail</label>
                                   <textarea class="form-control"  name="detail"  id="validationDefault02" placeholder="Required example textarea" required="">{{$detail->detail}}</textarea>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername" class="form-label">Price</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="number" name="price" value="{{$detail->price}}" class="form-control" id="validationCustomUsername"
                                            aria-label="Price" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername1" class="form-label">Sale Price</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="number" name="saleprice" value="{{$detail->sale_price}}"  class="form-control" id="validationCustomUsername1"
                                            aria-label="Sale Price" aria-describedby="basic-addon1" >
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault033">Add Discount</label>
                                    <input type="number" name="discount" value="{{$detail->discount}}" class="form-control" id="validationDefault033" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault0333">Code</label>
                                    <input type="text" name="code" value="{{$detail->code}}" class="form-control" id="validationDefault0333" required>
                                </div>
                              
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault05">Upload Pic</label>&nbsp;&nbsp;<img style="height:100px;width:100px" src="{{url('/public/'.$detail->image)}}">
                                    <input type="file" class="form-control" name="image"  id="validationDefault05">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault033344">Select Category</label>
                                    <select name="parent_category" class="form-control">

                                        @if($category_name!="")
                                        <option value={{$detail->parent_id}}>{{$category_name}}</option>
                                        @else
                                        <option value=0>Select Category</option>
                                        @endif
                                        <option value=0>Select Category</option>
                                        @foreach($category as $key => $value)
                                        <option value={{$value->id}}>{{$value->name}}</option>
                                        @endforeach
                                      </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="datepicker">Valid Till</label>
                                   
                                    <input type="text" id="datepicker" value="{{ date('d-m-Y',strtotime($detail->valid_till)) }}" name="valid" class="date form-control" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault033355">Zip Code</label>
                                    <input type="text"  value="{{$detail->zip1}}" name="zip" class="form-control" id="validationDefault033355" required>
                                </div>

                                @if($detail->status==0)
                                @php $status="checked"; @endphp
                                @else
                                @php $status=""; @endphp
                                @endif
                                @if($detail->status==1)
                                @php $status1="checked"; @endphp
                                @else
                                @php $status1=""; @endphp
                                @endif
                                
                                <div class="col-md-6 mb-3">
                                    <input class="form-check-input" value="1" type="radio" name="listing" id="flexRadioDefault1" {{$status1}}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Enable Listing
                                    </label>
                                    <input class="form-check-input" value="0" type="radio" name="listing" id="flexRadioDefault1"  {{$status}}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Disable Listing
                                    </label>
                                </div>

                            </div>
  
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Update Coupon</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<script type="text/javascript">  
    $('.date').datepicker({    
       format: 'dd-mm-yyyy'  
     });    
</script>  

@include('admin/dashboard/master/footer')


@yield('script')
</body>

</html>
