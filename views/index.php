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

<body style="background-color:azure;">

    <div class="container-fluid p-5">
        <div class="card">
            <h1 class="d-flex justify-content-center">SISTEMA DE COTAÇÃO</h1>
        </div>
    </div>

<form action="#" method="POST">
    <div class="row d-flex justify-content-center mt-5">
        <div class="card col-md-4 p-3">
            <label class="mt-2" for="login_username">LOGIN</label>
            <input id="login_username" class="form-control mt-2" type="text" placeholder="username" name="login_username">
            <label class="mt-2" for="login_password">PASSWORD</label>
            <input id="login_password" class="form-control mt-2" type="text" placeholder="passoword" name="login_password">
            <button id="button_login" type="submit" class="btn btn-success mt-3">LOGIN</button>
        </div>
    </div>
<form>

    <div class="d-flex justify-content-center mt-2">
            <a href="./cadastro">cadastre-se</a>
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