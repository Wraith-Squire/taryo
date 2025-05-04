<template>
    <div class="menu-right-side">
        <a :href="route('profile.edit')" class="profile-button">{{ $page.props.auth.user.name.charAt(0) }}</a>
        <Link :href="route('dashboard')" :active="route().current('dashboard')">
            <i class="fa-solid fa-house"></i>
        </Link>
        <Link :href="route('logout')" method="post">
            <i class="fa-solid fa-right-from-bracket"></i>
        </Link>
    </div>
</template>
<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>
<style scoped>
.menu-right-side {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: center;
    height: 100vh;
    width: 4rem;
    background-color: white;
    gap: 1rem;
    padding: 1rem;
}

.profile-button {
    padding: 0.5rem;
    border-radius: 100%;
    width: 2rem;
    height: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(var(--success));
    font-size: medium;
}

a {
    width: inherit;
    text-align: center;
    font-size: medium;
}

a:hover {
    color: rgb(var(--secondary));
}
</style>
