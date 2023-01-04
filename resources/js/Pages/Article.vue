<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Header.vue';
import Navbar from '@/Components/Navbar.vue';
import Sidebar from '@/Components/Sidebar.vue';
import Footer from '@/Components/Footer.vue';
import Article from '@/Components/Article.vue';

defineProps({
    post: Object,
});
</script>

<template>

    <Head title="Blog" />

    <div class="bg-homeBg dark:bg-homeTwoBg-dark min-h-screen bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full">
        <div class="section-bg">
            <Header />
        </div>

        <div class="container grid grid-cols-12 md:gap-10 justify-between lg:mt-[220px]">
            <div class="col-span-12 lg:col-span-4 hidden lg:block h-screen sticky top-44">
                <Sidebar />
            </div>
            <div class="col-span-12 lg:col-span-8">
                <Navbar />
                <section class="bg-white lg:rounded-2xl dark:bg-[#111111]">
                    <div class="container px-4 sm:px-5 md:px-10 lg:px-[60px]">
                        <div class="pb-12 py-12 ">
                            <h2 class="after-effect after:left-32 mt-12 lg:mt-0">Posts</h2>
                            <div class="grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 mt-[30px] grid gap-x-10 gap-y-7 mb-6">
                                <Article :post="post" />
                            </div>
                        </div>
                    </div>
                    <Footer />
                </section>
            </div>
        </div>
    </div>
</template>