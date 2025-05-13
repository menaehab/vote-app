<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index($slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        $cs = Vote::where('user_id', $user->id)->where('choice', 'cs')->count();
        $ai = Vote::where('user_id', $user->id)->where('choice', 'ai')->count();
        $it = Vote::where('user_id', $user->id)->where('choice', 'it')->count();
        return view('pages.votes',compact('user','cs','ai','it'));
    }

    public function store(Request $request,$slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        $data = $request->validate([
            'choice' => 'required|in:cs,ai,it',
            ]);
        Vote::updateOrCreate(
            [
                'user_id' => $user->id,
                'ip_address' => $request->ip(),
            ],[
                'user_id' => $user->id,
                'choice' => $data['choice'],
                'ip_address' => $request->ip(),
            ]);
        return redirect()->back();
    }
}
