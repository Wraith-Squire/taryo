<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import StoreList from '@/Components/Store/StoreList.vue';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Stores</h2>
        </template>

        <div class="h-full py-4">
            <div class="h-full mx-auto max-w-7xl">
                <div class="overflow-hidden bg-white shadow-sm h-svh sm:rounded-lg">
                    <StoreList/>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
