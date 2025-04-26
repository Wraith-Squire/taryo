<template>
    <div class="grid justify-start h-full grid-flow-col gap-4 p-4 align-middle">
        <StoreCard v-for="store in stores" :store-name="store" />
    </div>
</template>
<script setup lang="ts">
import StoreCard from '@/Components/Store/StoreCard.vue';

const stores = ['test', 'test2', 'test3'];
</script>
