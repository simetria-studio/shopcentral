<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Central Araucária</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- import css -->
    <link rel="stylesheet" href="{{ url('assets/css/fluxo-login/style.min.css') }}">
</head>

<body>
    <div class="topo">
        <div class="logotipo ">
            <img class="responsive-img" src="{{ url('assets/img/logologin.png') }}" alt="">
        </div>
    </div>

    <div class="row formulario">
        <form class="col s12  ">
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label data-error="CPF inválido" data-success="CPF Válido" for="email">CPF</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">SENHA</label>
                </div>
            </div>
            <button class="btn red waves-effect waves-red btn-login" type="submit"
                name="action">LOGIN</button>

            <div class="lembrar-acesso">
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" />
                        <span>LEMBRAR ACESSO</span>
                    </label>
                </p>
            </div>
        </form>
    </div>
    <div class="cadastro center">
        <p>Não possui cadastro? <br><a href="">CLIQUE AQUI</a></p>
    </div>


    



    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Import materialize-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
