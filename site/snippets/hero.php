<div x-data="{ visible: false }" class="relative overflow-hidden">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
        <div class="relative h-full max-w-7xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
            </svg>
        </div>
    </div>

    <div class="relative pt-6 pb-16 sm:pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="https://github.com/Diverently/anotherkit" class="text-xl font-bold text-purple-600">
                            Anotherkit
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button x-on:click="visible = !visible" type="button" class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500" id="main-menu" aria-haspopup="true">
                                <span class="sr-only">Open main menu</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden md:flex md:space-x-10">
                    <a href="https://github.com/Diverently/anotherkit" class="font-medium text-gray-500 hover:text-gray-900">Anotherkit</a>
                    <a href="https://getkirby.com/" class="font-medium text-gray-500 hover:text-gray-900">Kirby</a>
                    <a href="https://github.com/alpinejs/alpine#readme" class="font-medium text-gray-500 hover:text-gray-900">Alpine</a>
                    <a href="https://tailwindcss.com/docs" class="font-medium text-gray-500 hover:text-gray-900">Tailwind</a>
                </div>
                <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                    <span class="inline-flex rounded-md shadow">
                        <a href="https://heroicons.com/" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-purple-600 bg-white hover:bg-gray-50">
                            Heroicons
                        </a>
                    </span>
                </div>
            </nav>
        </div>

        <div x-show.transition.opacity.scale="visible" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-purple-600.svg" alt="">
                    </div>
                    <div class="-mr-2">
                        <button x-on:click="visible = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                    <div class="px-2 pt-2 pb-3" role="none">
                        <a href="https://github.com/Diverently/anotherkit" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Anotherkit</a>
                        <a href="https://getkirby.com/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Kirby</a>
                        <a href="https://tailwindcss.com/docs" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Tailwind</a>
                        <a href="https://github.com/alpinejs/alpine#readme" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Alpine</a>
                    </div>
                    <div role="none">
                        <a href="https://heroicons.com/" class="block w-full px-5 py-3 text-center font-medium text-purple-600 bg-gray-50 hover:bg-gray-100" role="menuitem">
                            Heroicons
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <main class="mt-16 mx-auto max-w-3xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Get up and running with</span>
                    <span class="block text-purple-600 xl:inline">Kirby, Tailwind and Alpine</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-2xl">
                    Anotherkit is brought to you by <a href="https://diverently.com">Diverently</a>. Feel free to contribute to the project on GitHub.
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    <div class="rounded-md shadow">
                        <a href="https://github.com/Diverently/anotherkit" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 whitespace-nowrap hover:bg-purple-700 md:py-4 md:text-lg md:px-10">
                            Anotherkit Repo
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="https://diverently.com" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-purple-600 bg-white whitespace-nowrap hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                            Diverently Website
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
