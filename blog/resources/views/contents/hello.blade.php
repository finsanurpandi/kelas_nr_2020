@extends('app')   

@section('title', 'Halaman Hello')

@section('content')
   <h1>Hello</h1>

    @php
        print_r($fruits)
    @endphp
    <br/>
    {{ $fruits[1] }}
    <br/>
    @foreach ($fruits as $fruit)
        <li>{{ $fruit}} </li>
    @endforeach
    <br/>
    {!! $message !!}
@stop