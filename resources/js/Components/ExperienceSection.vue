<script setup>
const experiencias = [
    { ano: 'Actualidad', empresa: 'Freelance', puesto: 'Diseño, Desarrollo e implementación de sistemas informáticos' },
    { ano: '2020-2023', empresa: 'EUROPA PRESS', puesto: 'Desarrollador de aplicaciones web' },
    { ano: '2019-2020', empresa: 'GUX', puesto: 'Desarrollador de aplicaciones web' },
    { ano: '2018-2019', empresa: 'BINDEX', puesto: 'Desarrollador de aplicaciones web' }
];
</script>

<template>
    <div>
        <div class="flex items-center space-x-2 mb-4">
            <i class="fa-solid text-3xl text-[#F95054] fa-briefcase"></i>
            <h4 class="text-3xl dark:text-white font-medium"> Experiencia </h4>
        </div>
        <div class="py-4 pl-5 pr-3 space-y-2 mb-6 rounded-lg bg-[#eef5fa] dark:bg-transparent dark:border-[#212425] dark:border-2"
            v-for="experiencia in experiencias" :key="experiencia.empresa">
            <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">{{ experiencia.ano }}</span>
            <h3 class="text-xl dark:text-white"> {{ experiencia.empresa }} </h3>
            <p class="dark:text-[#b7b7b7]"> {{ experiencia.puesto }} </p>
        </div>
    </div>
</template>