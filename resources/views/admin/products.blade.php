@extends('layouts.admin_master')

@section('add_css')
    <!-- FooTable -->
    <link href="{{asset('backend/css/plugins/footable/footable.core.css')}}" rel="stylesheet">
@endsection

@section('header')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Products List</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li class="active">
                    <strong>Products List</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
@endsection
@section('content')

    <div class="wrapper wrapper-content animated fadeInRight ecommerce">
        <div class="ibox-content m-b-sm border-bottom">
            <a href="#">
                <button type="button" class="btn btn-w-m btn-primary">Create Product</button>
            </a>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">

                        <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                            <thead>
                            <tr>

                                <th data-toggle="true">Product Name</th>
                                <th data-hide="category">Category</th>
                                <th data-hide="update">Update</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Example product 1
                                </td>
                                <td>
                                    Model 1
                                </td>
                                <td>
                                    today
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <a href="/admin/products/1/edit"><button class="btn-white btn btn-xs">Edit</button></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Example product 1
                                </td>
                                <td>
                                    Model 1
                                </td>
                                <td>
                                    today
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <button class="btn-white btn btn-xs">View</button>
                                        <button class="btn-white btn btn-xs">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('add_js')
    <!-- FooTable -->
    <script src="{{asset('backend/js/plugins/footable/footable.all.min.js')}}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>
@endsection