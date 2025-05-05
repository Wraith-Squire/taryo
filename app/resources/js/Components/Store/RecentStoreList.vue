<template>
    <div class="flex flex-row flex-wrap justify-start gap-4 p-4 align-middle">
        <StoreCard :border-width="'2px'" @click="() => isStoreFormOpen = true">
            <i class="fa-solid fa-plus"/>
            <div>Create a Store</div>
        </StoreCard>
        <StoreCard v-for="store in recentStores" :store-name="store.name" @click="redirectToStorePage(store.id)" />
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
import { router, useForm } from '@inertiajs/vue3';

const props = defineProps<{
    recentStores: Store[]
}>();

const isStoreFormOpen = ref<boolean>(false);

const redirectToStorePage = (store_id: number) => {
    const form = useForm({
        store_id: store_id
    });

    form.get(route('sales'));
}

</script>
