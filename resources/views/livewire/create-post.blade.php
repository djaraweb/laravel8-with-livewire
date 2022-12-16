<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Create New Post {{ $open }}
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">New Post</x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Title Post" />
                <x-jet-input type="text" class="w-full" wire:model.defer="title" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Content" />
                <textarea type="textarea" rows="6" class="form-control w-full" wire:model.defer="content"></textarea>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancel
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-3" wire:click="savePost">
                Create Post
            </x-jet-danger-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>
