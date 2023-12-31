@extends('master')

@section('title','Home page')

@section('content')
    
    @php
        $isActive = false;
    @endphp

    <span @style([
        'background-color: red' => $isActive,
        'font-weight: bold'])>
        kowsik vai
    </span>


@endsection

@section('kowsik')
    @parent
    
@endsection