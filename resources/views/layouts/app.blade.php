<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ secure_asset('serviceworker.js') }}" defer></script>

    <title>Document</title>

    <script>
        // Initialize the service worker
        // if (navigator.serviceWorker.controller) {
        //     console.log('Service worker already registered.')
        // } else {
        //     navigator.serviceWorker.register('serviceworker.js', {
        //     scope: './'
        //     }).then(function(reg) {
        //     console.log('Service worker has been registered for scope:'+ reg.scope);
        //     });
        // }
    </script>
    @laravelPWA
</head>
<body>
    
</body>
</html>