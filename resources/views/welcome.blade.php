<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopping Central Araucária</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>
    <div class="grid-template">
        <div class="topo">
            <div class="container">
                <div class="header mt-4">
                    <div class="menu">
                        <button class="btn">
                            <img src="{{ url('assets/img/menu.png') }}" alt="Menu">
                        </button>
                    </div>
                    <div class="logo">
                        <a href="/">
                            <img src="{{ url('assets/img/logo.png') }}" alt="Logotipo">
                        </a>
                    </div>
                    <div class="perfil">
                        <a href="">
                            <img src="{{ url('assets/img/perfil.png') }}" alt="Perfil">
                        </a>
                    </div>
                </div>
                <div class="destaques mt-3">
                    <div class="destaque-item">
                        <div class="destaque-logo">
                            <a href="">
                                <img src="{{ url('assets/img/oboticario.png') }}" alt="">
                                Boticário
                            </a>
                        </div>
                    </div>
                    <div class="destaque-item">
                        <div class="destaque-logo">
                            <a href="">
                                <img src="{{ url('assets/img/armazem.png') }}" alt="">
                                Domingos
                            </a>
                        </div>
                    </div>
                    <div class="destaque-item">
                        <div class="destaque-logo">
                            <a href="">
                                <img src="{{ url('assets/img/brigaderia.png') }}" alt="">
                                Brigaderia
                            </a>
                        </div>
                    </div>
                    <div class="destaque-item">
                        <div class="destaque-logo">
                            <a href="">
                                <img src="{{ url('assets/img/nitti.png') }}" alt="">
                                Nitti Grill
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tv">
            <div class="item">
                <a href="/shoppingtv">
                    <img src="{{ url('assets/img/shoppingtv.png') }}" alt="Shopping TV">
                </a>
            </div>
        </div>
        <div class="delivery">
            <div class="item">
                <a href="/delivery">
                    <img src="{{ url('assets/img/delivery.png') }}" alt="Delivery">
                    <br> <span> Delivery</span>
                </a>
            </div>
        </div>
        <div class="gastronomia">
            <div class="item">
                <a href="">
                    <img src="{{ url('assets/img/gastronomia.png') }}" alt="Gastronomia">
                    <br> <span>Gastronomia</span>
                </a>
            </div>
        </div>
        <div class="lojas">
            <div class="item">
                <a href="">
                    <img src="{{ url('assets/img/lojas.png') }}" alt="Lojas">
                    <br> <span>Lojas</span>
                </a>
            </div>
        </div>
        <div class="foto">
            <img src="{{ url('assets/img/banner.png') }}" alt="banner">
        </div>
        <div class="estetica">
            <div class="item">
                <a href="">
                    <img src="{{ url('assets/img/estetica.png') }}" alt="Estética">
                    <br> <span>Estética</span>
                </a>
            </div>
        </div>
        <div class="mural">
            <div class="item">
                <a href="">
                    <img src="{{ url('assets/img/mural.png') }}" alt="Mural">
                    <br> <span>Mural</span>
                </a>
            </div>
        </div>
        <div class="agenda">
            <div class="item">
                <a href="">
                    Agenda <br> Do Mês
                    <img src="{{ url('assets/img/seta.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="cashback">
            <div class="item">
                <a href="">
                    <img src="{{ url('assets/img/cashback.png') }}" alt="">
                    <br> <span>Cashback <br> central</span>
                </a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
