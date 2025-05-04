<template>
    <div class="app-paginator">
        <button @click="decreaseCurrent"><i class="fa-solid fa-arrow-left"/></button>
        <input v-model="currentPage" @keydown="validateInput"/>
        <button @click="increaseCurrent"><i class="fa-solid fa-arrow-right"/></button>
    </div>
</template>
<script setup lang="ts">
import { computed, watchEffect } from 'vue';


const currentPage = defineModel<number>({
    default: 1
});
const props = defineProps<{
    lastPage?: number
}>();

const lastPage = computed(() => props.lastPage ?? 1);

const validateInput = (event: any) => {
    const inputValue = event.key as string;
    const pattern = /^\d+$/;

    if (!pattern.test(inputValue) && event.key.length <= 1) event.preventDefault();
}

const increaseCurrent = () => {
    if (currentPage.value < lastPage.value) {
        currentPage.value++;
    }
}

const decreaseCurrent = () => {
    if (currentPage.value > 1) {
        currentPage.value--;
    }
}

watchEffect(() => {
    const lastPage = props.lastPage ?? 1;

    if (currentPage.value > lastPage) {
        currentPage.value = lastPage;
    }
});

</script>
<style scoped>
.app-paginator {
    display: flex;
    flex-direction: row;
    gap: 1rem;

    input {
        padding: 0.2rem;
        width: 4rem;
        border: none;
        text-align: center;
        border-radius: 0.2rem;
        box-shadow: 1px 1px 1px 1px rgba(var(--primary), 0.1) inset;
    }
}
</style>
