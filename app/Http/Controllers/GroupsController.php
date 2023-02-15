<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\UserGroup;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index(){
        $groups = UserGroup::where('user_id', auth()->id())->get();
        // dd($groups);
        return view('groups.index',compact('groups'));
    }
}
