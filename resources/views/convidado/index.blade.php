@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Convidados Festa {{$reserva->aniversariante}} {{$reserva->idade}} anos</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
					<table class="table table-bordered table-stripped datatable text-center">
						<thead>
                            <th style="display: none;">#</th>
							<th>Nome</th>
							<th>Idade</th>
                            <th>CPF</th>
                            <th>Remover</th>
						</thead>
    					<tbody>
    						@foreach($convidados as $key => $convidado)
    						<tr>
                                <td style="display: none;">{{$key}}</td>
                                <td>{{ $convidado->name }}</td>
                                <td>{{ $convidado->idade }}</td>
                                <td>{{ $convidado->cpf }}</td>
                                <td width="150">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="confirmacao" action="{{route('convidado.destroy',$convidado->id)}}" method="POST">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button title="Excluir Cliente" class="btn btn-danger" type="submit">Remover convidado</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
    						</tr>
    						@endforeach
    					</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
