<script setup>
import BreezeButton from "@/Components/Button.vue";
import BreezeCheckbox from "@/Components/Checkbox.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeInputError from "@/Components/InputError.vue";
import BreezeLabel from "@/Components/Label.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: "",
    password: "",
    remember: true,
});

const submit = () => {
    console.log("test");
    form.post(route("login"), {
        //onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="تسجيل  الدخول" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
    </div>

    <form @submit.prevent="submit()" id="login">
        <div
            class="vh-100 vw-100 bg-light d-flex flex-row align-content-center justify-content-center align-items-center"
        >
            <div class="p-3 bg-white" style="width: 500px">
                <div class="row">
                    <div class="col-12" v-if="form.errors.email">
                        <span
                            class="text-danger float-right"
                            lang="en"
                            dir="ltr"
                            >خطا في البيانات</span
                        >
                        <br/>
                        <hr/>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="email" class="form-label"
                                >الإيميل</label
                            >
                            <input
                                lang="en"
                                dir="ltr"
                                type="email"
                                class="form-control"
                                id="email"
                                v-model="form.email"
                            />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="password" class="form-label"
                                >كلمة السر</label
                            >
                            <input
                                lang="en"
                                dir="ltr"
                                type="password"
                                class="form-control"
                                id="password"
                                v-model="form.password"
                            />
                        </div>
                    </div>
                    <div class="col-12">
                        <Button
                            class="btn btn-primary float-left"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            تسجيل الدخول
                        </Button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>
