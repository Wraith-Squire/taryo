<template>
    <h1>Create Store</h1>
    <div class="store-form">
        <AppInput label="Name" placeholder="name"/>
        <AppInput label="Location" placeholder="location"/>
        <div class="store-form__action-buttons">
            <AppButton color="success">Save</AppButton>
        </div>
    </div>
</template>
<script setup lang="ts">
import AppButton from '../App/AppButton.vue';
import AppInput from '../App/AppInput.vue';
</script>
<style scoped>
h1 {
    font-weight: bolder;
    font-size: larger;
}

.store-form {
    height: inherit;
    width: inherit;
    display: flex;
    flex-direction: column;
    justify-content: top;
    padding-right: 2rem;
    padding-left: 1rem;
    gap: 1rem;

    .store-form__action-buttons {
        align-self: flex-end;
    }
}
</style>

