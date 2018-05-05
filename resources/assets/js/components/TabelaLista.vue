<template>
    <div>
        <div class="form-inline">
            <a v-if="criar" v-bind:href="criar">Criar</a>
            <div class="form-group pull-right">
                <input type="search" class="form-control" placeholder="Procurar" v-model="procurar"> {{procurar}}
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th v-for="titulo in titulos">{{titulo}}</th>

                <th v-if="detalhe || editar || apagar">Acção</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item,index) in lista">
                <td v-for="i in item">{{i}}</td>
                <td v-if="detalhe || editar || apagar">
                    <form v-if="apagar && token" action="index.html" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" v-bind:value="token">
                        <a v-if="editar" v-bind:href="editar">Editar |</a>
                        <a v-if="detalhe" v-bind:href="detalhe"> Detalhe |</a>
                        <a v-if="apagar" v-bind:href="apagar"> Apagar</a>
                        <button>Apagar</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['titulos', 'itens', 'criar', 'detalhe', 'editar', 'apagar', 'token'],
        data: function () {
            return {
                procurar: ''
            }
        },
        methods: {
            excutaForm: function (index) {
                document.getElementById(index).submit();
            }
        },
        computed: {
            lista: function () {

                this.itens.sort(function(a,b){
                    if(a > b) { return 1; }
                    if(a < b) { return -1; }
                    return 0;
                });

                return this.itens.filter(res => {
                    for (let i = 0; i < res.length; i++) {
                        if ((res[i] + "").toLowerCase().indexOf(this.procurar.toLowerCase()) >= 0) {
                            return true;
                        }
                    }
                    return false;
                });
                return this.itens;
            }
        }
    }
</script>
