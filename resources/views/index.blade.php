@extends('master')
@section('content')


    {{-- page header start --}}
    <h1>All Records</h1>
    {{-- page header end --}}

    <a href="{{ route('user.create') }}" class="btn btn-primary pull-right">Create New Employee Data</a>

    <hr>
    <br>
    {{-- result table start --}}
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>

        @foreach($users as $user)

            <tr>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td>
                    @foreach($roles as $role)

                        @if($user->role_id==$role->id)
                            {{ $role->name }}
                        @endif

                    @endforeach
                </td>
                <td>
                    {{ $user->created_at}}
                </td>
                <td>
                    {{ $user->updated_at }}
                </td>
                <td>

                    {{--form for edit and delete actions--}}

                    <form action="{{ route('user.destroy', $user->id) }}" method="post">

                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <input type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data')" value="Delete">
                    </form>

                </td>
            </tr>

        @endforeach
    </table>
    {{-- result table end --}}
@endsection