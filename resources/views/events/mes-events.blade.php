@extends('layouts.main')
@section('content')
@if (Auth::User()->id != null)
  
   <a type="button" href="{{ route('events.create')}}"
   class="btn btn-primary"
   >Ajouter</a>
@endif
  @include('layouts.liste-events')  
@endsection