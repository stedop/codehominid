<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Monkey around</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<div id="admin">
    <b-container fluid>
        <h1>Monkey around</h1>
        <router-link :to="{name: 'oauth'}" class="btn btn-block btn-primary">Ouath</router-link>
    </b-container>
</div>
    <script src="{{ mix('js/admin.js') }}"></script>
</body>
</html>
