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
                    <a href="{{route('admin.agenda.create')}}" style="margin-bottom: 20px;" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar novo</a>
					<table class="table table-bordered table-stripped datatable">
						<thead>
                            <th>Segunda Feira</th>
                            <th>Terça Feira</th>
                            <th>Quarta Feira</th>
                            <th>Quinta Feira</th>
                            <th>Sexta Feira</th>
                            <th>Sábado</th>
                            <th>Domingo</th>
						</thead>
    					<tbody>
                            <tr>
                                <td>
                                    @if(!$segunda->isEmpty())
                                        @foreach ($segunda as $item)
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    {{ $item->hora }}
                                                </div>
                                                <form class="confirmacao" action="{{ route('admin.agenda.destroy', $item->id) }}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir a agenda?')){return false;}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button title="Excluir Agenda" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                            <hr class="my-2">
                                        @endforeach
                                    @else
                                        <p>Não há registros para segunda-feira.</p>
                                    @endif
                                </td>

                                <td>
                                    @if(!$terca->isEmpty())
                                        @foreach ($terca as $item)
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    {{ $item->hora }}
                                                </div>
                                                <form class="confirmacao" action="{{ route('admin.agenda.destroy', $item->id) }}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir a agenda?')){return false;}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button title="Excluir Agenda" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                            <hr class="my-2">
                                        @endforeach
                                    @else
                                        <p>Não há registros para terça-feira.</p>
                                    @endif
                                </td>

                                <td>
                                    @if(!$quarta->isEmpty())
                                        @foreach ($quarta as $item)
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    {{ $item->hora }}
                                                </div>
                                                <form class="confirmacao" action="{{ route('admin.agenda.destroy', $item->id) }}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir a agenda?')){return false;}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button title="Excluir Agenda" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                            <hr class="my-2">
                                        @endforeach
                                    @else
                                        <p>Não há registros para quarta-feira.</p>
                                    @endif
                                </td>

                                <td>
                                    @if(!$quinta->isEmpty())
                                        @foreach ($quinta as $item)
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    {{ $item->hora }}
                                                </div>
                                                <form class="confirmacao" action="{{ route('admin.agenda.destroy', $item->id) }}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir a agenda?')){return false;}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button title="Excluir Agenda" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                            <hr class="my-2">
                                        @endforeach
                                    @else
                                        <p>Não há registros para quinta-feira.</p>
                                    @endif
                                </td>

                                <td>
                                    @if(!$sexta->isEmpty())
                                        @foreach ($sexta as $item)
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    {{ $item->hora }}
                                                </div>
                                                <form class="confirmacao" action="{{ route('admin.agenda.destroy', $item->id) }}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir a agenda?')){return false;}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button title="Excluir Agenda" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                            <hr class="my-2">
                                        @endforeach
                                    @else
                                        <p>Não há registros para sexta-feira.</p>
                                    @endif
                                </td>

                                <td>
                                    @if(!$sabado->isEmpty())
                                        @foreach ($sabado as $item)
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    {{ $item->hora }}
                                                </div>
                                                <form class="confirmacao" action="{{ route('admin.agenda.destroy', $item->id) }}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir a agenda?')){return false;}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button title="Excluir Agenda" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                            <hr class="my-2">
                                        @endforeach
                                    @else
                                        <p>Não há registros para sábado.</p>
                                    @endif
                                </td>

                                <td>
                                    @if(!$domingo->isEmpty())
                                        @foreach ($domingo as $item)
                                            <div class="d-flex justify-content-around">
                                                <div>
                                                    {{ $item->hora }}
                                                </div>
                                                <form class="confirmacao" action="{{ route('admin.agenda.destroy', $item->id) }}" method="POST" onSubmit="if(!confirm('Tem certeza que deseja excluir a agenda?')){return false;}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button title="Excluir Agenda" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                            <hr class="my-2">
                                        @endforeach
                                    @else
                                        <p>Não há registros para domingo.</p>
                                    @endif
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
