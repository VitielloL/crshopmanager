@extends('home.home')

@section('conteudo')
<div class="container my-4">
    <div style=" margin-bottom: 15px; padding-top:15px; display:flex; justify-content:space-between;; align-items:center">
        <h2>Lista de Ordem de Serviços</h2>
        <a href='{{route('ordem_servico.novo')}}' class='btn btn-success' style="height: 40px;">Cadastrar</a>
    </div>
    <?php
    if (!empty($dados)){
        echo"<table class='table table-striped table-hover'>";
        echo"<thead class='bg-secondary text-white'>
                <td>Cliente</td>
                <td>Veículo</td>
                <td>Serviço</td>
                <td>Status do Pagamento</td>
                <td>Ações</td>
            </thead>";

        foreach($dados as $dado){
            $linkReadMore = url('/ordem_servico/' . $dado->id);
            $linkEditItem = url ('/ordem_servico/editar/' . $dado->id);
            $linkRemoveItem = url ('/ordem_servico/remover/' . $dado->id);
            if($dado->status_pagamento==1){
                $recebePago = 'Pago';
            }else{
                $recebePago = 'Não Pago';
            }
            echo"<tr>
                    <td>{$dado->pessoa->nome}</td>
                    <td>{$dado->veiculo->modelo}</td>
                    <td>{$dado->servico->titulo}</td>
                    <td>{$recebePago}</td>
                    <td><a href='{$linkReadMore}'>Ver Mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Excluir</a></td>
                 </tr>";
        }
        echo"</table>";
    }
    ?>
    </div>
@endsection