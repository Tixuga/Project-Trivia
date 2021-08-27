@extends('master.main')

@section('content')
<div class="container">
    @component('components.account.editForm', ['user'=>$user])
    @endcomponent
</div>
@endsection
