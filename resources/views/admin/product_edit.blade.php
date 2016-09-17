@extends('layouts.admin_master')

@section('add_css')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="{{asset('backend/css/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">

    <link href="{{asset('backend/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
@endsection

@section('header')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Products Edit</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li class="active">
                    <strong>Products Edit</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
@endsection
@section('content')

    <div class="wrapper wrapper-content animated fadeInRight ecommerce">

        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="ecommerce_product.html#tab-1"> Product info</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <fieldset class="form-horizontal">
                                    <form action="/admin/products/{{$product->id}}" method="POST" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="_method" value="put" />

                                        <div class="form-group"><label class="col-sm-2 control-label">Product Name:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Product name" name="name" value="{{$product->name}}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Category:</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="category_id">
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if($product->category_id==$category->id)selected="selected"@endif>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">分类页简介:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="分类页简介" name="category_des" value="{{$product->category_des}}"></div>
                                    </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="category_pic">分类页主图（230*230）</label>
                                            <div class="col-sm-10"><input name="category_pic" type="file" /></div>
                                            @if($product['category_pic'])
                                                <img src="{{$product['category_pic']}}" alt="{{$product['name']}}" width="200">
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="main_pic">产品主图（5:4左右）</label>
                                            <div class="col-sm-10"><input name="main_pic" type="file" /></div>
                                            @if($product['main_pic'])
                                                <img src="{{$product['main_pic']}}" alt="{{$product['name']}}" width="200">
                                            @endif
                                        </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">产品页简介:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="产品页简介" name="des" value="{{$product->des}}"></div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="2" id="content" name="content">{!! $product->content !!}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">SEO:Meta Title:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Meta Title" name="title" value="{{$product->title}}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">SEO:Meta Description:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Meta Description" name="description" value="{{$product->description}}"></div>
                                    </div>

                                        <input type="submit" name="send" id="send" value="Publish" class="btn btn-sm btn-primary pull-right m-t-n-xs">
                                    </form>
                                    <form action="/admin/products/{{$product['id']}}" method="POST">
                                        <input type="hidden" name="_method" value="delete" />
                                        {!! csrf_field() !!}
                                        <script language="javascript">
                                            function delcfm() {
                                                if (!confirm("确认要删除？")) {
                                                    window.event.returnValue = false;
                                                }
                                            }
                                        </script>
                                        <button type="submit" onClick="delcfm()" class="btn btn-sm btn-danger pull-right m-t-n-xs">Delete</button>
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection

@section('add_js')
    <!-- SUMMERNOTE -->
    <script src="{{asset('backend/js/plugins/summernote/summernote.min.js')}}"></script>

    <!-- Data picker -->
    <script src="{{asset('backend/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            function sendFile(file, editor, welEditable) {
                data = new FormData();
                data.append("file", file);
                $.ajax({
                    data: data,
                    type: "POST",
                    url: "/products/images/{{$product->id}}",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        editor.insertImage(welEditable, url);
                    }
                });
            }
            $('#content').summernote({
                height: 200,
                onImageUpload: function(files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable);
                }
            });
        });
    </script>
@endsection
