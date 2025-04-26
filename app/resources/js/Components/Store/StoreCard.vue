<template>
    <AppCard class="flex items-center justify-center w-48 h-48">
        <button class="w-full h-full p-0 m-0">
            {{ props.storeName }}
        </button>
    </AppCard>
</template>
<script setup lang="ts">
import AppCard from '@/Components/App/AppCard.vue';

const props = defineProps({
    storeName: {
        type: String,
        requireed: true
    }
});
</script>
