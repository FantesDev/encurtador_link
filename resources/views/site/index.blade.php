<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <main>

        <div class="position-absolute top-50 start-50 translate-middle">
            <h1>Página de Índice</h1>

            <div class="d-flex mt-5 justify-content-between">
                <a href="{{ route('register') }}" type='button' class="btn btn-outline-primary w-100 me-2"> Cadastre-se </a>
                <a href="{{ route('login') }}" type='button' class="btn btn-outline-secondary w-100 ms-2"> Entrar </a>
            </div>
        </div>

    </main>

</body>

</html>