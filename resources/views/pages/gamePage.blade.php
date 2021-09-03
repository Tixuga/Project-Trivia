@extends('master.main')

@section('content')
    @component('components.gamePages.littleTitle')
    @endcomponent
	@component('components.gamePages.trivia', [
        'data' => $data,
        ])
	@endcomponent
    {{-- @component('components.gamePages.trial')
        
    @endcomponent --}}
@endsection
