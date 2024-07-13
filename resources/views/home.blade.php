<x-layouts.app>
    <header class="flex justify-between max-w-6xl mx-auto bg-green-200">
        <h1> LOGO </h1>
        <nav>
            <a href="#"> Home </a>
            <a href="#"> About </a>
            <a href="#"> Contact </a>
        </nav>
    </header>
    <main class="max-w-6xl mx-auto bg-indigo-400 h-[80vh]">
        <h1> Testing </h1>
    </main>

    <section class="p-6 mx-auto overflow-x-scroll bg-yellow-200 max-full">
        <livewire:boards.public.board-show />
    </section>
    <footer class="flex justify-between max-w-6xl mx-auto bg-red-200 h-72">
        <h1> Footer </h1>
    </footer>

</x-layouts.app>
