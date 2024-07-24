<script setup>
import { ref, watch, computed } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";

// データの受け渡し
const props = defineProps({
    text1: String,
    text2: String,
    errors: Object,
});

const form = useForm({
    text1: props.text1,
    text2: props.text2,
});
watch(
    form,
    () => {
        loading.value = true;
        setTimeout(() => {
            loading.value = false;
        }, 250);
    },
    { deep: true },
);

const loading = ref(false);
const saving = ref(false);

// バリデーション周り
const validationRules = {
    text1: (value) =>
        value && value.length >= 5 ? null : "5文字以上で入力してください。",
    text2: (value) =>
        value && value.length >= 5 ? null : "5文字以上で入力してください。",
};
const validationErrors = ref({});
const validateField = (field, value) => {
    const error = validationRules[field](value);
    validationErrors.value[field] = error;
};
const isFormValid = computed(() => {
    return Object.values(validationErrors.value).every(
        (error) => error === null,
    );
});
watch(
    () => form.text1,
    (value) => validateField("text1", value),
    { immediate: true },
);
watch(
    () => form.text2,
    (value) => validateField("text2", value),
    { immediate: true },
);

// 登録処理
const save = async () => {
    if (!isFormValid.value) {
        console.log("フォームにエラーがあります。修正してください。");
        return;
    }

    saving.value = true;
    form.post(route("inertia.form.store"), {
        preserveState: true,
        preserveScroll: true,
        onSuccess: () => {
            alert("Form submitted successfully");
        },
        onError: (errors) => {
            alert("Error submitting form:", errors);
        },
        onFinish: () => {
            saving.value = false;
        },
    });
};
</script>
<template>
    <form @submit.prevent="save">
        <div>
            <input
                v-model="form.text1"
                type="text"
                @blur="validateField('text1', form.text1)"
            />
            <span v-if="validationErrors.text1" class="error">{{
                validationErrors.text1
            }}</span>
            <span v-else-if="errors?.text1" class="error">{{
                errors.text1
            }}</span>
            <div>{{ form.text1 }}</div>
        </div>
        <hr />
        <div>
            <input
                v-model="form.text2"
                type="text"
                @blur="validateField('text2', form.text2)"
            />
            <span v-if="validationErrors.text2" class="error">{{
                validationErrors.text2
            }}</span>
            <span v-else-if="errors?.text2" class="error">{{
                errors.text2
            }}</span>
            <div>{{ form.text2 }}</div>
        </div>
        <div>
            <button type="submit" :disabled="!isFormValid">Save</button>
        </div>
        <div v-if="loading && !saving">loading...</div>
        <div v-if="saving">Saving...</div>
    </form>
</template>
