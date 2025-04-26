<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import AppCard from '@/Components/App/AppCard.vue';
import { Link } from '@inertiajs/vue3';

type GuestLayoutProps = {
    label?: string
}

const props = defineProps<GuestLayoutProps>();
</script>

<template>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <Link href="/">
                <ApplicationLogo class="w-40 h-20 text-gray-500 select-none fill-current" />
            </Link>
        </div>

        <AppCard :label="props.label" class="w-1/4">
            <slot />
        </AppCard>
    </div>
</template>
