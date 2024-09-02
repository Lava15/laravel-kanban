<div 
    wire:sortable="sorted"
    class="flex space-x-6 w-max h-[calc(theme(height.screen)-50px)]"
>
    {{ $board->title}}
    @foreach ($columns as $column)
        <div wire:key="{{ $column->id }}" wire:sortable.item="{{ $column->id }}">
            <livewire:boards.public.board-column :key="$column->id" :column="$column" />
        </div>
    @endforeach
</div>
