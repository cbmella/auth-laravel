<script setup>
import { Link } from '@inertiajs/inertia-vue3';
defineProps({
    work: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <Link :href="route('password.request')">
    <div class="p-5 rounded-lg mb-2 h-full bg-[#fcf4ff] dark:bg-transparent dark:border-[#212425] dark:border-2">
        <div class="overflow-hidden rounded-lg">
            <img class="rounded-lg w-full transition duration-200 ease-in-out transform hover:scale-110"
                :src="work.image ? work.image : 'https://via.placeholder.com/300x200.png?text=No+Image'"
                alt="work image" />
        </div>
        <h3
            class="text-lg font-medium dark:text-white duration-300 transition cursor-pointer mt-3 pr-4 hover:text-[#FA5252] dark:hover:text-[#FA5252]">
            {{ work.post_title }}
        </h3>
    </div>
    </Link>
</template>