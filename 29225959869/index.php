<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Valdir Pereira Lourenco">
    <title>O Novo Mercado</title>

<!--    <link rel="canonical" href="/29225959869">-->

    <base href="/29225959869/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Favicons -->
<!--    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">-->
<!--    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">-->
<!--    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">-->
<!--    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">-->
<!--    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">-->
<!--    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">-->
<!--    <meta name="theme-color" content="#7952b3">-->


    <style>
        /*.bd-placeholder-img {*/
        /*    font-size: 1.125rem;*/
        /*    text-anchor: middle;*/
        /*    -webkit-user-select: none;*/
        /*    -moz-user-select: none;*/
        /*    user-select: none;*/
        /*}*/

        /*@media (min-width: 768px) {*/
        /*    .bd-placeholder-img-lg {*/
        /*        font-size: 3.5rem;*/
        /*    }*/
        /*}*/
    </style>


    <!-- Custom styles for this template -->
    <link href="css/timer.css" rel="stylesheet">
</head>
<body>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                Essa oferta acaba em:
            </div>
            <div class="col">
                <div id="timer"></div>
            </div>
            <div class="col">
                Ou enquanto durarem os estoques
            </div>
        </div>
    </div>

</main>


<script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/timer.js"></script>
<script>
    setInterval('updateTimer()', 1000);
</script>

</body>
</html>
