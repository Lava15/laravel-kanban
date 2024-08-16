<div class="flex space-x-6 w-max h-[calc(theme(height.screen)-50px)]">
    {{ $board->title}}
    @foreach (range(1, 10) as $column)
        <livewire:boards.public.board-column />
    @endforeach
</div>
