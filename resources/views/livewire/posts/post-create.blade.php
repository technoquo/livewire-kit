<section>
    <form wire:submit="savePost" class="max-w-md mx-auto flex flex-col gap-6 bg-slate-900 p-8 rounded-lg shadow-lg">
        <!-- Title -->
        <flux:input wire:model="form.title" label="Title" type="text" autofocus autocomplete="title" placeholder="Title" />

        <!-- Image -->
        <flux:input wire:model="form.image" label="Image" type="file"   />

        <flux:textarea wire:model="form.content" label="Content" placeholder="Content" rows="5">
          
        </flux:textarea>



        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">Create</flux:button>
        </div>
    </form>
</section>
