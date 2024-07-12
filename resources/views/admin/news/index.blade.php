@extends('layouts.app-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success mt-3 mb-3" href="{{ route('news.create') }}" style="float: right;"> Create New Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {{-- <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Long Description</th>
        </tr>
        @foreach ($news as $new)
            <tr>
                <td>{{ $new->id }}</td>
                <td><img src="{{ $new->image }}" width="50" height="50"></td>
                <td>{!! $new->description !!}</td>
                <td>{!! $new->long_description !!}</td>
                <td>
                    <form action="{{ route('news.destroy',$new->id) }}" method="POST">

                        <a class="btn btn-dark" href="{{ route('news.show',$new->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('news.edit',$new->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table> --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive pt-0">  
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th> N </th>
                        <th> Image </th>
                        <th> Name </th>
                        {{-- <th> Long Description </th> --}}
                        <th> Description </th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $new)
                      <tr>
                        <td> {{ ++$i }} </td>
                        <td><img src="{{ $new->image }}" width="50" height="50"></td>
                        <td>{!! $new->name !!}</td>
                        {{-- <td>{!! $new->long_description !!}</td> --}}
                        <td>{!! $new->description !!}</td>
                        <td> <form action="{{ route('news.destroy',$new->id) }}" method="POST">

                            <a class="btn btn-dark" href="{{ route('news.show',$new->id) }}">Show</a>
    
                            <a class="btn btn-primary" href="{{ route('news.edit',$new->id) }}">Edit</a>
    
                            @csrf
                            @method('DELETE')
    
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
