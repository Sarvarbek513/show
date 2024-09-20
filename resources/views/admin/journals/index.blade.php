@extends('layouts.app-admin')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-right">
          <a class="btn btn-success mt-3 mb-3" href="{{ route('journals.create') }}" style="float: right;"> Create New Journal</a>
      </div>
  </div>
</div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th> Title </th>
        <th> Name </th>
        <th> PDF </th>
        {{-- <th> Long Description </th> --}}
        {{-- <th> Description </th> --}}
        <th> Action </th>
      </tr>
    </thead>
    <tbody>
        @foreach($journals as $journal)
          <tr>
            <td>{{ $journal->title }}</td>
            {{-- <td><img src="{{ asset($doktarant->image) }}" width="150" height="150"></td> --}}
            <td>{{ $journal->name }}</td>
            <td>
              @if($journal->pdf)
                <h4>PDF Preview:</h4>
                <embed src="{{ asset($journal->pdf) }}" type="application/pdf" width="100%" height="600px" />
              @else
                <p>No PDF file available for this journal.</p>
              @endif
            </td>
            {{-- <td>{!! $article->description !!}</td>  --}}
            {{-- <td>{!! $new->long_description !!}</td> --}}
            <td> 
              <form action="{{ route('journals.destroy', $journal->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection
