@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <tabela-lista
                    v-bind:titulos="['#','Título','Descrição']"
                    v-bind:itens="[['1','PHP OO','Curso de PHP OO'],['2','Vue JS','Curso de Vue JS'],['3','Java OO','Curso de Java OO']]"
                    criar="#criar" detalhe="#detalhe" editar="#editar" apagar="#apagar" token="878945489"
            ></tabela-lista>
        </painel>
    </pagina>
@endsection