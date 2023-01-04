<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Carousel from '@/Components/Carousel.vue';
import Header from '@/Components/Header.vue';
import Navbar from '@/Components/Navbar.vue';
import Sidebar from '@/Components/Sidebar.vue';
import WhatIdo from '@/Components/WhatIdo.vue';
import Footer from '@/Components/Footer.vue';

defineProps({

});
</script>

<template>

    <Head title="About" />

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
                <div>
                    <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
                        <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                            <Sidebar class="lg:hidden" />
                            <h2 class="after-effect after:left-52">Sobre mí</h2>
                            <div class="lg:grid grid-cols-12 md:gap-10 pt-4 md:pt-[30px] items-center hidden">
                                <div class="col-span-12 space-y-2.5">
                                    <div class="lg:mr-16">
                                        <p class="text-[#44566c] dark:text-color-910 leading-7">Soy Cesar Bugueño Mella,
                                            un ingeniero en informática con más de 5 años de experiencia en desarrollo
                                            web. Soy un desarrollador full-stack versátil y tengo la capacidad de
                                            resolver problemas de manera eficiente. He trabajado en varias empresas,
                                            implementando soluciones que han mejorado significativamente su eficiencia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <WhatIdo />

                        <div class="px-2 sm:px-5 md:px-10 lg:px-14">
                            <div class="bg-[#F8FBFB] dark:bg-[#0D0D0D] max-w-full h-auto py-10 rounded-xl">
                                <h3 class="text-center dark:text-white text-3xl mb-3 font-semibold"> Clients </h3>
                                <Carousel />
                            </div>
                        </div>
                        <Footer />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>