<template>
    <h1>Create Store</h1>
    <div class="store-form">
        <AppInput label="Name" placeholder="name" v-model="store.name" v-model:error="store.errors.name"/>
        <AppInput label="Location" placeholder="location" v-model="store.location" v-model:error="store.errors.location"/>
        <div class="store-form__action-buttons">
            <AppButton color="success" @click="() => store.submit('post', 'store/create', {
                onSuccess: (response) => { console.log(response)}
            })">Save</AppButton>
        </div>
    </div>
</template>
<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import AppButton from '../App/AppButton.vue';
import AppInput from '../App/AppInput.vue';

const store = useForm<{
    name: string,
    location: string
}>({
    name: '',
    location: ''
});
</script>
<style scoped>
h1 {
    font-weight: bolder;
    font-size: larger;
    margin-bottom: 1rem;
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

