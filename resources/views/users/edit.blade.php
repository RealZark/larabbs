@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-8 offset-md-2">

    <div class="card">
      <div class="card-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
        </h4>
      </div>

      <div class="card-body">

        <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">
            <label for="name-field">用户名</label>
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />

            @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
            @endif
          </div>
          <div class="form-group">
            <label for="email-field">邮 箱</label>
            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}" />

            @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
            @endif
          </div>
          <div class="form-group">
            <label for="introduction-field">个人简介</label>
            <textarea name="introduction" id="introduction-field" class="form-control{{ $errors->has('introduction') ? ' is-invalid' : '' }}" rows="3">{{ old('introduction', $user->introduction) }}</textarea>

            @if ($errors->has('introduction'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('introduction') }}</strong>
                  </span>
            @endif
          </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">保存</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
