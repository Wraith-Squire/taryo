<template>
    <div class="flex flex-row flex-wrap justify-start gap-4 p-4 align-middle">
        <StoreCard :border-width="'2px'" @click="() => isStoreFormOpen = true">
            <i class="fa-solid fa-plus"/>
            <div>Create a Store</div>
        </StoreCard>
        <StoreCard v-for="store in recentStores" :store-name="store.name" />
        <AppSlidingModal v-model:is-open="isStoreFormOpen">
            <StoreForm/>
        </AppSlidingModal>
    </div>
</template>
<script setup lang="ts">
import StoreCard from '@/Components/Store/StoreCard.vue';
import AppSlidingModal from '../App/AppSlidingModal.vue';
import { ref } from 'vue';
import StoreForm from './StoreForm.vue';
import { Store } from '@/types/store';

const props = defineProps<{
    recentStores: Store[]
}>();

const isStoreFormOpen = ref<boolean>(false);
const stores = ['test', 'test2', 'test3'];
</script>
