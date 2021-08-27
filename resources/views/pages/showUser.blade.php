@extends('master.main')
@section('content')
    @component('components.account.show', ['users'=>$users])
    @endcomponent
@endsection
