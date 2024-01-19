<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Vistazo from '@/Components/Vistazo.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Página de prueba para eNeXTi
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Vistazo />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
