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
                    <div class="col-md-9">
                        {!! Form::model($post,[
                                'method' => 'POST',
                                'route' => 'blog.store',
                                'files' => true,
                                'id' => 'post-form'
                            ]) !!}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-text-width"></i>
                                    Headlines
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

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
                                <div class="form-group excerpt">
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





                            </div>


                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-3">

                        <div class="card">
                            <div class="card-header">Publish</div>
                            <div class="card-body">
                                <div class="form-group {{$errors->has('published_at') ? 'has-error' : ''}} ">
                                    {!! Form::label('published_at', 'Publish Date') !!}
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                          </span>
                                        </div>
                                        {!! Form::text('published_at', null, ['class' => 'form-control date', 'placeholder' => 'Y-m-d H:i:s']) !!}
                                    </div>
                                    @if($errors->has('published_at'))
                                        <span class="help-block error">{{$errors->first('published_at')}}</span>
                                    @endif
                                </div>
                                <div class="pull-left">
                                    <a id="draft-btn" class="btn btn-default">Save Draft</a>
                                </div>
                                <div class="pull-right">
                                    {!! Form::submit('Publish',['class' =>'btn btn-primary']) !!}
                                </div></div>
{{--                            <div class="card-footer"></div>--}}
                        </div>
                        <div class="card">
                            <div class="card-header">Category</div>
                            <div class="card-body">
                                <div class="form-group {{$errors->has('category_id') ? 'has-error' : ''}}">

                                    {!! Form::select('category_id', App\Category::pluck('title','id'),null, ['class' => 'form-control', 'placeholder' => 'Choose Category']) !!}
                                    @if($errors->has('category_id'))
                                        <span class="help-block error">{{$errors->first('category_id')}}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-header ">Featured Image</div>
                            <div class="card-body text-center">
                                <div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">

                                    <br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://placehold.it/200x150&text=No+Image"  alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
                                            <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>

                                    @if($errors->has('image'))
                                        <span class="help-block error">{{$errors->first('image')}}</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')
<script>
    $('#title').on('blur',function(){
        var theTitle = this.value.toLowerCase().trim(),
            slugInput = $('#slug'),
            theSlug = theTitle.replace(/&/g, '-and-')
                .replace(/[^a-z0-9-]+/g, '-')
                .replace(/\-\-+/g, '-')
                .replace(/^-+|-+$/g, '');
        slugInput.val(theSlug);
    });
    var simplemde1 = new SimpleMDE({ element: $("#excerpt")[0] });
    var simplemde2 = new SimpleMDE({ element: $("#body")[0] });


    $('#published_at').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss'

    });

    $("#draft-btn").click(function (e) {
        e.preventDefault();
        $("#published_at").val("");
        $('#post-form').submit();

    })


</script>
@endsection
