<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ExternalLink } from 'lucide-vue-next';
import FrontendLayout from '@/layouts/FrontendLayout.vue';

const projects = [
    {
        title: 'Technical Project One',
        description: 'A deep dive into high-performance computing with Laravel and Go. Explores concurrency and data synchronization at scale.',
        tags: ['Laravel', 'Go', 'Redis', 'Docker'],
        link: '#',
        status: 'Featured'
    },
    {
        title: 'Open Source UI Library',
        description: 'A collection of highly accessible, customizable Vue components built with Tailwind CSS.',
        tags: ['Vue', 'TypeScript', 'Tailwind'],
        link: '#',
        status: 'Ongoing'
    },
    {
        title: 'Microservices Gateway',
        description: 'Custom API gateway for managing authentication and routing across distributed services.',
        tags: ['Node.js', 'Kubernetes', 'gRPC'],
        link: '#',
        status: 'Completed'
    }
];
</script>

<template>
    <FrontendLayout>
        <Head title="Projects" />

        <div class="mb-16">
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl mb-4">Projects</h1>
            <p class="text-lg text-zinc-600 dark:text-zinc-400">
                A collection of my technical work, side projects, and open-source contributions.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-2">
            <div
                v-for="project in projects"
                :key="project.title"
                class="group flex flex-col rounded-2xl border border-zinc-200 bg-white p-8 transition-all hover:border-brand-accent/50 dark:border-zinc-800 dark:bg-zinc-900"
            >
                <div class="mb-4 flex items-center justify-between">
                    <div class="flex gap-2">
                        <span v-for="tag in project.tags" :key="tag" class="rounded-md bg-zinc-100 px-2 py-1 text-[10px] font-bold uppercase tracking-wider text-zinc-500 dark:bg-zinc-800">
                            {{ tag }}
                        </span>
                    </div>
                    <span v-if="project.status" class="text-[10px] font-bold uppercase text-brand-accent">{{ project.status }}</span>
                </div>

                <h2 class="mb-3 text-2xl font-bold group-hover:text-brand-accent transition-colors">
                    {{ project.title }}
                </h2>
                <p class="mb-8 flex-grow text-zinc-600 dark:text-zinc-400 leading-relaxed">
                    {{ project.description }}
                </p>

                <div class="flex items-center gap-4">
                    <Link :href="project.link" class="inline-flex items-center text-sm font-bold text-brand-accent">
                        View Project <ExternalLink class="ml-1.5 h-3.5 w-3.5" />
                    </Link>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>
