<template>
    <div class="app-sliding-modal" v-if="isVisible">
        <a class="app-sliding-modal__overlay" @click="setIsOpen(false)"/>
        <div class="app-sliding-modal__content" :data-open="isOpen">
            <button class="app-sliding-modal__close-button" @click="setIsOpen(false)">
                <i class="fa-solid fa-xmark"/>
            </button>
            <div class="app-sliding-modal__content-body">
                <slot/>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import { onMounted, ref, watchEffect } from 'vue';

const isOpen = defineModel('isOpen');
const isVisible = ref<boolean>(false);
const setIsOpen = (value: boolean) => isOpen.value = value;

onanimationend = (event) => {
    if (isOpen.value == false) isVisible.value = false;
}

watchEffect(() => {
    if (isOpen.value) isVisible.value = true;
});
</script>
<style scoped>
.app-sliding-modal {
    position: absolute;
    height: 100%;
    width: 100vw;
    z-index: 3;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    justify-content: right;
    align-items: center;
    flex-direction: row;
    overflow: hidden;
}

.app-sliding-modal__overlay {
    position: absolute;
    height: inherit;
    width: inherit;
    background-color: rgba(var(--secondary), 0.2);
}

.app-sliding-modal__content {
    background-color: white;
    height: inherit;
    min-width: 40rem;
    z-index: 4;
    padding: 1rem;
    padding-right: 4rem;

    &[data-open=true] {
        animation: ease-in 0.25s forwards slide-in;
    }

    &[data-open=false] {
        animation: ease-in 0.25s forwards slide-out;
    }
}

.app-sliding-modal__content-body {
    padding-top: 4rem;
    height: 100%;
    width: 100%;
}

.app-sliding-modal__close-button {
    position: relative;
    padding: 0;
    margin: 0;

    &:hover {
        color: rgb(var(--secondary));
    }
}

@keyframes slide-in {
    from {
        transform: translateX(100%);
    }

    to {
        transform: translateX(0%);
    }
}

@keyframes slide-out {
    from {
        transform: translateX(0%);
    }

    to {
        transform: translateX(100%);
    }
}
</style>
