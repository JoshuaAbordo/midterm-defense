@extends('home')
@section('content')


<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Create User</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Role</th>
            <th>Name</th>
            <th>Description</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($user as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->description }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form action="{{ route('user.destroy',$user->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  

@endsection