@extends('layouts.app')

@section('content')

<div id="app">
<main-app></main-app>
</div>
@endsection
<script>
    import MainApp from "../js/MainApp";
    export default {
        components: {MainApp}
    }
</script>
