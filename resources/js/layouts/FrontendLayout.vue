<script setup lang="ts">
import { usePage, Link } from '@inertiajs/vue3';
import { ChevronRight, Menu, Monitor, Moon, Sun, X } from 'lucide-vue-next';
import { ref } from 'vue';
import InteractiveBackground from '@/components/InteractiveBackground.vue';
import { useAppearance } from '@/composables/useAppearance';
import { home, projects, blog, resume } from '@/routes';

const { appearance, updateAppearance } = useAppearance();
const isMobileMenuOpen = ref(false);
const page = usePage();

const navItems = [
    { name: 'Home', href: home().url },
    { name: 'Projects', href: projects().url },
    { name: 'Blog', href: blog().url },
    { name: 'Resume', href: resume().url },
];

const isCurrentPath = (href: string) => {
    if (href === '/') {
        return page.url === '/';
    }

    return page.url.startsWith(href);
};
</script>

<template>
    <InteractiveBackground />
    <div
        class="relative min-h-screen overflow-x-hidden text-zinc-900 selection:bg-brand-accent/30 selection:text-brand-accent dark:text-zinc-100"
    >
        <!-- Navigation -->
        <header
            class="fixed top-0 right-0 left-0 z-50 border-b border-zinc-200 bg-white/80 backdrop-blur-md dark:border-zinc-800 dark:bg-zinc-950/80"
        >
            <nav
                class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4"
            >
                <Link
                    href="/"
                    class="group relative z-60 flex items-center gap-2"
                >
                    <span
                        class="flex h-8 w-8 items-center justify-center rounded bg-brand-accent font-roboto font-bold text-white transition-transform group-hover:scale-110 dark:text-zinc-900/80"
                    >
                        PM
                    </span>
                    <span class="font-roboto sm:inline">Peter Meijer</span>
                </Link>

                <div class="flex items-center gap-4 md:gap-8">
                    <div class="hidden items-center gap-1 md:flex">
                        <Link
                            v-for="item in navItems"
                            :key="item.name"
                            :href="item.href"
                            class="relative px-3 py-2 text-sm font-medium transition-all duration-200"
                            :class="
                                isCurrentPath(item.href)
                                    ? 'text-zinc-900 dark:text-white'
                                    : 'text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white'
                            "
                        >
                            {{ item.name }}
                            <span
                                v-if="isCurrentPath(item.href)"
                                class="absolute right-3 bottom-0 left-3 h-0.5 bg-brand-accent"
                            ></span>
                        </Link>
                    </div>

                    <div
                        class="hidden h-4 w-px bg-zinc-200 md:block dark:bg-zinc-800"
                    ></div>

                    <div
                        class="flex items-center gap-1 rounded-lg bg-zinc-100/50 p-1 dark:bg-zinc-800/50"
                    >
                        <button
                            @click="updateAppearance('light')"
                            class="group relative rounded-md p-1.5 transition-all hover:bg-white dark:hover:bg-zinc-700"
                            :class="
                                appearance === 'light'
                                    ? 'bg-white text-brand-accent shadow-sm dark:bg-zinc-700'
                                    : 'cursor-pointer text-zinc-500 hover:text-zinc-700 dark:hover:text-zinc-300'
                            "
                            title="Light Mode"
                        >
                            <Sun class="h-4 w-4" />
                        </button>
                        <button
                            @click="updateAppearance('dark')"
                            class="group relative rounded-md p-1.5 transition-all hover:bg-white dark:hover:bg-zinc-700"
                            :class="
                                appearance === 'dark'
                                    ? 'bg-white text-brand-accent shadow-sm dark:bg-zinc-700'
                                    : 'cursor-pointer text-zinc-500 hover:text-zinc-700 dark:hover:text-zinc-300'
                            "
                            title="Dark Mode"
                        >
                            <Moon class="h-4 w-4" />
                        </button>
                        <button
                            @click="updateAppearance('system')"
                            class="group relative rounded-md p-1.5 transition-all hover:bg-white dark:hover:bg-zinc-700"
                            :class="
                                appearance === 'system'
                                    ? 'bg-white text-brand-accent shadow-sm dark:bg-zinc-700'
                                    : 'cursor-pointer text-zinc-500 hover:text-zinc-700 dark:hover:text-zinc-300'
                            "
                            title="System Preference"
                        >
                            <Monitor class="h-4 w-4" />
                        </button>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button
                        @click="isMobileMenuOpen = !isMobileMenuOpen"
                        class="flex items-center justify-center rounded-md p-1.5 text-zinc-500 transition-colors hover:bg-zinc-100 md:hidden dark:hover:bg-zinc-800"
                    >
                        <Menu v-if="!isMobileMenuOpen" class="h-5 w-5" />
                        <X v-else class="h-5 w-5" />
                    </button>
                </div>
            </nav>

            <!-- Mobile Navigation -->
            <transition
                enter-active-class="transition-all duration-300 ease-out"
                enter-from-class="opacity-0 -translate-y-4"
                enter-to-class="opacity-100 translate-y-0"
                leave-active-class="transition-all duration-200 ease-in"
                leave-from-class="opacity-100 translate-y-0"
                leave-to-class="opacity-0 -translate-y-4"
            >
                <div
                    v-if="isMobileMenuOpen"
                    class="border-t border-zinc-200 p-6 md:hidden dark:border-zinc-800"
                >
                    <div class="flex flex-col gap-2">
                        <Link
                            v-for="item in navItems"
                            :key="item.name"
                            :href="item.href"
                            @click="isMobileMenuOpen = false"
                            class="flex items-center justify-between rounded-xl px-4 py-3 text-lg font-medium transition-all active:scale-95"
                            :class="
                                isCurrentPath(item.href)
                                    ? 'bg-brand-accent/10 text-brand-accent dark:bg-brand-accent/20'
                                    : 'text-zinc-600 hover:bg-zinc-50 dark:text-zinc-400 dark:hover:bg-zinc-800/50'
                            "
                        >
                            {{ item.name }}
                            <ChevronRight
                                v-if="isCurrentPath(item.href)"
                                class="h-5 w-5"
                            />
                        </Link>
                    </div>
                </div>
            </transition>
        </header>

        <!-- Main Content -->
        <main class="mx-auto max-w-5xl px-6 pt-32 pb-20">
            <slot />
        </main>
    </div>
</template>
