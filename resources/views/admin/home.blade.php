@extends('layouts.admin')

@section('content')
    <router-link :to="{name: 'oauth'}" class="btn btn-block btn-primary">Ouath</router-link>

    <transition :name="transitionName">
        <router-view></router-view>
    </transition>
@endsection