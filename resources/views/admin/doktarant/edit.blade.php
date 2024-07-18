@extends('layouts.app-admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Doktorantlarni o`zgartirish</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('doktarants.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('doktarants.update', $doktarants->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $doktarants->name }}">
            </div>
        </div>
        <div class="container col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Long Description:</strong>
                <textarea id="description" class="form-control" style="height:150px" name="long_description" placeholder="Long Description">{{ $doktarants->long_description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control mb-3" placeholder="image">
                <img src="{{ asset($doktarants->image) }}" width="300px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>
    </div>
</form>
@endsection
