@extends('home')
@section('content')


<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
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
            <th>Your Name</th>
            <th>Your Email</th>
            <th>subject</th>
            <th>Message</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contact as $contacts)
        <tr>
            <td>{{ $contacts->id }}</td>
            <td>{{ $contacts->your_name }}</td>
            <td>{{ $contacts->your_email }}</td>
            <td>{{ $contacts->subject }}</td>
            <td>{{ $contacts->message }}</td>
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
