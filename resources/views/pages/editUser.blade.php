@extends('master.main')

@section('content')
<div class="container">
    @component('components.account.editForm', ['users'=>$users])
    @endcomponent
</div>
@endsection
