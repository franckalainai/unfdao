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

        return view("blog.index", compact('posts'))
        ->with('actualites', Category::find(7))
        ->with('discours', Category::find(11))
        ->with('federation', Category::find(12))
        ;
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

    public function membres(Post $post)
    {
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("blog.membres", compact('posts'))->with('membres', Category::find(6));
    }

    public function actualites(Post $post)
    {
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("blog.actualites", compact('posts'))->with('actualites', Category::find(7));
    }

    public function events(Post $post)
    {
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("blog.events", compact('posts'))->with('events', Category::find(8));
    }

    public function projets(Post $post)
    {
        $posts = Post::with('author', 'tags', 'category', 'comments')
                    ->latestFirst()
                    ->published()
                    ->filter(request()->only(['term', 'year', 'month']))
                    ->simplePaginate($this->limit);

        return view("blog.projets", compact('posts'))->with('projets', Category::find(9));
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
