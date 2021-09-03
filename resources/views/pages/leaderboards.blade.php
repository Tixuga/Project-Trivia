@extends('master.main')

@section('content')

    @component('components.learderboard.leader_tittle')
    @endcomponent

    @component('components.learderboard.leader_list', [
        'users' => $users,
        'i'     => 0
        ])
    @endcomponent

@endsection
