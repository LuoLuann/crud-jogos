@extends('layouts.app')
@section('title', 'Criação')

@section('content')
    <div class="container mt-5">
        <h1>Criar jogo</h1>
        <br>
        
        <form action="{{ route('jogos-store') }}" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite um nome">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" class="form-control" placeholder="Digite uma categoria para o jogo">
                </div>
                <br>
                <div class="form-group">
                    <label for="anoCriacao">Ano de criação</label>
                    <input type="date" name="anoCriacao" class="form-control" placeholder="Digite o ano de criação...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number"  name="valor" class="form-control" placeholder="Digite um valor para o jogo" >
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
                </div>
            </div>
        </form>
    </div>
@endsection