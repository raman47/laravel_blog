@extends('layouts.backend.main')

@section('title','My Blog | Delete Confirmation')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1 class="m-0 text-dark">Delete Confirmation</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="{{route('users.index')}}">users</a></li>
                            <li class="breadcrumb-item active">Delete Confirmation</li>
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
                {!! Form::model($user,[
                                'method' => 'DELETE',
                                'route' => ['users.destroy',$user->id],

                            ]) !!}
                <div class="col-xs-9">
                    <div class="box">
                        <div class="box-body">
                            <p>You have specified this user for deletion</p>
                            <p>ID #{{$user->id}}: {{$user->name}}</p>
                            <p>What should be done with content own by this user?</p>
                            <p><input type="radio" name="delete_option" id="" value="delete" checked>Delete All Content</p>
                            <p><input type="radio" name="delete_option" id="" value="attribute">Attribute Content to:
                            {!! Form::select('selected_user',$users, null) !!}</p>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-danger">Confirm Deletion</button>
                            <a href="{{route('users.index')}}" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </div>

            {!! Form::close() !!}
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

