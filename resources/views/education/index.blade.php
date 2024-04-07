@extends('home')
@section('content')


<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('education.create') }}"> Create Education</a>
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
            <th>School Name</th>
            <th>School Year</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($education as $education)
        <tr>
            <td>{{ $education->id }}</td>
            <td>{{ $education->school_name }}</td>
            <td>{{ $education->school_year }}</td>
            <td>{{ $education->description }}</td>
            <td>
                <form action="{{ route('education.destroy',$education->id) }}" method="Post">

                    <a class="btn btn-primary" href="{{ route('education.edit',$education->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection
