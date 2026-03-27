<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ArrowRight, ExternalLink } from 'lucide-vue-next';
import FrontendLayout from '@/layouts/FrontendLayout.vue';
import { blog, resume } from '@/routes';

const featuredProjects = [
    {
        title: 'Technical Project One',
        description:
            'A deep dive into high-performance computing with Laravel and Go.',
        tags: ['Laravel', 'Go', 'Redis'],
        link: '#',
    },
    {
        title: 'Open Source Contribution',
        description:
            'Improving developer experience in modern frontend frameworks.',
        tags: ['Vue', 'TypeScript', 'Vite'],
        link: '#',
    },
];

const latestPosts = [
    { title: 'The future of Laravel 13', date: 'March 20, 2026' },
    { title: 'Why I love Tailwind CSS 4', date: 'March 15, 2026' },
];
</script>

<template>
    <FrontendLayout>
        <Head title="Home" />

        <!-- Hero Section -->
        <section
            class="mb-24 flex flex-col items-center gap-12 lg:flex-row lg:items-center lg:justify-between lg:gap-24"
        >
            <div class="flex-1">
                <!-- Mobile Portrait Image (Floated) -->
                <div class="relative float-right mb-2 ml-4 sm:hidden">
                    <!-- Dotted Background Highlight (Mobile) -->
                    <div
                        class="pointer-events-none absolute -inset-48 opacity-40 dark:opacity-60"
                        :style="{
                            backgroundImage: `radial-gradient(circle 1.5px at center, var(--brand-accent, #DE4400) 1.5px, transparent 1.5px)`,
                            backgroundSize: '12px 12px',
                            backgroundPosition: '0px 0px',
                            backgroundAttachment: 'fixed',
                            WebkitMaskImage:
                                'radial-gradient(circle 200px at 45% 45%, black 0%, transparent 80%)',
                            maskImage:
                                'radial-gradient(circle 200px at 45% 45%, black 0%, transparent 80%)',
                        }"
                    ></div>
                    <div
                        class="relative h-28 w-28 shrink-0 overflow-hidden rounded-full border border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-900"
                    >
                        <img
                            src="/images/portrait.jpg"
                            alt="Peter Meijer"
                            class="h-full w-full object-cover"
                        />
                    </div>
                </div>

                <h1
                    class="mb-6 font-roboto text-4xl font-black tracking-tight sm:text-7xl"
                >
                    Building <span class="text-brand-accent">modern</span> web
                    experiences<span
                        class="ml-1 inline-block h-2 w-2 bg-brand-accent sm:h-3 sm:w-3"
                    ></span>
                </h1>
                <p
                    class="mb-10 max-w-2xl text-lg text-zinc-600 sm:text-xl dark:text-zinc-400"
                >
                    Hi, I'm Peter! A tech-minded problem solver with a
                    background that blends hardware and software, and a soft
                    spot for clean solutions that just work. Currently leading
                    technical improvements at
                    <a
                        href="https://www.hellocontainer.com"
                        target="_blank"
                        class="font-bold text-brand-accent"
                        >HelloContainer</a
                    >.
                </p>
                <div class="flex flex-wrap gap-4">
                    <Link
                        href="#"
                        class="inline-flex items-center justify-center rounded-md bg-brand-accent px-8 py-3 font-semibold text-white transition-transform hover:scale-105"
                    >
                        View My Work
                        <ArrowRight class="ml-2 h-4 w-4" />
                    </Link>
                    <Link
                        :href="blog().url"
                        class="inline-flex items-center justify-center rounded-md border border-zinc-200 bg-white px-8 py-3 font-semibold transition-transform hover:scale-105 dark:border-zinc-800 dark:bg-zinc-900"
                    >
                        Read Blog
                    </Link>
                </div>
            </div>

            <div class="relative hidden sm:block">
                <!-- Dotted Background Highlight (Desktop) -->
                <div
                    class="pointer-events-none absolute -inset-72 opacity-40 dark:opacity-60"
                    :style="{
                        backgroundImage: `radial-gradient(circle 1.5px at center, var(--brand-accent, #DE4400) 1.5px, transparent 1.5px)`,
                        backgroundSize: '12px 12px',
                        backgroundPosition: '0px 0px',
                        backgroundAttachment: 'fixed',
                        WebkitMaskImage:
                            'radial-gradient(circle 320px at 45% 45%, black 0%, transparent 80%)',
                        maskImage:
                            'radial-gradient(circle 320px at 45% 45%, black 0%, transparent 80%)',
                    }"
                ></div>

                <!-- Portrait Image -->
                <div
                    class="relative h-48 w-48 shrink-0 overflow-hidden rounded-full border border-zinc-200 bg-white transition-all hover:border-brand-accent dark:border-zinc-800 dark:bg-zinc-900"
                >
                    <img
                        src="/images/portrait.jpg"
                        alt="Peter Meijer"
                        class="h-full w-full object-cover transition-transform duration-500 hover:scale-110"
                    />
                </div>
            </div>
        </section>

        <!-- Projects Preview -->
        <section class="mb-24">
            <div class="mb-10 flex items-end justify-between">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight">
                        Featured Projects
                    </h2>
                    <p class="mt-2 text-zinc-500">
                        Some of my recent technical work.
                    </p>
                </div>
                <Link
                    href="#"
                    class="group flex items-center text-sm font-semibold text-brand-accent"
                >
                    All projects
                    <ArrowRight
                        class="ml-1 h-3 w-3 transition-transform group-hover:translate-x-1"
                    />
                </Link>
            </div>
            <div class="grid gap-6 md:grid-cols-2">
                <div
                    v-for="project in featuredProjects"
                    :key="project.title"
                    class="group relative overflow-hidden rounded-2xl border border-zinc-200 bg-white p-8 transition-all hover:border-brand-accent/50 dark:border-zinc-800 dark:bg-zinc-900"
                >
                    <div class="mb-4 flex gap-2">
                        <span
                            v-for="tag in project.tags"
                            :key="tag"
                            class="rounded-md bg-zinc-100 px-2 py-1 text-[10px] font-bold tracking-wider text-zinc-500 uppercase dark:bg-zinc-800"
                        >
                            {{ tag }}
                        </span>
                    </div>
                    <h3
                        class="mb-3 text-xl font-bold group-hover:text-brand-accent"
                    >
                        {{ project.title }}
                    </h3>
                    <p class="mb-6 text-sm text-zinc-500 dark:text-zinc-400">
                        {{ project.description }}
                    </p>
                    <Link
                        :href="project.link"
                        class="inline-flex items-center text-sm font-medium"
                    >
                        View Details <ExternalLink class="ml-1 h-3 w-3" />
                    </Link>
                </div>
            </div>
        </section>

        <!-- Blog Preview & About -->
        <div class="grid gap-16 lg:grid-cols-3">
            <section class="lg:col-span-2">
                <h2 class="mb-8 text-3xl font-bold tracking-tight">
                    Latest Articles
                </h2>
                <div class="space-y-8">
                    <article
                        v-for="post in latestPosts"
                        :key="post.title"
                        class="group relative"
                    >
                        <span class="text-xs font-medium text-zinc-500">{{
                            post.date
                        }}</span>
                        <h3
                            class="mt-2 text-xl font-bold group-hover:text-brand-accent"
                        >
                            <Link href="#">{{ post.title }}</Link>
                        </h3>
                    </article>
                </div>
            </section>

            <section>
                <h2 class="mb-8 text-3xl font-bold tracking-tight">About Me</h2>
                <div
                    class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-900"
                >
                    <p
                        class="text-sm leading-relaxed text-zinc-600 dark:text-zinc-400"
                    >
                        I'm a full-stack developer based in the Netherlands. I
                        enjoy solving complex problems and sharing what I learn
                        along the way.
                    </p>
                    <hr class="my-6 border-zinc-200 dark:border-zinc-800" />
                    <Link
                        :href="resume().url"
                        class="group flex items-center text-sm font-semibold text-brand-accent"
                    >
                        Full Resume
                        <ArrowRight
                            class="ml-1 h-3 w-3 transition-transform group-hover:translate-x-1"
                        />
                    </Link>
                </div>
            </section>
        </div>
    </FrontendLayout>
</template>
