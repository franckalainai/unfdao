<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use App\User;
use App\Tag;

class BlogController extends Controller
{
    protected $limit = 3;

    public function index()
    {
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("blog.index", compact('posts'));
    }

    public function archives(Post $post)
    {
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("blog.archives", compact('posts'));
    }

    public function search()
    {
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("blog.search", compact('posts'));
    }

    public function category(Category $category)
    {
        $categoryName = $category->title;

        $posts = $category->posts()
                          ->with('author', 'tags', 'comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("blog.index", compact('posts', 'categoryName'));
    }

    public function tag(Tag $tag)
    {
        $tagName = $tag->title;

        $posts = $tag->posts()
                          ->with('author', 'category', 'comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("blog.index", compact('posts', 'tagName'));
    }

    public function author(User $author)
    {
        $authorName = $author->name;

        $posts = $author->posts()
                          ->with('category', 'tags', 'comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("blog.index", compact('posts', 'authorName'));
    }

    public function show(Post $post)
    {
        $related= Post::where('category_id', '=', $post->category->id)
            ->where('id', '!=', $post->id)
            //->paginate(3)
            ->simplePaginate(3);
            //->get();
        $post->increment('view_count');

        $postComments = $post->comments()->simplePaginate(3);
        

        //$archives = Post::archives();

        return view("blog.show", compact('post', 'postComments', 'related'));
    }
}
