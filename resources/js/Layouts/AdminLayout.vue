<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>
<template lang="">
    <div class="w-100">
        <div
            class="bg-main w-100 p-3"
            style="
                display: flex;
                flex-direction: row;
                align-content: center;
                align-items: center;
                justify-content: space-between;
            "
        >
            <Link
                :href="route('dashboard')"
                class="text-white d-flex align-items-center align-content-center justify-content-center"
            >
                <img class="logo" style="height: 50px" src="/logo.svg" />
                <h3 class="ms-2">Logo</h3>
            </Link>

            <Link class="text-white" v-on:click="logout">logout</Link>
        </div>
    </div>

    <slot></slot>
</template>
<script>
export default {
    methods: {
        logout() {
            this.$inertia.post('/logout');
        },
    },
};
</script>
<style lang=""></style>
