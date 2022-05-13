@extends('layout')

@section('conteudo')
<body id="fundoLogin">
    <div class="card telaLogin" id="telaLogin">
        <div class="card-body">
            <img src={{asset("storage/download-removebg-preview.png")}}>
            <h2>Bar do Francês</h2>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control modificaInput" id="" aria-describedby="emailHelp" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <button type="submit" class="btn botaoLogin" style="width: 85%">Entrar</button>
            </form>
            <div class="wrapLink">
                <a class="underlineHover" href='esqueceusenha's>Esqueceu sua senha?</a>
                {{-- <a class="underlineHover" href='{{route('login.esqueceusenha')}}'>Esqueceu sua senha?</a> --}}
                <a class="underlineHover" href="registrar">Novo por aqui? Cadastre-se</a>
                {{-- <a class="underlineHover" href="{{route('login.registrar')}}">Novo por aqui? Cadastre-se</a> --}}
            </div>
        </div>
    </div>
    </body>
    @endsection