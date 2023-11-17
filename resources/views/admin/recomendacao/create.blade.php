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
                    <h3 class="card-title">Nova Recomendação</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form" action="{{route('admin.recomendacao.store')}}" method="POST" novalidate>
                        @csrf
                        <div class="mb-4">
                            <label for="texto">Texto</label>
                            <textarea class="form-control" name="texto" cols="30" rows="10">{{old('texto')}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
