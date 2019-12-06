<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-text-width"></i>
                Headlines
            </h3>
        </div>
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
                    <span class="help-block error">{{$errors->first('slug')}}</span>
                @endif
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="button">{{$category->exists ? 'Update' : 'Save'}}</button>
            <a href="{{route('categories.index')}}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>

