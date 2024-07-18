@extends('layouts.app-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success mt-3 mb-3" href="{{ route('articles.create') }}" style="float: right;"> Create New Article</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
                        {{-- <th> Description </th> --}}
                        <th> Type </th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                      <tr>
                        <td> {{ ++$i }} </td>
                        <td><img src="{{ asset($article->image) }}" width="150" height="150"></td>
                        <td>{{$article->name}}</td>
                        <td>{{$article->type}}</td>
                        {{-- <td>{!! $article->description !!}</td>  --}}
                        {{-- <td>{!! $new->long_description !!}</td> --}}
                        <td> <form action="{{ route('articles.destroy',$article->id) }}" method="POST">

                            <a class="btn btn-dark" href="{{ route('articles.show',$article->id) }}">Show</a>
    
                            <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
    
                            @csrf
                            @method('DELETE')
    
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="pt-5">
                    {!! $articles->withQueryString()->links('pagination::bootstrap-5') !!} 
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
