<template>
    <StoreLayout>
        <div>
            <h4 class="text-xl font-semibold">Sales</h4>
            <div class="sales__action-buttons">
                <AppButton color="success" @click="() => isAddSalesFormOpen = true">
                    <i class="fa-solid fa-plus"/> <span>Add Sale</span>
                </AppButton>
            </div>
            <AppTable :rows="props.sales" :columns="columns"/>
        </div>
    </StoreLayout>
    <AppSlidingModal v-model:is-open="isAddSalesFormOpen">
        <div>
            <AppInput type="date" label="Sale Date" placeholder="sale date"/>
        </div>
    </AppSlidingModal>
</template>
<script setup lang="ts">
import AppButton from '@/Components/App/AppButton.vue';
import AppInput from '@/Components/App/AppInput.vue';
import AppSlidingModal from '@/Components/App/AppSlidingModal.vue';
import AppTable from '@/Components/App/AppTable.vue';
import StoreLayout from '@/Layouts/StoreLayout.vue';
import { Sale } from '@/types/sales';
import { ref } from 'vue';

const columns = [
    {
        key: 'sale_date',
        label: 'Sale Date'
    },
    {
        key: 'amount',
        label: 'Amount'
    }
]

const props = defineProps<{
    sales: Sale[]
}>();

const isAddSalesFormOpen = ref<boolean>(false);
</script>
<style scoped>
.sales__action-buttons {
    display: flex;
    flex-direction: row;
    justify-content: end;
}
</style>
