<template>
    <AuthLayout>
        <div class="mx-auto max-w-7xl">
            <div>
                <h4 class="font-semibold">Recent Stores</h4>
                <div>
                    <RecentStoreList :recent-stores="props.recentStores"/>
                </div>
            </div>
            <div>
                <h4 class="font-semibold">All Stores</h4>
                <div>
                    <AllStoreList :all-stores="props.allStores"/>
                </div>
            </div>

        </div>
    </AuthLayout>
</template>
<script setup lang="ts">
import AuthLayout from '@/Layouts/AuthLayout.vue';
import RecentStoreList from '@/Components/Store/RecentStoreList.vue';
import AllStoreList from '@/Components/Store/AllStoreList.vue';
import { Store } from '@/types/store';
const props = defineProps<{
    recentStores: Store[]
    allStores: Store[],
}>();
</script>
