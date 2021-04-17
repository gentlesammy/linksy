<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linkster Profile: {{$user->username}}</title>
</head>
<body>
    <meta name="csrf-token" content="{{ csrf_token() }}" id="metadaddy" data-id="{{$user->id}}">
    <div id="user" data-user={{$user->username}}>

    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
