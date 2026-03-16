<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ChevronDownIcon } from 'lucide-vue-next';

import {
    Collapsible,
    CollapsibleContent,
    CollapsibleTrigger,
} from '@/components/ui/collapsible';
import {
    SidebarGroup,
    SidebarGroupLabel,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
    SidebarMenuSub,
    SidebarMenuSubItem,
    useSidebar,
} from '@/components/ui/sidebar';
import { useCurrentUrl } from '@/composables/useCurrentUrl';
import type { NavItem } from '@/types';

defineProps<{
    items: NavItem[];
}>();

const { isCurrentUrl } = useCurrentUrl();
const { open, setOpen } = useSidebar();
</script>

<template>
    <SidebarGroup class="px-2 py-0">
        <SidebarGroupLabel>Platform</SidebarGroupLabel>
        <SidebarMenu>
            <template v-for="item in items" :key="item.title">
                <Collapsible
                    v-if="item.children"
                    :default-open="
                        item.children.some(
                            (child) => child.href && isCurrentUrl(child.href),
                        )
                    "
                    class="group/collapsible"
                >
                    <SidebarMenuItem>
                        <CollapsibleTrigger as-child>
                            <SidebarMenuButton
                                class="cursor-pointer justify-between font-normal"
                                @click.prevent="setOpen(true)"
                                :tooltip="item.title"
                            >
                                <div class="flex items-center gap-2">
                                    <component
                                        :is="item.icon"
                                        v-if="item.icon"
                                    />
                                    <span v-show="open">{{ item.title }}</span>
                                </div>
                                <ChevronDownIcon
                                    v-show="open"
                                    class="ml-auto transition-transform duration-200 group-data-[state=open]/collapsible:rotate-180"
                                />
                            </SidebarMenuButton>
                        </CollapsibleTrigger>
                        <CollapsibleContent>
                            <SidebarMenuSub>
                                <SidebarMenuSubItem
                                    v-for="child in item.children"
                                    :key="child.title"
                                >
                                    <SidebarMenuButton
                                        as-child
                                        :is-active="
                                            child.href
                                                ? isCurrentUrl(child.href)
                                                : false
                                        "
                                    >
                                        <Link
                                            v-if="child.href"
                                            :href="child.href"
                                        >
                                            <component
                                                :is="child.icon"
                                                v-if="child.icon"
                                            />
                                            <span>{{ child.title }}</span>
                                        </Link>
                                        <span v-else>
                                            <component
                                                :is="child.icon"
                                                v-if="child.icon"
                                            />
                                            <span>{{ child.title }}</span>
                                        </span>
                                    </SidebarMenuButton>
                                </SidebarMenuSubItem>
                            </SidebarMenuSub>
                        </CollapsibleContent>
                    </SidebarMenuItem>
                </Collapsible>

                <SidebarMenuItem v-else>
                    <SidebarMenuButton
                        as-child
                        :is-active="item.href ? isCurrentUrl(item.href) : false"
                        :tooltip="item.title"
                    >
                        <Link v-if="item.href" :href="item.href">
                            <component :is="item.icon" v-if="item.icon" />
                            <span>{{ item.title }}</span>
                        </Link>
                        <span v-else>
                            <component :is="item.icon" v-if="item.icon" />
                            <span>{{ item.title }}</span>
                        </span>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </template>
        </SidebarMenu>
    </SidebarGroup>
</template>
