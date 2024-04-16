<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRUEBA</title>
    <script src="{{ secure_asset('serviceworker.js') }}" defer></script>
    <link rel="stylesheet" href="{{ secure_asset('css/tenderos/vistaprincipal.css') }}">
    
    @laravelPWA

</head>
<body>
    <div class="fondoPrincipal">
        <div class="fondoImg">
            <img src="{{ secure_asset('images/new/marslogo.svg') }}" class="logo" alt="MARS">
            <div class="divIngreso">
                <h1>!Hola tendero, bienvenido!</h1>

            </div>
        </div>
    </div>
    
</body>
</html>