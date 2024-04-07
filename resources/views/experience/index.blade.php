@extends('home')
@section('content')


<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('experience.create') }}"> Create skills</a>
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
            <th>Year</th>
            <th>Job Title</th>
            <th>Company Name</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($experience as $experience)
        <tr>
            <td>{{ $experience->id }}</td>
            <td>{{ $experience->year }}</td>
            <td>{{ $experience->job_title }}</td>
            <td>{{ $experience->company_name }}</td>
            <td>{{ $experience->description }}</td>
            <td>
                <form action="{{ route('experience.destroy',$experience->id) }}" method="Post">

                    <a class="btn btn-primary" href="{{ route('experience.edit',$experience->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection
