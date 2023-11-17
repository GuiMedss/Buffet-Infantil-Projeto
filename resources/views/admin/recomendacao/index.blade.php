@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Recomendações Cadastrados</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{route('admin.recomendacao.create')}}" style="margin-bottom: 20px;" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar nova</a>
					<table class="table table-bordered table-stripped datatable">
						<thead>
                            <th style="display: none;">#</th>
							<th>Texto</th>
						</thead>
    					<tbody>
    						@foreach($recomendacoes as $key => $recomendacao)
    						<tr>
                                <td style="display: none;">{{$key}}</td>
                                <td>{{$recomendacao->texto}}</td>
                                <td width="150">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{route('admin.recomendacao.edit',[$recomendacao->id])}}" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="confirmacao" action="{{route('admin.recomendacao.destroy',$recomendacao->id)}}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir a recomendação?')){return false;}">
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
