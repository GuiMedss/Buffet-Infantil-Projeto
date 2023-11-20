@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div id="carouselExample" class="carousel slide mb-3">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slide1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <p class="text-center" style="color: white;">
            O Buffet Infantil Space Adventure em Campinas é reconhecido por criar festas que vão além das expectativas, <br>
            transformando cada celebração em um verdadeiro sucesso. Com uma equipe dedicada e profissional,<br>
            o Space Adventure está comprometido em proporcionar momentos de alegria, diversão e animação para todos<br>
            os pequenos aventureiros.<br>
            <br>
            Ao escolher o Buffet Infantil Space Adventure, você está optando por uma celebração única, marcada por toda<br>
            a magia e cuidado que a franquia já consagrou ao longo dos anos. Prepare-se para uma jornada incrível de diversão,<br>
            onde cada detalhe é pensado para tornar a festa das crianças uma experiência memorável. O Buffet Infantil<br>
            Space Adventure em Campinas é a escolha perfeita para transformar sonhos em realidade e celebrar momentos<br>
            especiais de forma inesquecível.<br>
        </p>
    </div>
</div>
@endsection
