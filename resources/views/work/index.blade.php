@extends('home')
@section('content')


<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('work.create') }}"> Create Work</a>
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
            <th>Type</th>
            <th>Title</th>
            <th>Picture</th>
            <th>Link</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($work as $work)
        <tr>
            <td>{{ $work->id }}</td>
            <td>{{ $work->type }}</td>
            <td>{{ $work->title }}</td>
            <td><img src="{{ asset('storage/' . $work->picture) }}" alt="Work Picture"></td>

            <td>{{ $work->link }}</td>
            <td>
                <form action="{{ route('work.destroy',$work->id) }}" method="Post">

                    <a class="btn btn-primary" href="{{ route('work.edit',$work->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection
