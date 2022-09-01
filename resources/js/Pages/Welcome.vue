<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Layout from "@/Layouts/Layout.vue";
</script>

<template>

    <Head title="التسجيل" />

    <Layout>
        <header>
            <div style="width: 100%">
                <img src="1.webp" style="width: 100%" />
            </div>
        </header>
        <div id="download">
            <div class="row align-items-center m-0 pt-5">
                <div class="col-12 col-md-10 py-2">
                    نوع قليل وقال أميركا بسبب التي حالة النووي أبحاث ويعبر لسه
                    والاقتصادية نفهم مدنية تركيز في رئيسي عنه هى الديمقراطية أي
                    وهي في بخصوص أكثر هي الأمن أميركا الأميركية إلى بمظهر في
                    الكمية، تتعاون دولار الثورات أميركا العربية فقط،
                </div>
                <div class="col-12 col-md-2 py-2 d-flex justify-content-center">
                    <button class="btn btn-primary rounded-1 px-4 py-2">
                        تحميل
                    </button>
                </div>
            </div>
        </div>
        <div id="">
            <div class="w-100 bg-light py-4 my-5">
                <center>
                    <h4>
                        عند التسجيل أنت توافق على هذه الشروط .
                        <a type="button" class="" data-bs-toggle="modal" data-bs-target="#condmodal">
                            اضغط هنا
                        </a>
                    </h4>
                </center>
            </div>
        </div>

        <!-- start form  -->
        <div class="container-xl">
            <form @submit.prevent="submit">
                <center>
                    <h1>التسجيل</h1>
                </center>
                <hr />
                <div class="row m-0">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">الإسم الأول</label>
                            <input v-model="FormData.first_name" type="text" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">اسم الأب</label>
                            <input v-model="FormData.father_name" type="text" class="form-control" id="" required />
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">اسم العائلة</label>
                            <input v-model="FormData.family_name" type="text" class="form-control" id="" required />
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">الجنسية</label>
                            <input v-model="FormData.natio" type="text" class="form-control" id="" required />
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label for="" class="form-label">رقم بطاقة الهوية الشخصية</label>
                            <input v-model="FormData.id_card_number" type="text" class="form-control" id="" required />
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label for="" class="form-label">تاريخ بطاقة الهوية الشخصية</label>
                            <input v-model="FormData.id_card_date" type="date" class="form-control" required />
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">الجنس</label>
                            <select v-model="FormData.sex" class="form-control" id="" required >
                                <option value="m">ذكر</option>
                                <option value="f">أنثى</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">تاريخ الميلاد</label>
                            <input v-model="FormData.b_date" type="date" class="form-control" id="" required />
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">مكان الميلاد</label>
                            <input v-model="FormData.b_place" type="text" class="form-control" id="" required />
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">مكان الإقامة</label>
                            <input v-model="FormData.res_place" type="text" class="form-control" id="" required />
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">المؤهل العلمي</label>
                            <input v-model="FormData.edu_qualification" type="text" class="form-control" id="" required >
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">التخصص</label>
                            <input v-model="FormData.spec" type="text" class="form-control" id="" required >
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">جهة التخرج العلمية</label>
                            <input v-model="FormData.academic_graduate" type="text" class="form-control" id="" required >
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">سنة التخرج</label>
                            <input v-model="FormData.graduation_year" type="number" class="form-control" min="1900"
                                max="2099" step="1" required >
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label for="" class="form-label">مجال الإهتمام الفلسفي</label>
                            <input v-model="FormData.philo_interest" type="text" class="form-control" id="" required >
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label">عنوان الدراسة المقدمة</label>
                            <input v-model="FormData.study_title" type="text" class="form-control" id="" required >
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">الجوال</label>
                            <input v-model="FormData.phone" type="text" class="form-control" id="" required >
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-3">
                            <label for="" class="form-label">البريد الإلكتروني</label>
                            <input v-model="FormData.email" type="email" class="form-control" id="" required >
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label">مقترح الدراسة</label>
                            <textarea v-model="FormData.study_proposal" class="form-control" id="" aria-describedby=""
                                rows="10" required ></textarea>
                            <div id="" class="form-text">عدد الكلمات 300-500 | لا تشتمل كلمات المراجع العلمية
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label">المراجع العلمية</label>
                            <textarea v-model="FormData.references" class="form-control" id="" aria-describedby=""
                                rows="10" required ></textarea>
                            <div id="" class="form-text">على الأقل 10
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">نماذج من كتابات فلسفية سابقة</label>
                            <input @input="upload($event.target.files[0], 'examples')" type="file" class="form-control"
                                id="examples" aria-describedby="">
                            <div id="" class="form-text">ليس شرطا ضروريا للقبول لكنه سيؤخذ بعين الاعتبار في
                                عملية تعيين الطلب
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">مرفق السيرة الذاتية</label>
                            <input @input="upload($event.target.files[0], 'cv')" type="file" class="form-control"
                                id="cv" aria-describedby="" required >
                        </div>
                    </div>


                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">صورة شخصية</label>
                            <input @input="upload($event.target.files[0], 'profile_pic')" type="file" id="profile_pic"
                                class="form-control" aria-describedby="" required >
                        </div>
                    </div>



                    <div class="col-6">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="conds-req" required >
                            <label class="form-check-label" for="conds-req">أوافق على كل الشروط وأتعهد بصحة البيانات
                                المدخلة</label>
                        </div>
                    </div>


                    <div class="col-6">
                        <div class="">
                            <button class="btn btn-primary rounded-1 float-end">تسجيل</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- End form -->

        <div class="modal fade" id="condmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            شروط التسجيل
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                أن يكون سعودي الجنسية
                            </li>
                            <li class="list-group-item">
                                أن يقوم بتعبئة نموذج التقديم على الرابط
                                اللإلكتروني
                            </li>
                            <li class="list-group-item">
                                الملخص الذي سيتم تقديمه في طلب المنحة يشتمل على
                                الأمور التالية:
                                <ul class="">
                                    <li class="">الفكرة والأطروحة الأساسية</li>
                                    <li>
                                        المنهج الذي سيتبعه الباحث في بحث المسألة
                                    </li>
                                    <li>تصور أولي لأقسام البحث الأساسية</li>
                                    <li>أهمية البحث وقيمته</li>
                                    <li>
                                        إضافة البحث للأدبيات الموجدة في نقس
                                        المسألة
                                    </li>
                                    <li>إضافة الكلمات المفتاحية</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            إغلاق
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-light py-3 mt-5">
            <center>
                <h6>كل الحقوقة محفوظة</h6>
            </center>
        </footer>
    </Layout>
