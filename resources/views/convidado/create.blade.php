@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">Confirmar convite para a festa {{ $reserva->aniversariante }} {{ $reserva->idade }} anos</h3>
                <div class="card-tools pull-right">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form id="form" action="{{route('convidado.store')}}" method="POST" novalidate>
                    @csrf
                    <input type="hidden" name="reserva_id" value="{{$reserva->id}}">
                    <div id="membersContainer">
                    </div>

                    <button type="button" class="btn btn-success" onclick="addMember()">Adicionar Membro</button>
                    <button type="button" class="btn btn-danger" onclick="removeMember()">Remover Último Membro</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function addMember() {
        var membersContainer = document.getElementById('membersContainer');

        var memberDiv = document.createElement('div');
        memberDiv.className = 'member';

        memberDiv.innerHTML = `
            <label for="name">Nome:</label>
            <input class="form-control" type="text" name="name[]" required>

            <label for="cpf">CPF:</label>
            <input class="form-control" type="text" name="cpf[]" required>

            <label for="idade">Idade:</label>
            <input class="form-control" type="number" name="idade[]" required>

            <hr class="mb-3">
        `;

        membersContainer.appendChild(memberDiv);
    }

    function removeMember() {
        var membersContainer = document.getElementById('membersContainer');
        var members = membersContainer.getElementsByClassName('member');

        if (members.length > 0) {
            membersContainer.removeChild(members[members.length - 1]);
        }
    }
</script>
@endsection
