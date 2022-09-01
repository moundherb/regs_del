<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AdminLayout from "@/Layouts/AdminLayout.vue";
</script>
<template lang="">
    <Head title="التسجيلات" />
    <AdminLayout>
        <div class="container-xl my-5">
            <div class="regs-container">
                <div v-for="reg in regs" class="reg my-2">
                    <Link
                        class="btn btn-light rounded-1 w-100"
                        :href="route('reg_show', reg.id)"
                    >
                        <h6>
                            {{ reg.id }}- {{ reg.first_name }}
                            {{ reg.father_name }} {{ reg.family_name }}
                        </h6>
                        <h6>{{ reg.created_at }}</h6>
                    </Link>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
<script>
export default {
    props: ["regs"],
};
</script>
<style lang=""></style>
