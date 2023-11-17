@extends('adminlte::page')

@section('css')
    <style type="text/css">
        .conteudo .item{
            padding: 5px 20px;
            background: #eee;
            margin-bottom: 20px;
        }
        .conteudo .scroll{
            height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }
        .conteudo .item label{
            margin-top: 5px;
        }
        .conteudo .item input{
            width: 80px;
            margin-right: 15px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Novo Buffet</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form" action="{{route('admin.buffet.store')}}" method="POST" novalidate>
                        @csrf
                        <div class="mb-4">
                            <label for="titulo">Título</label>
                            <input class="form-control" type="text" value="{{old('titulo')}}" name="titulo" required="required" placeholder="Título*">
                        </div>
                        <div class="mb-4">
                            <label for="comidas">Comidas</label>
                            <textarea name="comidas" class="form-control tiny" cols="50" rows="4" placeholder="Comidas*" required>{{old('comidas')}}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="bebidas">Bebidas</label>
                            <textarea name="bebidas" class="form-control tiny" cols="50" rows="4" placeholder="Bebidas*" required>{{old('bebidas')}}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="valor">Valor por pessoa</label>
                            <input type="text" name="valor" class="form-control number" value="{{old('valor')}}" placeholder="Valor*">
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
