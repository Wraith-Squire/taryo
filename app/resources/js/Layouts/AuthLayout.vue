<template>
    <div>
        <div class="flex flex-row bg-gray-100">
            <div class="auth-layout">
                <div class="auth-layout__header">
                    <ApplicationLogo class="auth-layout__app-logo"/>
                </div>
                <div class="auth-layout__body">
                    <slot/>
                </div>
            </div>
            <div class="auth-layout__side-nav">
                <MenuRightSide/>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import MenuRightSide from '../Components/Menu/MenuRightSide.vue';
</script>
<style scoped>
.auth-layout {
    width: 100%;
    overflow: scroll;
    height: 100vh;
}

.auth-layout__app-logo {
    width: 8rem;
}

.auth-layout__body {
    padding: 2rem;
}

.auth-layout__header {
    width: 100%;
    padding: 0.5rem 0 0 1rem;
    height: 3rem;
    display: flex;
    flex-direction: row;
    overflow: hidden;
}

.auth-layout__side-nav {
}
</style>
