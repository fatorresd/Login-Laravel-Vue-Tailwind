// filepath: /Users/fatorresdz/Desktop/FullStack-Ruta/PHP/Prueba_Fullstack/login-job-oportunity/resources/js/components/WelcomeComponent.vue
<template>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-4xl font-extrabold mb-6 text-center text-gray-900">Bienvenido!!</h1>
            <p class="text-lg text-gray-700 mb-6 text-center">
                Por favor, seleccione una opción para continuar :D !!!
            </p>
            <div class="flex flex-col space-y-4">
                <a href="/login" class="w-full text-center py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">
                    Login
                </a>
                <a href="/register" class="w-full text-center py-2 px-4 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300">
                    Register
                </a>
                <a href="/admin/login" class="w-full text-center py-2 px-4 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">
                    Admin Login (Beta, ya que al entrar no se puede ir al menu de config, pero por temas de tiempo no se pudo corregir, lo corregire en mi repo!)
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'WelcomeComponent'
};
</script>