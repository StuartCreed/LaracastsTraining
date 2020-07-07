<?php

namespace App\Http\Controllers;

class PostsController
{
  public function show($post)
  {

      $posts = [
        'my-first-post' => 'Hello ',
        'my-second-post' => 'Now I am getting the hang of this blogging thing'
      ];

      if (!array_key_exists($post, $posts)) {
        //Use Laravels abort function to abort a page if the slug that is tried does not exist.
        abort(404);
      };

      return view('post',[
        'post' => $posts[$post]
      ]);

  }
}

?>
