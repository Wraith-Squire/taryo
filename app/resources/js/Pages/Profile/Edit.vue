<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import AuthLayout from '@/Layouts/AuthLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';
import AppCard from '@/Components/App/AppCard.vue';

defineProps<{
    mustVerifyEmail?: boolean;
    status?: string;
}>();
</script>

<template>
    <AuthLayout>
        <div class="flex flex-col gap-4 mx-auto max-w-7xl">
            <AppCard>
                <UpdateProfileInformationForm
                    :must-verify-email="mustVerifyEmail"
                    :status="status"
                    class="max-w-xl"
                />
            </AppCard>
            <AppCard>
                <UpdatePasswordForm class="max-w-xl" />
            </AppCard>
            <AppCard>
                <DeleteUserForm class="max-w-xl" />
            </AppCard>
        </div>
    </AuthLayout>
</template>
