@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Trips</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('trips.create') }}"> Add New Trip</a>
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
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($trips as $trip)
        <tr>
            <td>{{ $trip->id }}</td>
            <td>{{ $trip->name }}</td>
            <td>{{ $trip->description }}</td>
            <td>
                <form action="{{ route('trips.destroy',$trip->id) }}" method="POST">


                    <a class="btn btn-info" href="{{ route('trips.show',$trip->id) }}">Show</a>
                <a class="btn btn-info" href="/trip/{{$trip->id}}">View</a>

 
                    <a class="btn btn-primary" href="{{ route('trips.edit',$trip->id) }}">Edit</a>


                    @csrf
                    @method('DELETE')

   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $trips->links() !!}

  </div>
@endsection