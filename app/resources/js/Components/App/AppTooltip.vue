<template>
    <div class="app-tooltip">
        <slot/>
    </div>
</template>
<script setup lang="ts">
const props = defineProps<{
    tooltip?: string
}>();
</script>
<style scoped>
.app-tooltip:hover::content {
    content: v-bind(tooltip);
    background-color: white;
}
</style>
