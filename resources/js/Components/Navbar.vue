<script setup>
import { onMounted } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const menuLinks = [
  {
    name: 'Sobre mí',
    icon: 'fa-regular fa-user',
    path: 'sobre-mi',
    class: 'menu-active'
  },
  {
    name: 'Resumen',
    icon: 'fa-regular fa-file-lines',
    path: 'resumen',
    class: 'menu-item'
  },
  {
    name: 'Trabajos',
    icon: 'fas fa-briefcase',
    path: 'trabajos',
    class: 'menu-item'
  },
  {
    name: 'Blog',
    icon: 'fa-brands fa-blogger',
    path: 'blog',
    class: 'menu-item'
  },
  /* {
    name: 'Contacto',
    icon: 'fa-solid fa-address-book',
    path: 'contacto',
    class: 'menu-item'
  } */
];

onMounted(() => {
  mobileMenu();
});

const mobileMenu = () => {
  const menuOpen = document.getElementById("menu-toggle-open-icon");
  const menuClose = document.getElementById("menu-toggle-close-icon");
  const navbar = document.getElementById("navbar");
  const menuToggleBtnTwo = document.getElementById("menu-toggle-two");
  const menuToggleBtn = document.getElementById("menu-toggle");

  menuToggleBtn?.addEventListener("click", () => {
    navbar.classList.toggle("hidden");
    menuOpen.classList.toggle("hidden");
    menuClose.classList.toggle("hidden");
  });
  menuToggleBtnTwo?.addEventListener("click", () => {
    navbar.classList.toggle("hidden");
    menuOpen.classList.toggle("hidden");
    menuClose.classList.toggle("hidden");
  });

};
</script>

<template>
  <header
    class="lg:w-[460px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white dark:bg-[#111111]">
    <nav class="hidden lg:block">
      <ul class="flex">
        <li v-for="link in menuLinks" :key="link.name">
          <Link :href="route(link.path)" :class="link.path === route().current() ? 'menu-active' : 'menu-item'">
          <span class="text-xl mb-1">
            <i :class="link.icon"></i>
          </span> {{ link.name }}
          </Link>
        </li>
      </ul>
    </nav>
  </header>

  <!-- mobile menu start -->
  <nav id="navbar" class="hidden lg:hidden">
    <ul
      class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
      <li v-for="link in menuLinks" :key="link.name">
        <a :href="route(link.path)" :class="link.path === route().current() ? 'mobile-menu-items-active' : 'mobile-menu-items'">
          <span class="mr-2 text-xl">
            <i :class="link.icon"></i>
          </span> {{ link.name }}
        </a>
      </li>
    </ul>
  </nav>
  <!-- mobile menu end -->
</template>