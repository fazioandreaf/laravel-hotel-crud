@extends('layouts.main_layout')
@section('content')
<form method="POST" action="{{route('add_action')}}">
    @csrf
    @method('POST')
    <label for="">firstname</label>
    <input name="firstname" type="text"">
     <label for="">lastname</label>
    <input name="lastname" type="text" >
    <label for="">role</label>
    <input name="role" type="text" >
    <label for="">ral</label>
    <input name="ral" type="text" >
    <button type="submit">
            Aggiungi
    </button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            {{$errors}}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@include('components.home_link')


@endsection
