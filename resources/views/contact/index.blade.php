@extends('home')
@section('content')


<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('contact.create') }}"> Create Contact</a>
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
            <th>Name</th>
            <th>Job Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contact as $contacts)
        <tr>
            <td>{{ $contacts->id }}</td>
            <td>{{ $contacts->name }}</td>
            <td>{{ $contacts->job_name }}</td>
            <td>{{ $contacts->email }}</td>
            <td>{{ $contacts->number }}</td>
            <td>{{ $contacts->address }}</td>
            <td>
                <form action="{{ route('contact.destroy',$contacts->id) }}" method="Post">

                    <a class="btn btn-primary" href="{{ route('contact.edit',$contacts->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection
