<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
        //$postsFromDB = DB::table('posts')->get();
        $postsFromDB = DB::table('posts')->select('title', 'message as text')->get();

        /* Likes are not supported
        $posts = DB::table('posts')->where('likes', 100)->get();
        $posts = DB::table('posts')->where('likes', '>', 100)->get();
        $posts = DB::table('posts')->where('likes', '!=', 100)->get();
        $posts = DB::table('posts')
		->where('likes', '>', 10)
		->where('likes', '<', 20)
		->get();
        $posts = DB::table('posts')
		->where('id', '=', 10)
		->orWhere('likes', '>', 10)
		->get();
        $posts = DB::table('posts')
		->where('id', '=', 3)
		->orWhere(function($query) {
			$query
				->where('likes', '>', 10)
				->where('likes', '<', 50);
		})
	->get();
        $post = DB::table('posts')->where('id', 1)->first();
        */
        /* Some worked queries.
        $title = DB::table('posts')->where('id', '1')->value('title');
        echo $title;
        $titles = DB::table('posts')->pluck('title');
        dump($titles);
        $titles = DB::table('posts')->pluck('title');

        foreach ($titles as $title) {
            echo $title;
        }

        $titles = DB::table('posts')
            ->where('id', '>', '3')
            ->pluck('title');

        dump($titles);
        */
        /* Query logging
        DB::enableQueryLog();
        DB::table('posts')->where('id', '>', 5)->get();
        dump(DB::getQueryLog());

        $query = DB::table('posts')->where('id', '>', 5)->toSql();
        dump($query);


        DB::table('posts')->where('id', '>', 5)->dump();
        */
        //DB::table('posts')->where('id', '>', 5)->dd();

        $posts = [
            1 => 'текст 1',
            2 => 'текст 2',
            3 => 'текст 3',
            4 => 'текст 4',
            5 => 'текст 5',
        ];

        return view('post.show', ['post_text' => $posts[$id], 'title' => 'page title', 'arr' => [1, 2],
            'isAuth' => false, 'num' => 2, 'arr1' => [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
            'posts' => $postsFromDB]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
