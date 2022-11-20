@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" name="title" id="title" placeholder="Nome do evento" class="form-control">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" name="city" id="city" placeholder="Local do evento" class="form-control">
            </div>
            <div class="form-group">
                <label for="private">O Evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <input type="submit" value="Criar evento" class="btn btn-primary">
        </form>
    </div>
@endsection