@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Editar Agenda</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form" action="{{route('admin.agenda.update', $agenda->id)}}" method="POST" novalidate>
                        @method('PUT')
                        @csrf
                        <div class="mb-4">
                            <label for="titulo">Dia da Semana</label>
                            <select class="form-control" name="dia_da_semana">
                                <option value="segunda">Segunda Feira</option>
                                <option value="terca">Terça Feira</option>
                                <option value="quarta">Quarta Feira</option>
                                <option value="quinta">Quinta Feira</option>
                                <option value="sexta">Sexta Feira</option>
                                <option value="sabado">Sábado</option>
                                <option value="domingo">Domingo</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="comidas">Horário</label>
                            <input type="time" name="hora" class="form-control" value="{{old('hora', $agenda->hora)}}">
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
