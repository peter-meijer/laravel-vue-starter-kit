<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue';

const mouseX = ref(0);
const mouseY = ref(0);
const isMouseActive = ref(false);

const updateMousePosition = (e: MouseEvent) => {
    if (!isMouseActive.value) {
        isMouseActive.value = true;
    }

    mouseX.value = e.clientX;
    mouseY.value = e.clientY;
};

const onMouseEnter = () => {
    isMouseActive.value = true;
};

const onMouseLeave = () => {
    isMouseActive.value = false;
};

onMounted(() => {
    window.addEventListener('mousemove', updateMousePosition);
    window.addEventListener('mouseenter', onMouseEnter);
    window.addEventListener('mouseleave', onMouseLeave);
});

onUnmounted(() => {
    window.removeEventListener('mousemove', updateMousePosition);
    window.removeEventListener('mouseenter', onMouseEnter);
    window.removeEventListener('mouseleave', onMouseLeave);
});
</script>

<template>
    <div
        class="fixed inset-0 -z-50 bg-white dark:bg-zinc-950 [--dot-color:#d4d4d8] dark:[--dot-color:#27272a]"
        id="interactive-bg-root"
    >
        <div class="absolute inset-0" style="-webkit-mask-image: linear-gradient(to bottom, black 50%, transparent 100%); mask-image: linear-gradient(to bottom, black 50%, transparent 100%);">
            <!-- Standard Static Dots -->
            <div
                class="absolute inset-0 pointer-events-none"
                :style="{
                    backgroundImage: `radial-gradient(circle 1px at center, var(--dot-color, #e5e7eb) 1px, transparent 1px)`,
                    backgroundSize: '12px 12px',
                    width: '100%',
                    height: '100%',
                    opacity: 0.8
                }"
            ></div>

            <!-- Interactive Orange Dots (Masked) -->
            <div
                class="absolute inset-0 pointer-events-none transition-opacity duration-300"
                :style="{
                    backgroundImage: 'radial-gradient(circle 1.2px at center, var(--brand-accent, #DE4400) 1.2px, transparent 1.2px)',
                    backgroundSize: '12px 12px',
                    width: '100%',
                    height: '100%',
                    opacity: isMouseActive ? 0.7 : 0,
                    WebkitMaskImage: `radial-gradient(circle 100px at ${mouseX}px ${mouseY}px, black 0%, transparent 100%)`,
                    maskImage: `radial-gradient(circle 100px at ${mouseX}px ${mouseY}px, black 0%, transparent 100%)`
                }"
            ></div>

            <!-- Mouse Glow Effect -->
            <div
                class="absolute inset-0 pointer-events-none transition-opacity duration-300"
                :style="{
                    opacity: isMouseActive ? 1 : 0,
                    background: `radial-gradient(circle 200px at ${mouseX}px ${mouseY}px, color-mix(in srgb, var(--brand-accent, #DE4400) 8%, transparent), transparent 80%)`
                }"
            ></div>
        </div>
    </div>
</template>
