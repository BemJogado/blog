@extends('layouts.app')

@section('content')
    <pagina tamanho="9">
        <painel titulo="Dashboard">
            Teste
            <div class="row">
                <div class="col-md-4">
                    <caixa qtd="80" titulo="Artigos" cor="orange" icon="fa fa-bath" url="{{route('artigos.index')}}"></caixa>
                </div>
                <div class="col-md-4">
                    <caixa qtd="20" titulo="Autores" cor="blue" icon="fa fa-check" url="#"></caixa>
                </div>
                <div class="col-md-4">
                    <caixa qtd="40" titulo="Pagamentos" cor="red" icon="fa fa-car" url="#"></caixa>
                </div>
            </div>

        </painel>
    </pagina>
@endsection
