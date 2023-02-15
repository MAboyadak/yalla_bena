<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\UserGroup;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index(){
        $userGroups = UserGroup::where('user_id', auth()->id())->with('groups')->get();
        return view('groups.index',compact('userGroups'));
    }
}
