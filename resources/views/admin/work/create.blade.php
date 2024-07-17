@extends('layouts.app-admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ish qo`shish</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('works.index') }}"> Back</a>
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

<form action="{{ route('works.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="container col-xs-12 col-sm-12 col-md-12">
            <div class="form-group parent-container">
                <strong>Long Description:</strong>
                <textarea id="description" class="form-control " style="height:150px" name="desc" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>
    </div>
</form>

@endsection
