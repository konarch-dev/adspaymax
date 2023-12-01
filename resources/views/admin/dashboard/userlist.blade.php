@include('admin/dashboard/master/header1')
<!--   add coupon form -->

<main class="main-content">
    @include('admin/dashboard/master/navigation')

    <div class="container-fluid py-0 mt-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Seller List</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userlist as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                        {{ $value->email }}
                                    </td>
                                    <td>{{ $value->type }}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" value="{{ $value->status }}"
                                                id="{{ $value->id }}"
                                                onchange="handleStatusChange({{ $value->id }})"
                                                @if ($value->status) checked @endif />
                                            <label class="form-check-label" for="{{ $value->id }}">
                                                @if ($value->status)
                                                    <span id="txt{{ $value->id }}">active</span>
                                                @else
                                                <span id="txt{{ $value->id }}">inactive</span>
                                                @endif
                                            </label>
                                        </div>
                                    </td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>



@include('admin/dashboard/master/footer')

@yield('script')
<script>
    async function handleStatusChange(id) {
        const response = await fetch(`/apmax1/api/userstatus/${id}`, {
            method: 'GET'
        });
        const res = await response.json();
        if(res==1)
        {
            $(`#txt${id}`).text('active')
        }
        else
        {
            
            $(`#txt${id}`).text('inactive')
        }
    }
</script>
</body>

</html>
