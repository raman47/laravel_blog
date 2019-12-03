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
                                <div class="pull-left mb-4">
                                    <a href="{{route('blog.create')}}" class="btn btn-success">Add New</a>
                                </div>
                                @if(session('message'))
                                    <div class="alert alert-info">
                                        {{session('message')}}
                                    </div>
                                @endif
                                @if(! $posts->count())
                                    <div class="alert alert-danger">
                                        <strong>  No Record Found </strong>
                                    </div>
                                @else
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td width="80">Action</td>
                                        <td>Title</td>
                                        <td>Author</td>
                                        <td>Category</td>
                                        <td>Date</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            <a href="{{route('blog.edit',$post->id)}}" class="btn btn-xs btn-default">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('blog.destroy',$post->id)}}" class="btn btn-xs btn-danger">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                        <td>{{$post->title}} </td>
                                        <td>{{$post->author->name}}</td>
                                        <td>{{$post->category->title}}</td>
                                        <td>
                                            <abbr title="{{$post->dateFormatted(true)}}">{{$post->dateFormatted()}} </abbr>
                                            | {!! $post->publicationLabel() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
