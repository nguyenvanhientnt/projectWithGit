@extends('layout.admin-layout')
@section('content')
    <div class="container-fluid">

        <!-- *************************************************************** -->
        <!-- End Location and Earnings Charts Section -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Top Leader Table -->
        <!-- *************************************************************** -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/products" method="get" id="product_form">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlSelect1">Select category</label>
                                            <select name="category_id" class="form-control" id="categorySelect">
                                                <option value="0">All</option>
                                                @foreach($categories as $cate)
                                                    <option value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Search by keyword</label>
                                            <input value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                                            <input type="submit" style="visibility: hidden;" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Search by time</label>
                                            <input type="text" name="dates" class="form-control">
                                            <input type="hidden" name="start">
                                            <input type="hidden" name="end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <h4 class="card-title">Product list</h4>
                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">
                                    <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                            id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                        <a class="dropdown-item" href="#">Insert</a>
                                        <a class="dropdown-item" href="#">Update</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap v-middle mb-0">
                                <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkAll">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Id
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Name
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted px-2">Category
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Price</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                        Thumbnail
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $product)
                                    <tr>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input product-checkbox" id="checkbox_{{$product->id}}">
                                                <label class="custom-control-label" for="checkbox_{{$product->id}}"></label>
                                            </div>
                                        </td>
                                        <td class="border-top-0 px-2 py-4">
                                            {{$product->id}}
                                        </td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14">{!!$product->name!!}</td>
                                        <td class="border-top-0 px-2 py-4">{{$product->category->name}}</td>
                                        <td class="border-top-0 px-2 py-4">{{$product->price}}</td>
                                        <td class="border-top-0 text-center px-2 py-4">
                                            @foreach($product->large_photos as $p)
                                                <img src="{{$p}}" alt="" class="rounded-circle" width="45" height="45">
                                            @endforeach
                                        </td>
                                        <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                            <a href="/products/{{$product->id}}" class="text-primary mr-1">Detail</a>
                                            <a href="/products/{{$product->id}}/edit" class="text-orange mr-1">Edit</a>
                                            <a href="" class="text-danger mr-1">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
    </div>
@endsection
@section('script')
    <script>
        $('input[name="dates"]').daterangepicker(
            {
                locale: {
                    format: 'DD/MM/YYYY'
                },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }
        );
        $('#categorySelect').change(function () {
            $('#product_form').submit();
        })
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
            $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
            $('#product_form').submit();
        });
    </script>
@endsection