@extends('layouts.generic')

@section('content')
<div class="container">
  @foreach($trips as $trip)
    {{$trip->id}}
  @endforeach
</div>
@endsection