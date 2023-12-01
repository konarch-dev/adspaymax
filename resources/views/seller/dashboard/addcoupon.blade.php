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
                            <h4 class="card-title"> Add Coupon</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Please Enter The Details</p>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('seller.coupon.image') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault01">Name</label>
                                    <input type="text" name="name" class="form-control" id="validationDefault01"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault02">Detail</label>
                                    <textarea class="form-control" name="detail" id="validationDefault02" placeholder="Required example textarea"
                                        required=""></textarea>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername" class="form-label">Price</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="number" name="price" class="form-control"
                                            id="validationCustomUsername" aria-label="Price"
                                            aria-describedby="basic-addon1" required>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername1" class="form-label">Sale Price</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="number" name="saleprice" class="form-control"
                                            id="validationCustomUsername1" aria-label="Sale Price"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault033">Add Discount</label>
                                    <input type="number" name="discount" class="form-control"
                                        id="validationDefault033">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault0333">Code</label>
                                    <input type="text" name="code" class="form-control" id="validationDefault0333"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault033344">Select Category</label>
                                    <select name="parent_category" class="form-control">
                                        <option value=0>Select Category</option>
                                        @foreach ($category as $key => $value)
                                            <option value={{ $value->id }}>{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault05">Upload Pic</label>
                                    <input type="file" class="form-control" name="image" id="validationDefault05">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault0333">Valid Till</label>
                                    <input type="date" name="valid" class="form-control" id="validationDefault0333"
                                        required>
                                </div>

                                <input type="hidden" name="zip" class="form-control" id="validationDefault033355"
                                    required>



                                <div class="col-md-6 mb-3">
                                    <input class="form-check-input" value="1" type="radio" name="listing"
                                        id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Enable Listing
                                    </label>
                                    <input class="form-check-input" value="0" type="radio" name="listing"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Disable Listing
                                    </label>
                                </div>

                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Add Coupon</button>
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
