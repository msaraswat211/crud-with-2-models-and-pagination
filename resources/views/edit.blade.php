@extends('master')
@section('content')

    <h1>Edit Record</h1>

    <form class="form-horizontal" action="{{ route('user.update', $user->id) }}" method="post">

        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        {{csrf_field()}}

        <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group{{ ($errors->has('email')) ? $errors->first('email') : '' }}">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group{{ ($errors->has('email')) ? $errors->first('email') : '' }}">
            <label for="email" class="col-sm-2 control-label">Role</label>
            <div class="col-sm-10">
                <select name="role" id="" class="form-control">

                    @foreach($roles as $role)

                        {{--@if($user->role_id==$role->id)--}}

                            <option value="{{ $role->id }}">{{ $role->name }}</option>

                        {{--@endif--}}

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