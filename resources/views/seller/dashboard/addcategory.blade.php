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
                            <h4 class="card-title"> Add Category</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Please Enter The Category</p>

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      
                    @endif

                        <form action="{{ route('admin.category') }}" method="POST" enctype="multipart/form-data">
                          
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault01">Category Name</label>
                                    <input type="text" name="name" class="form-control" id="validationDefault01" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault02">Select Parent Category</label>
                                  <select name="parent_catgory" class="form-control">
                                    <option value=0>Select Category</option>
                                    @foreach($category as $key => $value)
                                    <option value={{$value->id}}>{{$value->name}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Add Category</button>
                            </div>
                        </form>
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
