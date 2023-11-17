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
                    <h3 class="card-title">Editar Reserva</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form" action="{{route('admin.reserva.update', $reserva->id)}}" method="POST" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="aniversariante">Aniversariante</label>
                            <input class="form-control" type="text" value="{{old('aniversariante', $reserva->aniversariante)}}" name="aniversariante" required>
                        </div>
                        <div class="mb-4">
                            <label for="idade">Idade comemorada</label>
                            <input class="form-control" type="number" value="{{old('idade', $reserva->idade)}}" name="idade" required>
                        </div>
                        <div class="mb-4">
                            <label for="qtd_convidados">Nº Convidados</label>
                            <input class="form-control" type="number" value="{{old('qtd_convidados', $reserva->qtd_convidados)}}" name="qtd_convidados" required>
                        </div>
                        <div class="mb-4">
                            <label for="data">Data</label>
                            <input class="form-control" type="datetime" value="{{old('data', $reserva->data)}}" name="data" required>
                        </div>
                        <div class="md-4">
                            <label for="buffet"></label>
                            <select class="form-control" name="buffet">
                                @foreach ($buffets as $key => $buffet)
                                    <option value="{{$buffet->id}}">{{$buffet->titulo}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="status"></label>
                            <select class="form-control" name="status">
                                <option value="1">Aguardando Confirmação</option>
                                <option value="2">Reservado</option>
                                <option value="3">Cancelado</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
