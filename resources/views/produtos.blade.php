@extends("layouts.main")

@section('title','Produtos')

@section('content')
<h1>Tela de Produtos</h1>
    @if($busca != '')
        <p>Usuário está em bisca de: {{ $busca }}</p>
    @endif
@endsection()