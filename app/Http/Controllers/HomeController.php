<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Notice $notice)
    {
        $notices = $notice->where('user_id', auth()->user()->id)->get();
        if ($notices){
            $data['notices'] = $notices;
        }

        return view('home')->with($data);
    }

    public function update($idNotice)
    {
        $notice = Notice::find($idNotice);
        $this->authorize('update-post', $notice);

        return view('update-post', compact('notice')) ;
    }
}
