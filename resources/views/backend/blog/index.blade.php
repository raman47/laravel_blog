@extends('layouts.backend.main')

@section('title','My Blog | Blog index')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Display All Blog Posts</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="{{route('blog.index')}}">Blog</a></li>
                            <li class="breadcrumb-item active">All Posts</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-text-width"></i>
                                    Headlines
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="float-left mb-4 clearfix">
                                    <a href="{{route('blog.create')}}" class="btn btn-success">Add New</a>
                                </div>
                                <div class="float-right">
                                    <a href="?status=all">All</a> |
                                    <a href="?status=trash">Trash</a>
                                </div>
                                <div class="text-center">
                                    @include('backend.blog.message')
                                </div>
                                @if(! $posts->count())
                                    <div class="alert alert-danger">
                                        <strong>  No Record Found </strong>
                                    </div>
                                @else
                                    @if($onlyTrashed)
                                            @include('backend.blog.table-trash')
                                        @else
                                            @include('backend.blog.table')
                                    @endif
                                @endif

                            </div>
                            <!-- /.card-body -->
                            <div class="container">
                            <div class="float-left">
                                    {{$posts->links()}}
                                </div>
                                <div class="float-right">

                                    <small>{{$postCount}} {{str_plural('Item',$postCount)}}</small>
                                </div>
                            </div>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
