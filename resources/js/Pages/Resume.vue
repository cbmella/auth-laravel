<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Header.vue';
import Navbar from '@/Components/Navbar.vue';
import Sidebar from '@/Components/Sidebar.vue';
import Footer from '@/Components/Footer.vue';
import EducationSection from '@/Components/EducationSection.vue';
import ExperienceSection from '@/Components/ExperienceSection.vue';

defineProps({

});

</script>

<template>

    <Head title="Resumen" />

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
                <div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
                    <div class="container sm:px-5 md:px-10 lg:px-14">
                        <div class="py-12 px-4 md:px-0">
                            <h2 class="after-effect after:left-44">Resumen</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-x-6 gap-y-6 mt-[30px]">
                                <EducationSection />
                                <ExperienceSection />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>