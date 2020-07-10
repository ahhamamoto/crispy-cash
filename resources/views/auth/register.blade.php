@extends('layouts.app')

@section('content')

<div class="columns is-centered">
    <div class="column is-half">
        <div class="box">
            <h1 class="title">
                Crispy Cash
            </h1>
            <p class="subtitle">
                Faça o cadastro agora e fique no controle das suas finanças.
            </p>
            <p>
                É rápido e gratuito!
            </p>
            <p>
                Já possui um cadastro! Entre por <a href="{{ route('login') }}">aqui.</a>
            </p>
            <br>
            <hr>
            <br>
            <form action="{{ route('register') }}" method="POST">
                @csrf()

                <div class="field">
                    <label class="label">Nome</label>
                    <div class="control">
                        <input name="name" class="input @error('name') is-danger @enderror" type="text" placeholder="Nome Completo">
                    </div>
                    @error('name')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input name="email" class="input @error('email') is-danger @enderror" type="email" placeholder="Email">
                    </div>
                    @error('email')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label">Senha</label>
                    <div class="control">
                        <input name="password" class="input @error('password') is-danger @enderror" type="password">
                    </div>
                    @error('password')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label">Confirme a senha</label>
                    <div class="control">
                        <input name="password_confirmation" class="input @error('password_confirmation') is-danger @enderror" type="password">
                    </div>
                    @error('password_confirmation')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <input class="button is-link" type="submit" value="Cadastrar">
                    </div>
                    <div class="control">
                        <a class="button is-link is-light" href="{{ route('welcome') }}">Cancelar</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
