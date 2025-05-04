<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import AuthLayout from '@/Layouts/AuthLayout.vue';
import { Head } from '@inertiajs/vue3';
import RecentStoreList from '@/Components/Store/RecentStoreList.vue';
import AllStoreList from '@/Components/Store/AllStoreList.vue';

</script>

<template>
    <AuthLayout>
        <div class="mx-auto max-w-7xl">
            <div>
                <h4 class="font-semibold">Recent Stores</h4>
                <div>
                    <RecentStoreList/>
                </div>
            </div>
            <div>
                <h4 class="font-semibold">All Stores</h4>
                <div>
                    <AllStoreList/>
                </div>
            </div>
        </div>
    </AuthLayout>
</template>
