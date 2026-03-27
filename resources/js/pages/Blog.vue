<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { Calendar, Clock, ArrowRight } from 'lucide-vue-next';
import FrontendLayout from '@/layouts/FrontendLayout.vue';

const posts = [
    {
        title: 'The future of Laravel 13',
        excerpt: 'Exploring the new features and improvements in the latest version of Laravel.',
        date: 'March 20, 2026',
        readTime: '5 min read',
        slug: 'future-of-laravel-13'
    },
    {
        title: 'Why I love Tailwind CSS 4',
        excerpt: 'A deep dive into the new engine and performance improvements in Tailwind 4.',
        date: 'March 15, 2026',
        readTime: '8 min read',
        slug: 'why-i-love-tailwind-4'
    }
];
</script>

<template>
    <FrontendLayout>
        <Head title="Blog" />

        <div class="mb-16">
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl mb-4">Blog</h1>
            <p class="text-lg text-zinc-600 dark:text-zinc-400">
                Thoughts on software development, technology, and building products.
            </p>
        </div>

        <div class="space-y-12">
            <article
                v-for="post in posts"
                :key="post.title"
                class="group relative"
            >
                <div class="flex items-center gap-4 text-xs font-medium text-zinc-500 mb-3">
                    <span class="flex items-center gap-1"><Calendar class="h-3 w-3" /> {{ post.date }}</span>
                    <span class="flex items-center gap-1"><Clock class="h-3 w-3" /> {{ post.readTime }}</span>
                </div>

                <h2 class="text-2xl font-bold group-hover:text-brand-accent transition-colors mb-4">
                    <Link href="#">{{ post.title }}</Link>
                </h2>
                <p class="text-zinc-600 dark:text-zinc-400 leading-relaxed mb-6 max-w-3xl">
                    {{ post.excerpt }}
                </p>

                <Link href="#" class="inline-flex items-center text-sm font-bold text-brand-accent">
                    Read Full Article <ArrowRight class="ml-1.5 h-3.5 w-3.5 group-hover:translate-x-1 transition-transform" />
                </Link>

                <div class="mt-12 h-px bg-zinc-200 dark:bg-zinc-800"></div>
            </article>
        </div>
    </FrontendLayout>
</template>
