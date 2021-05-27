@extends('layouts.main_layout')
@section('content')
<form method="POST" action="{{route('update', $employee->id)}}">
    @csrf
    @method('POST')
    <label for="">firstname</label>
    <input name="firstname" type="text" value="{{$employee->firstname}}">    <label for="">lastname</label>
    <input name="lastname" type="text" value="{{$employee->lastname}}">    <label for="">role</label>
    <input name="role" type="text" value="{{$employee->role}}">
    <label for="">ral</label>
    <input name="ral" type="text" value="{{$employee->ral}}">
    <button type="submit">
            Modifica
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
