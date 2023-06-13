<!--Navigation Links -->
<div class="hidden space-x-8 sm:-my-px sm:m1-10 sm:flex">
<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"> 
        {{__('Dashboard')}}
    </x-nav-link>

<!--Añadimos la navegación a projects-->
<div class="hidden space-x-8 sm:-my-px sm:m1-10 sm:flex">
<x-nav-link :href="route('project.index')" :active="request()->routeIs('project.index')">    
         {{__('Proyectos')}}
    </x-nav-link>
</div>
