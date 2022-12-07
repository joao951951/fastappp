<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastAndFlash</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href='https://css.gg/close.css' rel='stylesheet'>
</head>
<body class="font-sans antialiased">
    <div>
        <div>
            <a href="{{ route('dashboard') }}">
                <i class="gg-close"></i>
            </a>
        </div>
        <form method="POST" action="{{ route('offer.store') }}">
            @csrf
            @method('POST')
            <label for="name">Item de oferta</label>
            <input type="text" id="name" name="name" placeholder="Nome do item">

            <label for="descri">Descrição</label>
            <input type="text" id="descri" name="descri" placeholder="Endereço, mercado e etc ...">

            <label for="value">Valor</label>
            <input type="text" id="value" name="value" placeholder="Valor da oferta">

            <label for="user_id"></label>
            <input type="hidden" id="user_id" name="user_id" value='{{ Auth::user()->id }}'>

            <input type="submit" value="Salvar">
        </form>
    </div>
</body>
</html>