@extends('layouts.main')
@section('pagina')
    <div class="tv">
        <div class="shoppingtv">
            <img src="{{ url('assets/img/tv.png') }}" alt="">
            <span>Shopping Tv</span>
        </div>
    </div>
@endsection
@section('content')
    <div class="videos mt-3 mb-5 ">

        <div class="video-item">
            <div class="thumb">
                <img src="{{ url('assets/img/foto1.png') }}" alt="">
                <div class="play">
                    <button class="btn-play">
                        <img src="{{ url('assets/img/play.png') }}" alt="">
                    </button>
                </div>
            </div>
            <div class="titulo-video">
                <div class="container">
                    <div class="titulo">
                        <h1>Live dia dos Namorados</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="video-item">
            <div class="thumb">
                <img src="{{ url('assets/img/foto2.png') }}" alt="">
                <div class="play">
                    <button class="btn-play">
                        <img src="{{ url('assets/img/play.png') }}" alt="">
                    </button>
                </div>
            </div>
            <div class="titulo-video">
                <div class="container">
                    <div class="titulo">
                        <h1>Dicas de Moda</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-item">
            <div class="thumb">
                <img src="{{ url('assets/img/foto3.png') }}" alt="">
                <div class="play">
                    <button class="btn-play">
                        <img src="{{ url('assets/img/play.png') }}" alt="">
                    </button>
                </div>
            </div>
            <div class="titulo-video">
                <div class="container">
                    <div class="titulo">
                        <h1>Vamos cuidar dos cabelos?</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-item">
            <div class="thumb">
                <img src="{{ url('assets/img/foto4.png') }}" alt="">
                <div class="play">
                    <button class="btn-play">
                        <img src="{{ url('assets/img/play.png') }}" alt="">
                    </button>
                </div>
            </div>
            <div class="titulo-video">
                <div class="container">
                    <div class="titulo">
                        <h1>Dia do Hambúrguer</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
