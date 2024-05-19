<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function post_order(Request $request)
    {
        $post = Post::orderBy('position', 'asc')->get();

        return view('post.post_order', compact('post'));

    }
    public function post_order_change(Request $request)
    {
    $data = $request->input('order');

        foreach ($data as $index => $id) {
            Post::where('id', $id)->update(['position' => $index]);
        }
        return  response()->json([
            'message' => 'Post Order changed successfully.',
            'alert-type' => 'success',
            'data' => $data
        ]);
    //return response()->json(['success' => $data]);
    }


    public function index($status=null, $show_result = null,  $s_query = null )
    {
         if($status == 3) {
            $status = null;
         }else{
            $status = $status;
         }


         if ($show_result == 'all') {
            $show_result = 500000;
         }elseif($show_result == '0'){
            $show_result =8;
         }else{
            $show_result = $show_result;
         }


         if ($s_query == '0') {
            $s_query = null;
         }else{
            $s_query = $s_query;
         }

        //dd($status);
        $post = Post::query();

        if ($s_query !== null || isset($status) || $show_result) {
            $post = $post->where(function($query) use ($status,$s_query) {
                if (isset($status)) {
                    $query->where('status', $status);
                }
                if ($s_query !== null) {
                    $query->where(function($query) use ($s_query) {
                        $query->where('title', 'like', '%'.$s_query.'%')
                              ->orWhere('description', 'like', '%'.$s_query.'%');
                    });
                }
            });
        }


        $post = $post->paginate(intval($show_result));

        return view('post.index', compact('post', 'status','show_result', 's_query'));

       // return view('admin.media.index', compact('post', 's_query'));
    }

    public function delete_multipost(Request $request)
    {
        $ids = $request->ids;
        $post_delete =  Post::whereIn('id', explode(",", $ids))->delete();

        if ($post_delete) {
            return response()->json(
                ['status'=>true,
                'message'=>"Post deleted successfully",
                'message2'=>"Whoops Something went wrong!! Please try again later..."
                ]
            );
        }
    }
}
