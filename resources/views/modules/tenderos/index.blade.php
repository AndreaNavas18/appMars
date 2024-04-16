<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INGRESO TENDERO</title>
    <script src="{{ secure_asset('serviceworker.js') }}" defer></script>
    <link rel="stylesheet" href="{{ secure_asset('css/tenderos/vistaprincipal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    @laravelPWA

</head>
<body>
    <div class="fondoPrincipal">
        <div class="fondoImg">
            <div class="contenidoinicial animate__animated animate__backInDown">
                <h1 class="MMV">Mi 
                    <span> <img src="{{ secure_asset('images/new/marslogo.svg') }}" class="logo" alt="MARS"> </span>
                </h1>
               <h1 class="MMV1"> Vecino</h1>
            </div>
            {{-- <img src="{{ secure_asset('images/new/vecinologo.png') }}" class="logo" alt="MARS"> --}}
            <form
            method="POST" 
                action="{{ route('tenderos.ingreso') }}"
                class="formIngreso">
                <div class="divIngreso">
                    <img src="{{ secure_asset('images/new/vecino.png') }}" class="vecino" alt="MARS">
                    <div class="titulos">
                        <h1 class="tituloIngreso">¡Bienvenido!</h1></div>
                        <div class="divinput">
                            <input id="identification" type="number" placeholder="Ingrese su cedula" class="inputIngreso" required>
                            <img src="{{ secure_asset('images/new/icon1.png') }}" class="iconocedula" alt="#">
                        </div>
                    <button type="submit" class="btnIngreso animate__animated animate__pulse">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>