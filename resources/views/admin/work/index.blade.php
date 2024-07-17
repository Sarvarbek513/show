@extends('layouts.app-admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success mt-3 mb-3" href="{{ route('works.create') }}" style="float: right;"> Create New Ish</a>
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
                        <th> Description </th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($works as $work)
                      <tr>
                        <td> {{ ++$i }} </td>
                        <td>{!! $work->desc !!}</td>
                        <td> <form action="{{ route('news.destroy',$work->id) }}" method="POST">

                            <a class="btn btn-dark" href="{{ route('news.show',$work->id) }}">Show</a>
    
                            <a class="btn btn-primary" href="{{ route('news.edit',$work->id) }}">Edit</a>
    
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
