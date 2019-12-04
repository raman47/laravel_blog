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
            </div>
        </div>
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
                        <img src="{{($post->image_thumb_url) ? $post->image_thumb_url : 'http://placehold.it/200x150&text=No+Image' }}"  alt="...">
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
