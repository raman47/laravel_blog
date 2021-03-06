@extends('layouts.backend.main')

@section('title','My Blog | Add New Post')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1 class="m-0 text-dark">Add New Post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="{{route('blog.index')}}">Blog</a></li>
                            <li class="breadcrumb-item active">Add New</li>
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
                {!! Form::model($post,[
                                'method' => 'POST',
                                'route' => 'blog.store',
                                'files' => true,
                                'id' => 'post-form'
                            ]) !!}
                <div class="row">

                    @include('backend.blog.form')

                </div>
            {!! Form::close() !!}
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@include('backend.blog.script')
