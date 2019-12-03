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
                             {!! Form::model($post,[
                                'method' => 'POST',
                                'route' => 'blog.store',
                                'files' => true
                            ]) !!}
                                <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                                    {!! Form::label('title') !!}
                                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                    @if($errors->has('title'))
                                        <span class="help-block error">{{$errors->first('title')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('slug') ? 'has-error' : ''}}">
                                    {!! Form::label('slug') !!}
                                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                                    @if($errors->has('slug'))
                                        <span class="help-block error">{{$errors->first('title')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('excerpt') !!}
                                    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group {{$errors->has('body') ? 'has-error' : ''}}">
                                    {!! Form::label('body') !!}
                                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                                    @if($errors->has('body'))
                                        <span class="help-block error">{{$errors->first('body')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('published_at') ? 'has-error' : ''}}">
                                    {!! Form::label('published_at', 'Publish Date') !!}
                                    {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}
                                    @if($errors->has('published_at'))
                                        <span class="help-block error">{{$errors->first('published_at')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('category_id') ? 'has-error' : ''}}">
                                    {!! Form::label('category_id', 'Category') !!}
                                    {!! Form::select('category_id', App\Category::pluck('title','id'),null, ['class' => 'form-control', 'placeholder' => 'Choose Category']) !!}
                                    @if($errors->has('category_id'))
                                        <span class="help-block error">{{$errors->first('category_id')}}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">
                                    {!! Form::label('image', 'Feature Image') !!}
                                    {!! Form::file('image') !!}
                                    @if($errors->has('image'))
                                        <span class="help-block error">{{$errors->first('image')}}</span>
                                    @endif
                                </div>
                                <hr>
                                {!! Form::submit('Create New Post',['class' =>'btn btn-primary']) !!}
                            {!! Form::close() !!}
                            </div>
                            <!-- /.card-body -->
                            <div class="container">
                                <div class="float-left">

                                </div>
                                <div class="float-right">

                                    <small></small>
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
