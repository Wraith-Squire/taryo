<template>
    <StoreLayout>
        <div>
            <h4 class="text-xl font-semibold">Sales</h4>
            <div class="sales__action-buttons">
                <SaleForm/>
            </div>
            <AppTable :rows="props.sales" :columns="columns"/>
        </div>
    </StoreLayout>

</template>
<script setup lang="ts">
import AppTable from '@/Components/App/AppTable.vue';
import StoreLayout from '@/Layouts/StoreLayout.vue';
import { Sale } from '@/types/sales';
import SaleForm from '../Sales/SaleForm.vue';

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

</script>
<style scoped>
.sales__action-buttons {
    display: flex;
    flex-direction: row;
    justify-content: end;
}
</style>
