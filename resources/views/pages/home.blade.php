@extends('layouts.main_layout')
@section('content')
@include('components.add')
<ul>

    @foreach ($employees as $item)
    <li>
        <a href="">

            {{$item->firstname}}
            {{$item->lastname}}
        </a>
        <span>
            <a href="{{route('edit',$item->id)}}">
                <i class="fas fa-pen-square"></i>
            </a>
        </span>
        <span>
            <a href="{{route('delete',$item->id)}}">
                <i class="fas fa-user-times"></i>
            </a>
        </span>
    </li>
    @endforeach
</ul>

@endsection
