<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import Hero from "@/Layouts/Frontend/Hero.vue";
import Promote from "@/Layouts/Frontend/Promote.vue";
import About from "@/Layouts/Frontend/About.vue";
import Skills from "@/Layouts/Frontend/Skills.vue";
import Portfolio from "@/Layouts/Frontend/Portfolio.vue";

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <Head title="Welcome to portfolio" />
    <FrontendLayout>
        <Hero />
        <Promote />
        <About />
        <Skills :skills="skills" />
        <Portfolio :skills="skills" :projects="projects" />
        <!-- Services secondary -->
        <!-- Contact primary -->
    </FrontendLayout>
</template>
