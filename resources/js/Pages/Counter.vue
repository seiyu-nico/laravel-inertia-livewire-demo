<script setup>
import { ref } from "vue";

const props = defineProps({
    count: Number,
});
const count = ref(props.count);
const increment = () => count.value++;
const decrement = () => count.value--;
</script>

<template>
    <div>
        <h1>{{ count }}</h1>
        <button @click="increment">+</button>
        <button @click="decrement">-</button>
    </div>
</template>
