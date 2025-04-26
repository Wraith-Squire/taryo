<template>
    <fieldset :class="$attrs['class'] + ' app-card'">
        <legend class="app-card-label" v-if="props.label">{{ props.label }}</legend>
        <slot></slot>
    </fieldset>
</template>
<script setup lang="ts">
defineOptions({
    inheritAttrs: false
});

type CardProps = {
    label?: string
}

const props = defineProps<CardProps>();
</script>
