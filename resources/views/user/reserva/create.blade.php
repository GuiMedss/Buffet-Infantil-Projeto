@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">Nova Reserva</h3>
                <div class="card-tools pull-right">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form id="form" action="{{route('user.reserva.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <img src="{{asset('img/aniversariante.png')}}" width="100">
                            <label style="font-weight: bold;" for="aniversariante">Aniversariante</label>
                            <input class="form-control" type="text" value="{{old('aniversariante')}}" name="aniversariante" required>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('img/velas.png')}}" width="100">
                            <label style="font-weight: bold;" for="idade">Idade comemorada</label>
                            <input class="form-control" type="number" value="{{old('idade')}}" name="idade" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <img src="{{asset('img/convidado.png')}}" width="100">
                            <label style="font-weight: bold;" for="qtd_convidados">Nº Convidados</label>
                            <input class="form-control" type="number" value="{{old('qtd_convidados')}}" name="qtd_convidados" required>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('img/calendario.png')}}" width="100">
                            <label style="font-weight: bold;" for="data">Data</label>
                            <input type="datetime-local" class="form-control" value="{{old('data')}}" name="data" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="buffet" style="font-weight: bold;">Escolha do cardápio:</label>
                        <div class="card-deck d-flex flex-wrap justify-content-center">
                            @foreach ($buffets as $key => $buffet)
                                <div class="card col-md-3 ms-2">
                                    @if($buffet->img1_url)
                                        <img src="{{ $buffet->img1_url }}" class="card-img-top" alt="Imagem do Cartão 1">
                                    @elseif($buffet->img2_url)
                                        <img src="{{ $buffet->img2_url }}" class="card-img-top" alt="Imagem do Cartão 2">
                                    @else
                                        <img src="{{ $buffet->img3_url }}" class="card-img-top" alt="Imagem do Cartão 1">
                                    @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $buffet->titulo }}</h5>
                                    <p class="card-text">
                                        Comidas:
                                            {!! $buffet->comidas !!}
                                        Bebidas:
                                            {!! $buffet->bebidas !!}
                                    </p>
                                    <input type="radio" name="buffet" value="{{$buffet->id}}"> Selecionar
                                </div>
                                </div>
                            @endforeach
                        </div>
                      </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
