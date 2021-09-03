@extends('master.main')

@section('content')
    @component('components.game_pages.little_title')
    @endcomponent
	@component('components.game_pages.trivia', [
        'data' => $data,
        ])
	@endcomponent
@endsection
