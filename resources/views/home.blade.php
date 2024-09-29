<x-layouts.app>
    <header class="flex items-center justify-between max-w-6xl mx-auto">
        <x-logo class="rounded-full"/>
        <nav class="mr-5 text-white">
            <a href="#" class="px-6 py-2 transition duration-300 ease-in-out border-2 border-white border-opacity-50 rounded-full hover:bg-violet-600 hover:border-opacity-100">Sign in</a>
        </nav>
    </header>
    <main class="max-w-6xl mx-auto  h-[80vh]">
        <img class="w-20 h-20" src="{{ Vite::icon('big-calc.svg')}}" alt="">
        <h1> Testing </h1>
    </main>

    <section class="max-full">
        <livewire:boards.public.board-show />
    </section>
    <footer class="flex justify-between max-w-full mx-auto text-white bg-gray-800 h-72">
        <h1> Footer </h1>
    </footer>
</x-layouts.app>
