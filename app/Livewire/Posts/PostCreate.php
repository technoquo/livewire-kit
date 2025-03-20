<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\Posts\PostForm;

class PostCreate extends Component
{
   use WithFileUploads;
   public PostForm $form;



   public function savePost()
    {
         $this->form->store();
         session()->flash('message', 'Post created successfully');
         return redirect()->to('/posts');
        
    }
    
    
    public function render()
    {
        return view('livewire.posts.post-create');
    }
}
