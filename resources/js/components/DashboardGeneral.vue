// filepath: /Users/fatorresdz/Desktop/FullStack-Ruta/PHP/Prueba_Fullstack/login-job-oportunity/resources/js/components/DashboardGeneral.vue
<template>
    <div class="p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
        <p class="text-gray-700 mb-4">Bienvenido al panel de control.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Estadísticas</h2>
                <p class="mt-2">Aquí puedes ver tus estadísticas.</p>
            </div>
            <div class="bg-green-500 text-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Tareas</h2>
                <p class="mt-2">Aquí puedes ver tus tareas.</p>
            </div>
            <div class="bg-red-500 text-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Mensajes</h2>
                <p class="mt-2">Aquí puedes ver tus mensajes.</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'DashboardGeneral'
};
</script>
