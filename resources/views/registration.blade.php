@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    @if($id != null)
        <h1>Cadastro de produtos</h1>
        <p>Exibindo produto id: {{$id}}</p>
        <a href="/">Back</a>
    @endif
    
    
@endsection