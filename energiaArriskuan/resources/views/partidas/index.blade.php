@extends('layouts.plantillaIndex')

@section('title', 'Partida')

@section('content')

    <div id="tiempo">

    </div>

    <script>
        import Denbora from "../../components/Denbora.vue";

        const app = Vue.createApp(Denbora);
        app.mount('#tiempo');
    </script>

@endsection
