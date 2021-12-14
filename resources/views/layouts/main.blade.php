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
    <link rel="stylesheet" href="assets/css/estilo.min.css">
</head>

<body>
    <header>
        <div class="topo-colorido">
            <div class="laranja"></div>
            <div class="roxo"></div>
            <div class="rosa"></div>
            <div class="branco"></div>
        </div>
        @section('pagina')

        @show
        <div class="voltar">
            <a type="button" href="/" class="btn btn-voltar">VOLTAR</a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="input-group pesquisa mt-5">
                <input type="search" class="" placeholder=" Pesquisar" aria-label="Search"
                    aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <div class="border"></div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer></footer>

    <script src="https://kit.fontawesome.com/e67788a73f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
