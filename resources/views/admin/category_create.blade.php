@extends('layouts.admin_master')

@section('add_css')
@endsection

@section('header')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Category Create</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li class="active">
                    <strong>Category Create</strong>
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
                        <li class="active"><a data-toggle="tab" href="#tab-1"> Category info</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <fieldset class="form-horizontal">
                                    <form action="/admin/categories" method="POST" enctype="multipart/form-data">

                                        <div class="form-group"><label class="col-sm-2 control-label">Category Name:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Category name" name="name" ></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">分类简介(不超过20字):</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="分类简介" name="category_des" ></div>
                                    </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">优先级，越小越前:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" name="sort" value="50"></div>
                                        </div>

                                     <div class="form-group">
                                         <label class="col-sm-2 control-label" for="category_pic">分类主图（230*230）</label>
                                         <div class="col-sm-10"><input name="category_pic" type="file" /></div>
                                     </div>


                                    <div class="form-group"><label class="col-sm-2 control-label">SEO:Meta Title:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Meta Title" name="title" ></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">SEO:Meta Description:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Meta Description" name="description" ></div>
                                    </div>


                                        <input type="submit" name="send" id="send" value="Publish" class="btn btn-sm btn-primary pull-right m-t-n-xs">
                                        {!! csrf_field() !!}
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

@endsection
