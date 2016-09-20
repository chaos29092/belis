@extends('layouts.admin_master')

@section('add_css')
@endsection

@section('header')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Pages List</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li class="active">
                    <strong>Pages List</strong>
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
            <a href="/admin/pages/create">
                <button type="button" class="btn btn-w-m btn-primary">Create News</button>
            </a>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">

                        <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                            <thead>
                            <tr>
                                <th data-toggle="true">Sort</th>
                                <th data-toggle="true">Title</th>
                                <th data-toggle="true">Tag</th>
                                <th data-hide="update">Update</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>
                                    {{$page->sort}}
                                </td>
                                <td>
                                    {{$page->name}}
                                </td>
                                <td>
                                    {{$page->tag}}
                                </td>
                                <td>
                                    {{$page->updated_at}}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <a href="/pages/{{$page->id}}" target="_blank"><button class="btn-success btn btn-xs">View</button></a>
                                        <a href="/admin/pages/{{$page->id}}/edit"><button class="btn-primary btn btn-xs">Edit</button></a>
                                    </div>
                                </td>
                                <td>
                                    <form action="/admin/pages/{{$page['id']}}" method="POST">
                                        <input type="hidden" name="_method" value="delete" />
                                        {!! csrf_field() !!}
                                        <button type="submit" onClick="delcfm()" class="btn btn-xs btn-danger">Delete</button>
                                        <script language="javascript">
                                            function delcfm() {
                                                if (!confirm("确认要删除？")) {
                                                    window.event.returnValue = false;
                                                }
                                            }
                                        </script>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    {{$pages->render()}}
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

@endsection