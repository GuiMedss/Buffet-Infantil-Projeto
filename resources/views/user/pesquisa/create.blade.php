@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">Pesquisa de satisfação</h3>
                <div class="card-tools pull-right">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form id="form" action="{{route('user.pesquisa.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label style="font-weight: bold;" for="aniversariante">As comidas estavam gostosas?</label>
                            <select class="form-control" name="comida">
                                <option value="sim">Sim</option>
                                <option value="sim">Não</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label style="font-weight: bold;" for="aniversariante">As bebidas estavam agradáveis?</label>
                            <select class="form-control" name="bebida">
                                <option value="sim">Sim</option>
                                <option value="sim">Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label style="font-weight: bold;" for="aniversariante">A decoração estava de acordo?</label>
                            <select class="form-control" name="decoracao">
                                <option value="sim">Sim</option>
                                <option value="sim">Não</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label style="font-weight: bold;" for="aniversariante">O salão estava limpo?</label>
                            <select class="form-control" name="limpeza">
                                <option value="sim">Sim</option>
                                <option value="sim">Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label style="font-weight: bold;" for="aniversariante">O espaço de brincadeiras agradou as crianças?</label>
                            <select class="form-control" name="brincadeiras">
                                <option value="sim">Sim</option>
                                <option value="sim">Não</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label style="font-weight: bold;" for="aniversariante">SUGESTÕES:</label>
                            <textarea class="form-control" name="sugestao"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
