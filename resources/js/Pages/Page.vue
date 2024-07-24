<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    text: String,
});
</script>

<template>
    <div>
        <div>
            <nav>
                <Link :href="route('inertia.page', 'normal')">Normal Link</Link>
                |
                <Link :href="route('inertia.page', 'inertia')"
                    >Inertia Link</Link
                >
                |
                <Link :href="route('inertia.page', 'preserve')" prefetch>
                    Prefetch on Hover
                </Link>
            </nav>
        </div>
        <div>{{ text }}</div>
    </div>
</template>
