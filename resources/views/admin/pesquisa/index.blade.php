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
							<th>As comidas estavam gostosas?</th>
                            <th>As bebidas estavam agradáveis?</th>
                            <th>A decoração estava de acordo?</th>
                            <th>O salão estava limpo?</th>
                            <th>O espaço de brincadeiras agradou as crianças?</th>
                            <th>Sugestão</th>
						</thead>
    					<tbody>
    						@foreach($pesquisas as $key => $pesquisa)
    						<tr>
                                <td style="display: none;">{{$key}}</td>
                                <td>{{$pesquisa->comida}}</td>
                                <td>{{$pesquisa->bebida}}</td>
                                <td>{{$pesquisa->decoracao}}</td>
                                <td>{{$pesquisa->limpeza}}</td>
                                <td>{{$pesquisa->brincadeiras}}</td>
                                <td>{{$pesquisa->sugestao}}</td>
    						</tr>
    						@endforeach
    					</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
