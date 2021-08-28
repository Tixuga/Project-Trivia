@extends('master.main')

@section('content')
    @component('components.gamePages.littleTitle')
    @endcomponent
	@component('components.gamePages.trivia', ['resp'=>$resp])
	@endcomponent
@endsection
