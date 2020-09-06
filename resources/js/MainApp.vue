<template>
    <div>
        <div class="row">
            <div class="col-lg-2">
                <Navi></Navi>
            </div>
            <div class="col-lg-10">
                <router-view></router-view>
            </div>
        </div>

    </div>
</template>

<script>
    import Navi from "./components/Navi";

    export default {
        name: "MainApp",
        components: {Navi}
    }
</script>

<style scoped>

</style>
