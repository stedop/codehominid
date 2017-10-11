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
        <md-toolbar>
            <div class="md-toolbar-container">
                <md-button class="md-icon-button" @click="toggleSidenav">
                    <md-icon>menu</md-icon>
                </md-button>

                <span style="flex: 1;">Monkey around</span>

                <md-button class="md-icon-button">
                    <md-icon>search</md-icon>
                </md-button>

                <md-button class="md-icon-button">
                    <md-icon>filter_list</md-icon>
                </md-button>
            </div>
        </md-toolbar>

        <md-sidenav class="md-left" ref="leftSidenav" @open="open('Left')" @close="close('Left')">
            <md-toolbar class="md-large">
                <div class="md-toolbar-container">
                    <h3 class="md-title">Do Things</h3>
                </div>
            </md-toolbar>
            <router-link :to="{name: 'oauth'}" tag="md-button" class="md-raised md-primary">
                <md-icon>perm_identity</md-icon> Ouath
            </router-link>
        </md-sidenav>
        @section('content')
            <transition :name="transitionName">
                <router-view></router-view>
            </transition>
        @show
    </div>
    <script src="{{ mix('js/admin.js') }}"></script>
</body>
</html>
