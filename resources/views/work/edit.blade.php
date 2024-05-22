<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Work Form - Laravel 10 CRUD</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">
  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Edit Work</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('work.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
@endif
   
<form action="{{ route('work.update',$work->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Type:</strong>
            <input type="text" name="type" value="{{ $work->type }}" class="form-control" placeholder="Type">
            @error('type')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="title" value="{{ $work->title }}" class="form-control" placeholder="Title">
            @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Picture:</strong>
            <input type="file" name="picture" class="form-control-file" placeholder="Picture">
            @error('picture')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Link:</strong>
            <input type="text" name="link" value="{{ $work->link }}" class="form-control" placeholder="Link">
            @error('link')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary ml-3">Submit</button>
</form>

</body>
</html>
