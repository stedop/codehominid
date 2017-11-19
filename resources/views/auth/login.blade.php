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

            <form novalidate method="post" action="{{route('login')}}" @submit.prevent="doLogin">
                {{ csrf_field() }}

                <div class="md-body-2">
                    <md-input-container md-clearable>
                        <md-icon>email</md-icon>
                        <label>Email</label>
                        <md-input name="email" id="email" type="email" v-model="email"></md-input>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </md-input-container>
                </div>

                <div class="md-body-2">
                    <md-input-container md-clearable md-has-password>
                        <md-icon>lock</md-icon>
                        <label>Password</label>
                        <md-input name="password" id="password" type="password" v-model="password"></md-input>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </md-input-container>
                </div>

                <div class="md-body-2">
                    <md-button type="submit">Login</md-button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>