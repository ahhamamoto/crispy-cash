@extends('layouts.app')

@section('content')

<div class="columns is-centered">
    <div class="column is-half">

        <div class="box">
            <h1 class="title">
                Crispy Cash
            </h1>
            <p class="subtitle">
                Entre e continue no controle das suas finanças
            </p>
            <p>
                Ou faça o seu cadastro <a href="{{ route('register') }}">aqui.</a>
            </p>
            <br>
            <hr>
            <br>

            <form action="{{ route('login') }}" method="POST">
                @csrf()

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input name="email" class="input" type="email" placeholder="Email">
                    </div>
                    {{-- <p class="help is-danger">This email is invalid</p> --}}
                </div>

                <div class="field">
                    <label class="label">Senha</label>
                    <div class="control">
                        <input name="password" class="input" type="password">
                    </div>
                    {{-- <p class="help is-danger">This email is invalid</p> --}}
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <input class="button is-link" type="submit" value="Login">
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
