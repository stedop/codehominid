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
        <md-toolbar class="md-large" md-theme="brown">
            <div class="md-toolbar-container">
                <md-button class="md-icon-button">
                    <md-icon>menu</md-icon>
                </md-button>

                <span style="flex: 1;">hh</span>

                <md-button class="md-icon-button">
                    <md-icon>search</md-icon>
                </md-button>

                <md-button class="md-icon-button">
                    <md-icon>filter_list</md-icon>
                </md-button>
            </div>

            <div class="md-toolbar-container">
                <h2 class="md-title">Monkey around</h2>
            </div>
        </md-toolbar>
        @section('content')
            <transition :name="transitionName">
                <router-view></router-view>
            </transition>
        @show
    </div>
    <script src="{{ mix('js/admin.js') }}"></script>
</body>
</html>
