@extends('layouts.app')
@section('title', 'Edição')

@section('content')
    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <br>
        
        <form action="{{ route('jogos-update', ['id'=>$jogo->id]) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" value="{{ $jogo->nome }}" class="form-control" placeholder="Digite um nome">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" value="{{ $jogo->categoria }}" class="form-control" placeholder="Digite uma categoria para o jogo">
                </div>
                <br>
                <div class="form-group">
                    <label for="anoCriacao">Ano de criação</label>
                    <input type="date" name="anoCriacao" value="{{ $jogo->anoCriacao }}" class="form-control" placeholder="Digite o ano de criação...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number"  name="valor" value="{{ $jogo->valor }}" class="form-control" placeholder="Digite um valor para o jogo" >
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            </div>
        </form>
    </div>
@endsection