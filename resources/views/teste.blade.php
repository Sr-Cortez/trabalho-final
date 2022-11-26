@extends("layouts.main")

@section('title','teste')

@section('content')

Hugo Conceição Cortez
<img src="/img/banner.jpg" alt="banner">
@if(10 > 15)
    <p>a condição é true</p>
@else
    <p>a condição é false</p>
@endif

<p>{{ $nome }}</p>
@if($nome == "Cortez")
    <p>O nome é Cortez</p>
@elseif($nome == "Hugo")
    <p>O nome é {{ $nome }} e tem {{ $idade }} anos de idade e trabalha com {{ $profissao }}</p>
@else
    <p>O nome é {{ $nome }}</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 2)
        <p>i é 2
    @endif</p>
@endfor

@php
    $nome = "zetroc";
    echo $nome;
@endphp

@foreach ($nomes as $nome)
    <p> {{ $nome }} - {{ $loop->index }}</p>
@endforeach

@endsection()