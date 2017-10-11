@extends('layouts.admin')

@section('content')
    <transition :name="transitionName">
        <router-view></router-view>
    </transition>
@endsection