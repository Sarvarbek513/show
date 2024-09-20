@extends('layouts.app-admin')
@section('content')
<form action="{{ route('journals.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input class="form-control" type="text" name="name" required><br>

    <label for="title">Title:</label>
    <input class="form-control" type="text" name="title" required><br>

    <label for="image">Image (optional):</label>
    <input class="form-control" type="file" name="image"><br>

    <label for="pdf">PDF File (optional):</label>
    <input class="form-control" type="file" name="pdf"><br>

    <button class="btn btn-primary" type="submit">Create Journal</button>
</form>
@endsection