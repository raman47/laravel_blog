@extends('layouts.backend.main')

@section('title','My Blog | Edit Category')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1 class="m-0 text-dark">Edit Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="{{route('categories.index')}}">Category</a></li>
                            <li class="breadcrumb-item active">Edit Category</li>
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
                {!! Form::model($category,[
                                'method' => 'PUT',
                                'route' => ['categories.update',$category->id],
                                'files' => true,
                                'id' => 'post-form'
                            ]) !!}
                <div class="row">

                    @include('backend.categories.form')

                </div>
            {!! Form::close() !!}
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@include('backend.categories.script')
