@extends('layouts.main_layout')
@section('content')
<ul>

    @foreach ($employees as $item)
    <li>
        <a href="">

            {{$item->firstname}}
            {{$item->lastname}}
        </a>
    </li>
    @endforeach
</ul>
@endsection
