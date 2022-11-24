<script setup>
import Header from "@/Layouts/Frontend/Header.vue";
import Footer from "@/Layouts/Frontend/Footer.vue";
</script>
<template>
    <div class="bg-slate-200 dark:bg-slate-900">
        <Header />
        <main class="min-h-screen">
            <slot />
        </main>
        <Footer />
    </div>
</template>
