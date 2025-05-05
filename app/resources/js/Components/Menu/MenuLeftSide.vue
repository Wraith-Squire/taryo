<template>
    <div class="menu-left-side">
        <ApplicationLogo class="app-logo"/>
        <a>
            <i class="fa-solid fa-money-bill"></i><span>Sales</span>
        </a>
        <a>
            <i class="fa-solid fa-cart-shopping"></i><span>Purchases</span>
        </a>
        <a>
            <i class="fa-solid fa-person"></i><span>Suppliers</span>
        </a>
        <a>
            <i class="fa-solid fa-box"></i><span>Products</span>
        </a>
    </div>
</template>
<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import AppTooltip from '../App/AppTooltip.vue';
import ApplicationLogo from '../ApplicationLogo.vue';

</script>
<style scoped>
.menu-left-side {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
    height: 100vh;
    background-color: white;
    gap: 1rem;
    padding: 1rem;
    z-index: 3;
    border-left: 1px solid rgba(var(--secondary), 0.2);
    left: 0;
    width: 16rem;
    overflow: hidden;
}

a {
    width: inherit;
    text-align: center;
    font-size: medium;
    display: flex;
    flex-direction: row;
    gap: 1rem;
    align-items: center;
    justify-content: start;

    i {
        width: 2rem;
    }
}

a:hover {
    color: rgb(var(--secondary));
}

.app-logo {
    width: 100%;
    padding: 2rem;
    border-bottom: 1px solid rgba(var(--secondary), 0.2);
}
</style>
