<template>
    <AppButton color="success" @click="() => isAddSalesFormOpen = true">
        <i class="fa-solid fa-plus"/> <span>Add Sale</span>
    </AppButton>
    <AppSlidingModal v-model:is-open="isAddSalesFormOpen">
        <div>
            <h1>Add Sale</h1>
            <div>
                <AppInput type="date" label="Sale Date" placeholder="sale date"/>
            </div>
        </div>
    </AppSlidingModal>
</template>
<script setup lang="ts">
import AppButton from '@/Components/App/AppButton.vue';
import AppInput from '@/Components/App/AppInput.vue';
import AppSlidingModal from '@/Components/App/AppSlidingModal.vue';
import { ref } from 'vue';

const isAddSalesFormOpen = ref<boolean>(false);
</script>
<style scoped>
h1 {
    font-weight: bolder;
    font-size: larger;
    margin-bottom: 1rem;
}
</style>
