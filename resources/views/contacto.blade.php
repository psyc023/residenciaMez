<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">MEZCAL ARTESANAL ESPINA NEGRA ES </h1>
                <p class="mb-6 max-w-2xl font-extrabold text-green-800 lg:mb-8 md:text-lg lg:text-4xl dark:text-green-400">UNA BEBIDA RICA EN TODOS SUS ASPECTOS </p>
                <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-x2 dark:text-gray-400">DESDE SANTA ANA DEL RIO, OAXACA.</p>
        
                <a href="/" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-green-900 hover:bg-lime-600 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-green-900 dark:focus:ring-green-800">
                    COMPRAR
                </a> 
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                  <img src="/img/hp-1.png" alt="mockup">
            </div>                
        </div>
    </section>

    <section class="bg-gray-900 dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-100 sm:text-lg dark:text-gray-400">
                <h1 class="mb-4 text-4xl font-extrabold text-lime-500 dark:text-white"> VARIEDAD DE SABORES AROMAS Y TEXTURAS</h1>
                <p class="mb-4">
                    NOTAS FRESCAS, HERBALES, DULCES, ,CITRICAS, AROMAS Y TEXTURAS.
                </p>
                <p>
                AGAVES EXTRAVAGANTES DE SABOR EXOTICOS
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4 mt-8">
                 <<img src="/img/hp-2.png" alt="mockup">
            </div>
        </div>
    </section>

     <section class="bg-white dark:bg-gray-900">
        <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
             <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                 <img src="/img/hp-elab-a.png" alt="mockup">
            </div>  
            <div class="place-self-center mr-auto lg:col-span-7">
                 <img src="/img/elab-8-env-emb.png" alt="mockup">
            </div>
                         
        </div>
    </section>

    <section class="bg-black dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-100 dark:text-white">ESPINA NEGRA</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">ORIGINADO DE SANTA ANA DEL RIO, OAXACA</p></div>
        </div>
    </section>

</x-app-layout>