<div class="bg-white shrink-0 self-start rounded-lg shadow-sm max-h-full w-[260px]">
    <div class="flex items-center justify-between">
        <div
         x-data="{editing: false}"
         class="flex items-center w-full h-8 min-w-0 px-4 pr-0"
         x-on:click.outside="editing = false"
         >
          <button class="w-full text-left"
           x-on:click="editing = true"
           x-show="!editing"
           >
           title
           </button>
           <template x-if="editing">
                <form class="-ml-[calc(theme(margin[1.5]) - 1px] grow"> 
                    <x-text-input value="title" class="h-8 px-1.5 w-full"/> 
                </form>
           </template>
        </div>
        <div class="px-3.5 py-3">
            <x-dropdown>
                <x-slot name="trigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </x-slot>
                
                <x-slot name="content">
                    Content
                </x-slot>

            </x-dropdown>
        </div>
    </div>
    <div>cards</div>
    <div>add card</div>
</div>
