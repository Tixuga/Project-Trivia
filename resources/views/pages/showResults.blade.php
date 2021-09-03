@extends('master.main')

@section('content')

   @component('components.gamePages.results', ['points' => $points])
   @endcomponent

@endsection