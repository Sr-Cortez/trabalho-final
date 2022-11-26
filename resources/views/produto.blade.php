@extends("layouts.main")

@section('title','Produto')

@section('content')
<h1>Tela de Produto</h1>
    @if($id != null)
        <p>Exibindo produtos id: {{ $id }}</p>
    @endif
@endsection()
