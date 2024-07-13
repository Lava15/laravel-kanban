<div class="flex space-x-6 w-max h-[calc(theme(height.screen)-50px)]">
    @foreach (range(1, 10) as $item )
        <livewire:boards.public.board-column />
    @endforeach
</div>
