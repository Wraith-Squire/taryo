<template>
    <AppCard class="flex items-center justify-center w-48 h-24 p-0">
        <button class="store-button" v-bind="$attrs">
            <slot>
                {{ props.storeName }}
            </slot>
        </button>
    </AppCard>
</template>
<script setup lang="ts">
import AppCard from '@/Components/App/AppCard.vue';
import { computed } from 'vue';

const props = defineProps({
    storeName: {
        type: String,
    },
    borderWidth: {
        type: String,
        default: "0px"
    }
});

const borderWidth = computed(() => props.borderWidth);
</script>
<style scoped>
.store-button {
    height: inherit;
    width: inherit;
    border-radius: inherit;
    font-weight: bolder;
    font-size: large;
}

.store-button:hover {
    background-color: rgba(var(--secondary), 0.1);
}
</style>