</template>

<script>
export default {
    data() {
        return {
            FormData: {
                first_name: '',
                father_name: '',
                family_name: '',
                natio: '',
                id_card_number: '',
                id_card_date: '',
                sex: '',
                b_date: '1990-01-01',
                b_place: '',
                res_place: '',
                edu_qualification: '',
                spec: '',
                academic_graduate: '',
                graduation_year: '2022',
                philo_interest: '',
                study_title: '',
                phone: '',
                email: '',
                study_proposal: '',
                references: '',
                examples: null,
                cv: null,
                profile_pic: null,

            }
        }
    },
    methods: {
        upload(file, field) {
            if (field == 'cv' || field == 'examples') {
                var fileExtension = ['pdf'];
                if ($.inArray(file.name.split('.').pop().toLowerCase(), fileExtension) == -1) {
                    alert("Formats are allowed : " + fileExtension.join(', '));
                    if (field == 'examples') {
                        this.FormData.examples = null
                        $('body').find('#examples').val('')
                    } else if (field == 'cv') {
                        this.FormData.cv = null
                        $('body').find('#cv').val('')
                    }
                } else {
                    if (field == 'examples') {
                        this.FormData.examples = file
                    } else if (field == 'cv') {
                        this.FormData.cv = file
                    }
                }
            } else {
                var fileExtension = ['jpeg', 'jpg', 'png'];
                if ($.inArray(file.name.split('.').pop().toLowerCase(), fileExtension) == -1) {
                    alert("Formats are allowed : " + fileExtension.join(', '));
                    this.FormData.profile_pic = null
                    $('body').find('#profile_pic').val('')
                } else {
                    this.FormData.profile_pic = file
                }
            }

        },
        submit() {
            // Inertia.post('', data, {
            //     forceFormData: true,
            // })
            try{
                this.$inertia.post(route('post_reg'), this.FormData);
            }catch{
                this.$inertia.get(route('error'), this.FormData);
            }

        },
    },
};
</script>
