<template>
    <button class="app-button" :data-color="props.color" :data-size="props.size" v-bind="$attrs">
        <slot/>
    </button>
</template>
<script setup lang="ts">
import type {Color, Size} from '@/types/index'

defineOptions({
    inheritAttrs: false
});

type ButtonProps = {
    color?: Color,
    size?: Size
}

const props = defineProps<ButtonProps>();
</script>
