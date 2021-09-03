@extends('master.main')

@section('content')
<div class="container">
    @component('components.account.edit_form', ['user'=>$user])
    @endcomponent
</div>
@endsection
