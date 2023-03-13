<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>
        <?= $titulo ?>
    </title>
</head>

<body style="background-color:azure">

    <div class="container-fluid p-5">
        <div class="card">
            <h1 class="d-flex justify-content-center">CADASTRO</h1>
        </div>
    </div>

    <form action="#" method="POST">
        <div class="row d-flex justify-content-center mt-5">
            <div class="card col-md-4 p-3">
                <label class="mt-2" for="cadastro_username">USUARIO</label>
                <input class="form-control mt-2" placeholder="Usuario" id="cadastro_username" name="cadastro_username"required>
                <label class="mt-2" for="cadastro_email">EMAIL</label>
                <input class="form-control mt-2" placeholder="email" id="cadastro_email" name="cadastro_email" required>
                <label class="mt-2" for="cadastro_num_contato">NUMERO PARA CONTATO</label>
                <input class="form-control mt-2" placeholder="92999999999" id="cadastro_num_contato" name="cadastro_num_contato" required>
                <label class="mt-2" for="cadastro_password">SENHA</label>
                <input class="form-control mt-2" placeholder="senha" id="cadastro_password" name="cadastro_password"required>
                <label class="mt-2" for="cadastro_comfirm_passwor">CONFIRME SUA SENHA</label>
                <input class="form-control mt-2" placeholder="confirme sua senha" id="cadastro_comfirm_password"name="cadastro_comfirm_password" required>
                <label class="mt-2" for="cadastro_nome_empresa">NOME EMPRESA</label>
                <input class="form-control mt-2" placeholder="nome empresa" id="cadastro_nome_empresa"name="cadastro_nome_empresa">
                <button id="button_cadastro" type="submit" class="btn btn-success mt-3">cadastrar</button>
            </div>
        </div>
    </form>

    <div class="d-flex justify-content-center mt-2">
        <a href="./">Voltar</a>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
<script src="views/javascript/index.js"></script>

</html>