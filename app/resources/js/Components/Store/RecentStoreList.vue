<template>
    <div class="grid justify-start grid-flow-col gap-4 p-4 align-middle">
        <StoreCard :border-width="'2px'">
            <i class="fa-solid fa-plus"/>
            <div>Create a Store</div>
        </StoreCard>
        <StoreCard v-for="store in stores" :store-name="store" />
    </div>
</template>
<script setup lang="ts">
import StoreCard from '@/Components/Store/StoreCard.vue';

const stores = ['test', 'test2', 'test3'];
</script>
