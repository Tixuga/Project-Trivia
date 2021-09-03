@extends('master.main')

@section('content')

   @component('components.game_pages.results', [
      'points' => $points
      ])
   @endcomponent
   
@endsection