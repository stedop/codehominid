@section('content')
    <div class="container-fluid">
        <h1>Monkey around</h1>
        <router-link :to="{name: 'oauth'}" class="btn btn-block btn-primary">Ouath</router-link>

        <transition :name="transitionName">
            <router-view></router-view>
        </transition>
    </div>
@stop