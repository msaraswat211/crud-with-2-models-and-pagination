@extends('master')
@section('content')

<h1>Creat New Record</h1>

<form class="form-horizontal" action="{{ route('user.store') }}" method="post">

  {{csrf_field()}}

  <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" placeholder="Enter your name">
    </div>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
  </div>

  <div class="form-group{{ ($errors->has('email')) ? $errors->first('email') : '' }}">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" placeholder="Enter your email">
    </div>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
  </div>

  <div class="form-group{{ ($errors->has('email')) ? $errors->first('email') : '' }}">
    <label for="email" class="col-sm-2 control-label">Role</label>
    <div class="col-sm-10">
      <select name="role" id="" class="form-control">

          @foreach($roles as $role)

          <option value="{{ $role->id }}">{{ $role->name }}</option>

          @endforeach

      </select>
    </div>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>

</form>

@endsection