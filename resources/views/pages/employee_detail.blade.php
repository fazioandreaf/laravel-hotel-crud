@extends('layouts.main_layout')
@section('content')
{{$employee->firstname}}
{{$employee->lastname}}
{{$employee->role}}
{{$employee->ral}}
@include('components.home_link')
@endsection
