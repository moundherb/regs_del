<script setup>
    import { Link } from "@inertiajs/inertia-vue3";
</script>
<template lang="">
    <div class="w-100">
        <Link
            :href="route('home')"
            class="w-100 py-3 bg-main text-white d-flex align-items-center align-content-center justify-content-center"
        >
            <img class="logo" style="height: 50px" src="/logo.svg" />
            <h3 class="ms-2">Logo</h3>
        </Link>
    </div>

    <slot></slot>
</template>
<script>
export default {
    methods: {
        logout(){
            this.$inertia.post(route('logout'));
        }
    },
};
</script>
<style lang=""></style>
