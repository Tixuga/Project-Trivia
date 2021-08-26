@extends('master.main')

@section('content')

@component('components.learderboard.leaderTittle')
@endcomponent

@component('components.learderboard.leaderList', ['users'=>$users, 'i'=>0])
@endcomponent

@endsection
