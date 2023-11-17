@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Pesquisas</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
					<table class="table table-bordered table-stripped datatable">
						<thead>
                            <th style="display: none;">#</th>
							<th>Comida</th>
                            <th>Atendimento</th>
                            <th>Ambiente</th>
                            <th>Recomendaria para um amigo?</th>
                            <th>Avaliação</th>
						</thead>
    					<tbody>
    						@foreach($pesquisas as $key => $pesquisa)
    						<tr>
                                <td style="display: none;">{{$key}}</td>
                                <td>{{$pesquisa->comida}}</td>
                                <td>{{$pesquisa->atendimento}}</td>
                                <td>{{$pesquisa->ambiente}}</td>
                                <td>{{$pesquisa->recomendacao}}</td>
                                <td>{{$pesquisa->avaliacao}}</td>
    						</tr>
    						@endforeach
    					</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
