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
    <v-app id="inspire" dark>
        <v-navigation-drawer
                clipped
                persistent
                v-model="drawer"
                enable-resize-watcher
                app
        >
            <v-list dense>
                <v-list-tile @click="">
                    <v-list-tile-action>
                        <v-icon>dashboard</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Dashboard</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile @click="goOAuth()">
                    <v-list-tile-action>
                        <v-icon>perm-identity</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>OAuth</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile @click="">
                    <v-list-tile-action>
                        <v-icon>settings</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Settings</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar app fixed clipped-left>
            <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-title>Application</v-toolbar-title>
        </v-toolbar>
        <main>
            <v-content>
                <v-container fluid fill-height>
                    <v-layout justify-center align-center>
                        <transition :name="transitionName">
                            <router-view></router-view>
                        </transition>
                    </v-layout>
                </v-container>
            </v-content>
        </main>
        <v-footer app fixed>
            <span>&copy; 2017</span>
        </v-footer>
    </v-app>
</div>
    <script src="{{ mix('js/admin.js') }}"></script>
</body>
</html>
