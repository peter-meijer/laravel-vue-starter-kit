<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { Download, Mail, Phone, MapPin } from 'lucide-vue-next';
import FrontendLayout from '@/layouts/FrontendLayout.vue';

type Experience = {
    company: string;
    role: string;
    period: string;
    description: string;
};

type Education = {
    school: string;
    degree: string;
    period: string;
};

type Props = {
    experience: Experience[];
    education: Education[];
};

defineProps<Props>();

const skills = [
    'PHP',
    'Symfony',
    'Laravel',
    'Nuxt',
    'JavaScript',
    'Vue.js',
    'TypeScript',
    'Tailwind CSS',
    'Docker',
    'Git',
    'PostgreSQL',
];
</script>

<template>
    <FrontendLayout>
        <Head title="Resume" />

        <div
            class="mb-16 flex flex-col items-start justify-between gap-6 md:flex-row md:items-end"
        >
            <div>
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight sm:text-5xl"
                >
                    Resume
                </h1>
                <p class="text-lg text-zinc-600 dark:text-zinc-400">
                    A summary of my professional journey and technical
                    expertise.
                </p>
            </div>
            <button
                class="inline-flex cursor-pointer items-center justify-center rounded-full bg-brand-accent px-6 py-2.5 font-bold text-white transition-transform hover:scale-105"
            >
                <Download class="mr-2 h-4 w-4" /> Download PDF
            </button>
        </div>

        <div class="grid gap-16 md:grid-cols-3">
            <!-- Sidebar -->
            <div class="space-y-12">
                <section>
                    <h2 class="mb-6 text-xl font-bold tracking-tight">
                        Contact
                    </h2>
                    <ul
                        class="space-y-4 text-sm text-zinc-600 dark:text-zinc-400"
                    >
                        <li class="flex items-center gap-3">
                            <Mail class="h-4 w-4 text-brand-accent" />
                            petermeijer83@gmail.com
                        </li>
                        <li class="flex items-center gap-3">
                            <Phone class="h-4 w-4 text-brand-accent" />
                            +31681500192
                        </li>
                        <li class="flex items-center gap-3">
                            <MapPin class="h-4 w-4 text-brand-accent" />
                            Middelburg, Netherlands
                        </li>
                    </ul>
                </section>

                <section>
                    <h2 class="mb-6 text-xl font-bold tracking-tight">
                        Skills
                    </h2>
                    <div class="flex flex-wrap gap-2">
                        <span
                            v-for="skill in skills"
                            :key="skill"
                            class="rounded-md border border-zinc-200 bg-white px-3 py-1 text-xs font-semibold dark:border-zinc-800 dark:bg-zinc-900"
                        >
                            {{ skill }}
                        </span>
                    </div>
                </section>
            </div>

            <!-- Main Section -->
            <div class="space-y-16 md:col-span-2">
                <section>
                    <h2 class="mb-8 text-2xl font-bold tracking-tight">
                        Experience
                    </h2>
                    <div
                        class="space-y-12 border-l-2 border-zinc-200 pl-8 dark:border-zinc-800"
                    >
                        <div
                            v-for="job in experience"
                            :key="job.company"
                            class="relative"
                        >
                            <div
                                class="absolute top-1.5 -left-10.25 h-4 w-4 rounded-full border-4 border-white bg-brand-accent dark:border-[#0a0a0a]"
                            ></div>
                            <div
                                class="mb-1 flex flex-wrap items-center justify-between gap-2"
                            >
                                <h3 class="text-lg font-bold">
                                    {{ job.role }}
                                </h3>
                                <span
                                    class="text-sm font-medium text-brand-accent"
                                    >{{ job.period }}</span
                                >
                            </div>
                            <div
                                class="mb-4 text-sm font-bold text-zinc-500"
                            >
                                {{ job.company }}
                            </div>
                            <p
                                class="text-sm leading-relaxed text-zinc-600 dark:text-zinc-400"
                            >
                                {{ job.description }}
                            </p>
                        </div>
                    </div>
                </section>

                <section>
                    <h2 class="mb-8 text-2xl font-bold tracking-tight">
                        Education
                    </h2>
                    <div class="space-y-8">
                        <div v-for="edu in education" :key="edu.school">
                            <div
                                class="mb-1 flex flex-wrap items-center justify-between gap-2"
                            >
                                <h3 class="text-lg font-bold">
                                    {{ edu.degree }}
                                </h3>
                                <span
                                    class="text-sm font-medium text-brand-accent"
                                    >{{ edu.period }}</span
                                >
                            </div>
                            <div class="text-sm font-bold text-zinc-500">
                                {{ edu.school }}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </FrontendLayout>
</template>
