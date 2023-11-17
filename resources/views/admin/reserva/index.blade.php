@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Reservas</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{route('admin.reserva.create')}}" style="margin-bottom: 20px;" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar nova</a>
					<table class="table table-bordered table-stripped datatable">
						<thead>
                            <th style="display: none;">#</th>
							<th>Aniversariante</th>
							<th>Idade</th>
                            <th>Nª Convidados</th>
                            <th>Buffet</th>
							<th>Data</th>
                            <th>Status</th>
                            <th>Operações</th>
						</thead>
    					<tbody>
    						@foreach($reservas as $key => $reserva)
    						<tr>
                                <td style="display: none;">{{$key}}</td>
                                <td>{{ $reserva->aniversariante }}</td>
                                <td>{{ $reserva->idade }}</td>
                                <td>{{ $reserva->qtd_convidados }}</td>
                                <td>{{ $reserva->buffet->titulo }}</td>
                                <td>{{ $reserva->data }}</td>
                                <td>{{ \App\Models\Reserva::STATUS_LABELS[$reserva->status] }}</td>
                                <td width="150">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{route('admin.reserva.edit',[$reserva->id])}}" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="confirmacao" action="{{route('admin.reserva.destroy',$reserva->id)}}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir a reserva?')){return false;}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button title="Excluir Cliente" class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
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
