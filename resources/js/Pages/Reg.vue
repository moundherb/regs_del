<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AdminLayout from "@/Layouts/AdminLayout.vue";
</script>
<template lang="">
    <Head :title="reg.first_name + ' ' + reg.family_name" />
    <AdminLayout>
        <div class="container-xl my-5">
            <center>
                <h1>
                    {{ reg.first_name }} {{ reg.father_name }}
                    {{ reg.family_name }}
                </h1>
            </center>
            <hr />
            <div class="container">
                <div class="row m-0">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">الإسم الأول</label>
                            <div type="text" class="form-control" required>
                                {{ reg.first_name }}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">اسم الأب</label>
                            <div type="text" class="form-control" required>
                                {{ reg.father_name }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">اسم العائلة</label>
                            <div type="text" class="form-control" required>
                                {{ reg.family_name }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">الجنسية</label>
                            <div type="text" class="form-control" required>
                                {{ reg.natio }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >رقم بطاقة الهوية الشخصية</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.id_card_number }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >تاريخ بطاقة الهوية الشخصية</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.id_card_date }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">الجنس</label>
                            <div
                                v-if="reg.sex == 'f'"
                                type="text"
                                class="form-control"
                                required
                            >
                                أنثى
                            </div>
                            <div
                                v-if="reg.sex == 'm'"
                                type="text"
                                class="form-control"
                                required
                            >
                                ذكر
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >تاريخ الميلاد</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.b_date }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >مكان الميلاد</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.b_place }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >مكان الإقامة</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.res_place }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >المؤهل العلمي</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.edu_qualification }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">التخصص</label>
                            <div type="text" class="form-control" required>
                                {{ reg.spec }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >جهة التخرج العلمية</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.academic_graduate }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">سنة التخرج</label>
                            <div type="text" class="form-control" required>
                                {{ reg.graduation_year }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >مجال الإهتمام الفلسفي</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.philo_interest }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >عنوان الدراسة المقدمة</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.study_title }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">الجوال</label>
                            <div type="text" class="form-control" required>
                                {{ reg.phone }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >البريد الإلكتروني</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.email }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >مقترح الدراسة</label
                            >
                            <div type="text" class="form-control" required>
                                {{ reg.study_proposal }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >المراجع العلمية</label
                            >
                            <div type="text" class="form-control" required>
                                <div style="white-space: pre-line">{{reg.references}}</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >نماذج من كتابات فلسفية سابقة</label
                            >
                            <a
                                type="button"
                                class="form-control rounded-1"
                                data-bs-toggle="modal"
                                data-bs-target="#examples_modal"
                            >
                            نماذج من كتابات فلسفية سابقة
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >مرفق السيرة الذاتية</label
                            >
                            <a
                                type="button"
                                class="form-control rounded-1"
                                data-bs-toggle="modal"
                                data-bs-target="#cv_modal"
                            >
                        مرفق السيرة الذاتية
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">الصورة شخصية</label>
                            <a
                                type="button"
                                class="form-control rounded-1"
                                data-bs-toggle="modal"
                                data-bs-target="#profile_pic_modal"
                            >
                        الصورة الشخصية
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- examples_modal -->
        <div class="modal fade" id="examples_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">نماذج من كتابات فلسفية سابقة</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe :src="reg.examples" width="100%" height="100%"
                            style="min-height: calc(100vh - 300px);"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- cv_modal -->
        <div class="modal fade" id="cv_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">مرفق السيرة الذاتية</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe :src="reg.cv" width="100%" height="100%"
                            style="min-height: calc(100vh - 300px);"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- profile_pic_modal -->
        <div class="modal fade" id="profile_pic_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">الصورة الشخصية</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- <iframe :src="reg.cv" width="100%" height="100%"
                            style="min-height: calc(100vh - 300px);"></iframe> -->

                            <img :src="reg.profile_pic" height="100%" style="margin: auto;" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div>
        </div>

    </AdminLayout>
</template>
<script>
export default {
    props: ["reg"],
};
</script>
<style lang=""></style>
