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
    <div id="login">
        <md-toolbar>
            <h1 class="md-title">Login</h1>
        </md-toolbar>
        <div class="container">

            <form method="post" action="{{route('login')}}">
                {{ csrf_field() }}

                <div class="md-body-2">
                    <md-input-container>
                        <md-input  id="email" type="email" :value="email">
                            Email
                            <md-icon>email</md-icon>
                        </md-input>
                    </md-input-container>
                </div>

                <div class="md-body-2">
                    <md-input-container>
                        <md-input id="password" type="password" :vlaue="password">
                            Password
                        </md-input>
                    </md-input-container>
                </div>

                <div class="md-body-2">
                    <md-button>Login</md-button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>