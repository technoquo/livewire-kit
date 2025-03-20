<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class PostIndex extends Component
{
   

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        Storage::disk('public')->delete($post->image);
        $post->delete();       
        session()->flash('message', 'Post deleted successfully');
    }


    public function render()
    {
        return view('livewire.posts.post-index', [
            'posts' => auth()->user()->posts()->latest()->get(),
        ]);
    }
}
