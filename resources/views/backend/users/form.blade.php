<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-text-width"></i>
                Headlines
            </h3>
        </div>
        <div class="card-body">
            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @if($errors->has('name'))
                    <span class="help-block error">{{$errors->first('name')}}</span>
                @endif
            </div>
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                @if($errors->has('email'))
                    <span class="help-block error">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                {!! Form::label('password') !!}
                {!! Form::password('password',  ['class' => 'form-control']) !!}
                @if($errors->has('password'))
                    <span class="help-block error">{{$errors->first('password')}}</span>
                @endif
            </div>
            <div class="form-group {{$errors->has('password_confirmation') ? 'has-error' : ''}}">
                {!! Form::label('password_confirmation') !!}
                {!! Form::password('password_confirmation',  ['class' => 'form-control']) !!}
                @if($errors->has('password_confirmation'))
                    <span class="help-block error">{{$errors->first('password_confirmation')}}</span>
                @endif
            </div>


        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="button">{{$user->exists ? 'Update' : 'Save'}}</button>
            <a href="{{route('users.index')}}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>

