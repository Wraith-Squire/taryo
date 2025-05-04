<template>
    <div class="flex flex-row flex-wrap justify-start gap-4 p-4 align-middle">
        <StoreCard v-for="store in props.allStores" :store-name="store.name" />
    </div>
</template>
<script setup lang="ts">
import StoreCard from '@/Components/Store/StoreCard.vue';
import { Store } from '@/types/store';
import AppPaginator from '../App/AppPaginator.vue';

const props = defineProps<{
    allStores: Store[]
}>();

const stores = ['test', 'test2', 'test3'];
</script>
