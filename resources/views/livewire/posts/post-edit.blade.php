<section>
    <form wire:submit="updatePost" class="max-w-md mx-auto flex flex-col gap-6 bg-slate-900 p-8 rounded-lg shadow-lg">
        <!-- Title -->
        <flux:input wire:model="form.title" label="Title" type="text" autofocus autocomplete="title" placeholder="Title" />

        <!-- Image -->
        <flux:input wire:model="form.image" label="Image" type="file"   />

        <div class="flex gap-2">
            <!-- Show existing post image if no new image is uploaded -->
            @if (!$form->image && $form->post->image)
                <img src="{{ asset($form->post->image) }}" class="w-12 h-12 rounded-2xl">
            @endif
        
            <!-- Show temporary image if a new image is uploaded -->
            @if ($form->image)
                <img src="{{ $form->image->temporaryUrl() }}" class="w-12 h-12 rounded-2xl">
            @endif
        </div>

        <flux:textarea wire:model="form.content" label="Content" placeholder="Content" rows="5">
          
        </flux:textarea>



        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">Update</flux:button>
        </div>
    </form>
</section>
