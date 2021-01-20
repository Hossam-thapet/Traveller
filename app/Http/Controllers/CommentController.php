<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->paginate(5);

        return view('tours.comment',compact('comments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('tours.comment');
    }


    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'useremail' => 'required',

        ]);

        $from_data=array(
            'comment'=>$request->comment,
            'useremail'=>$request->useremail,
        );
        Comment::create($from_data);

        return redirect()->back()
            ->with('success','Comment created successfully.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }

}
