<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Page;
use App\Models\User;

class PageController extends Controller
{
    public function show(User $user)
    {
        // $pages = DB::table('pages')->get('user_id=Auth::user()->id');
        // $pages = Page::where('user_id','=','Auth::user()->id');

        return view('pages.show', compact('user'));
    }
    public function showOnePage(Page $page)
    {
        
        return view('pages.showOnePage', compact('page'));
    }
    public function store(Request $request,User $user)
    {
        $page = new Page;
        $page->title = $request->title;
        // $page->user_id = $user->id;
        $user->pages()->save($page);
        $page->save();

        return back();
    }

    public function delete(Page $page)
    {
        if(count($page->notes))
        {
            return view('pages.deleteall', compact('page'));
        }
        else
        {
            $page->delete();

            return back();
        }
    }

    public function deleteall(User $user,Page $page)
    {
        $user_id = $user->id;
        $page->delete();
        $page->notes()->delete();

        return redirect('../../userpages/'.$user_id);
    }
}
