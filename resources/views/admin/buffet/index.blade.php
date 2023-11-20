@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Buffets Cadastrados</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{route('admin.buffet.create')}}" style="margin-bottom: 20px;" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar novo</a>
					<table class="table table-bordered table-stripped datatable">
						<thead>
                            <th style="display: none;">#</th>
							<th>Título</th>
							<th>Comida</th>
                            <th>Bebidas</th>
							<th>valor</th>
                            <th>Imagens</th>
                            <th>Operações</th>
						</thead>
    					<tbody>
    						@foreach($buffets as $key => $buffet)
    						<tr>
                                <td style="display: none;">{{$key}}</td>
                                <td>{{$buffet->titulo}}</td>
                                <td>{!! $buffet->comidas !!}</td>
                                <td>{!! $buffet->bebidas !!}</td>
                                <td>R$ {{$buffet->valor}}</td>
                                <td>
                                    @if($buffet->img1_url)
                                        <img src="{{ $buffet->img1_url }}" alt="Imagem 1" width="100px">
                                    @endif

                                    @if($buffet->img2_url)
                                        <img src="{{ $buffet->img2_url }}" alt="Imagem 2" width="100px">
                                    @endif

                                    @if($buffet->img3_url)
                                        <img src="{{ $buffet->img3_url }}" alt="Imagem 3" width="100px">
                                    @endif
                                </td>
                                <td width="150">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{route('admin.buffet.edit',[$buffet->id])}}" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="col-md-6">
                                            <form class="confirmacao" action="{{route('admin.buffet.destroy',$buffet->id)}}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir o buffet {{ $buffet->titulo }}?')){return false;}">
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
