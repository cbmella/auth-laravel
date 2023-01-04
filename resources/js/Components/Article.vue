<script setup>
import { Link } from '@inertiajs/inertia-vue3';
defineProps({
    post: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <div class="p-5 rounded-lg mb-2 h-full  dark:border-[#212425] dark:border-2">
        <div class="overflow-hidden rounded-lg">
            <img class="rounded-lg w-full transition duration-200 ease-in-out transform hover:scale-110"
                :src="post.image ? post.image : 'https://via.placeholder.com/300x200.png?text=No+Image'"
                alt="blog image" />
        </div>
        <h2 class="dark:text-white sm:text-3xl mt-5 font-medium"> {{ post.post_title }}</h2>
        <div class="text-justify my-5" v-html="post.post_content"></div>
    </div>
</template>