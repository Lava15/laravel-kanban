<div class="bg-white shrink-0 self-start rounded-lg shadow-sm max-h-full w-[260px]">
    <div class="flex items-center justify-between">
        <div class="flex items-center w-full h-8 min-w-0 px-4 pr-0">
          <button class="w-full text-left">title</button>
        </div>
        <div class="px-3.5 py-3">
            <x-dropdown>
                <slot name="trigger">
                    button
                </slot>
            </x-dropdown>
        </div>
    </div>
    <div>cards</div>
    <div>add card</div>
</div>
