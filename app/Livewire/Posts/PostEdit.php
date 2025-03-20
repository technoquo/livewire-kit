<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\Posts\PostForm;
use App\Models\Post;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class PostEdit extends Component
{
    use WithFileUploads;
    public PostForm $form;


    public function mount(Post $post)
    {
        $this->form->setPost($post);
    }


    public function updatePost()
    {
        $this->form->update();
        session()->flash('message', 'Post updated successfully');
        return  redirect()->to(route('posts.index'));
    }


    public function render()
    {
        return view('livewire.posts.post-edit');
    }
}
