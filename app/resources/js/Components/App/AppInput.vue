<template>
    <div :class="$attrs['class']">
        <fieldset class="app-input-field" :data-size="props.size">
            <legend class="app-input-label" v-if="props.label">{{ props.label }}</legend>
            <input v-model="model" v-bind="$attrs" autocomplete="off">
        </fieldset>
        <span class="app-input-error" v-if="error">{{ error }}</span>
    </div>
</template>
<script setup lang="ts">
import type {Color, Size} from '@/Types/index'
import { onMounted } from 'vue';

defineOptions({
    inheritAttrs: false
});

type InputProps = {
    label?: string,
    size?: Size
}

const props = defineProps<InputProps>();
const model = defineModel();
const error = defineModel('error');
</script>
<style scoped>
</style>
