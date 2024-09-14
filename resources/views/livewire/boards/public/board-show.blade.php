<div 
    wire:sortable="sorted"
    wire:sortable-group="moved"
    class="flex space-x-6 w-max h-[calc(theme(height.screen)-50px)]"
>
    {{ $board->title}}
    @foreach ($columns as $column)
        <div wire:key="{{ $column->id }}" wire:sortable.item="{{ $column->id }}">
            <livewire:boards.public.board-column :key="$column->id" :column="$column" />
        </div>
    @endforeach
    
    <div
        x-data="{ adding: false }"
        x-on:column-created.window="adding = false"
    >
        <template x-if="adding">
            <form 
                wire:sumbit="createColumn"
                class= "px-4 py-3 bg-white rounded-lg shadow-sm w-[260px]"
            > 
                <div>
                    <label for="title" value="Title" class="sr-only">Column Title</label>
                    <x-text-input wire:model="createColumnForm.title" id="title" placeholder="Column Title" 
                        x-init="$el.focus()"
                    />
                    {{-- <x-input-error :messages="$errors->get('createColumnForm.title')" class="mt-2" /> --}}
                </div>
                <div class="flex items-center mt-2 space-x-2">
                    <button>Add</button>
                    <button 
                         type="button"
                         class="text-sm text-gray-500"
                         x-on:click="adding = false"
                     >Cancel</button>
                </div>
            </form>   
        </template>
        <button x-show="!adding" x-on:click="adding = true" class="flex items-center px-4 py-3 space-x-1 bg-gray-200 rounded-lg shadow-sm w-[260px]"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
            <span>Add a column</span>
        </button>
    </div>
</div>
