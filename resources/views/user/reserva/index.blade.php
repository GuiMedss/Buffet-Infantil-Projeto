@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container mb-4">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Minhas Reservas</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
					<table class="table table-bordered table-stripped datatable text-center">
						<thead>
                            <th style="display: none;">#</th>
							<th>Aniversariante</th>
							<th>Idade</th>
                            <th>Nª Convidados</th>
                            <th>Link Convite</th>
                            <th>Pacote de Comidas</th>
							<th>Data</th>
                            <th>Status</th>
                            <th>Valor</th>
                            <th>Operações</th>
						</thead>
    					<tbody>
    						@foreach($reservas as $key => $reserva)
    						<tr>
                                <td style="display: none;">{{$key}}</td>
                                <td>{{ $reserva->aniversariante }}</td>
                                <td>{{ $reserva->idade }}</td>
                                <td>
                                    <a type="button" href="{{route('convidado.lista', $reserva->id)}}" class="btn btn-primary">
                                        {{ $reserva->qtd_convidados }} <ion-icon name="eye-outline"></ion-icon>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('convidado.createWithId', $reserva->id)}}">Link para confirmar presença</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buffetModal-{{$reserva->id}}">
                                        {{ $reserva->buffet->titulo }} <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                </td>
                                <td>{{ $reserva->data }}</td>
                                <td>{{ \App\Models\Reserva::STATUS_LABELS[$reserva->status] }}</td>
                                <td>R$ {{ $reserva->buffet->valor * $reserva->qtd_convidados}}</td>
                                <td width="150">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="confirmacao" action="{{route('admin.reserva.destroy',$reserva->id)}}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja cancelar a reserva?')){return false;}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button title="Excluir Cliente" class="btn btn-danger" type="submit">Cancelar reserva</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
    						</tr>

                            <div class="modal fade" id="buffetModal-{{$reserva->id}}" tabindex="-1" aria-labelledby="buffetModal-{{$reserva->id}}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="buffetModal-{{$reserva->id}}Label">Alterar pacote de comidas</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="form" action="{{route('user.reserva.update', $reserva->id)}}" method="POST" novalidate onSubmit="if(!confirm('Tem certeza que deseja alterar a reserva?')){return false;}">
                                                @csrf
                                                @method('PUT')
                                                <div class="md-4 mb-3">
                                                    <label for="buffet"></label>
                                                    <select class="form-control" name="buffet_id">
                                                        @foreach ($buffets as $key => $buffet)
                                                            <option value="{{$buffet->id}}">{{$buffet->titulo}} - R$ {{$buffet->valor * $reserva->qtd_convidados}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-success">Salvar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
    						@endforeach
    					</tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Recomendações para a pré-festa</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($recomendacoes as $key => $recomendacao)
                        <li>{{ $recomendacao->texto }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
