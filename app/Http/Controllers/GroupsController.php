<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGroupsRequest;
use Illuminate\Support\Facades\DB;
class GroupsController extends Controller
{
    public function index(){
        // $userGroups = UserGroup::where('user_id', auth()->id())->with('groups')->get();
        $user = User::find(auth()->id());
        return view('groups.index',compact('user'));
    }

    public function store(StoreGroupsRequest $request){
        $group=Group::create($request->all());

        DB::table('group_user')->insert(['user_id' => auth()->id(),'group_id' => $group->id]);
        return to_route('groups.index' );
    }

    public function destroy(Group $group)
    {
        //
        $group->delete();
        return to_route("groups.index");
    }
}
