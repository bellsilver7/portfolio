<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import Hero from "@/Layouts/Frontend/Hero.vue";
import Promote from "@/Layouts/Frontend/Promote.vue";
import About from "@/Layouts/Frontend/About.vue";
</script>

<template>
    <Head title="Welcome to portfolio" />
    <FrontendLayout>
        <Hero />
        <Promote />
        <About />
        <!-- Skills tail-100 -->
        <!-- Portfolio primary -->
        <!-- Services secondary -->
        <!-- Contact primary -->
    </FrontendLayout>
</template>
