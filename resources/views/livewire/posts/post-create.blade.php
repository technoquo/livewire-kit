<section>
    <form wire:submit="savePost" class="max-w-md mx-auto flex flex-col gap-6 bg-slate-900 p-8 rounded-lg shadow-lg">
        <!-- Title -->
        <flux:input wire:model="form.title" label="Title" type="text" autofocus autocomplete="title" placeholder="Title" />

        <!-- Image -->
        <flux:input wire:model="form.image" label="Image" type="file"   />

        <div>
            @if ($form->image)
                <img src="{{ $form->image->temporaryUrl() }}" class="w-12 h-12 rounded-full">
            @endif
        </div>

        <flux:textarea wire:model="form.content" label="Content" placeholder="Content" rows="5">
          
        </flux:textarea>



        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">Create</flux:button>
        </div>
    </form>
</section>
