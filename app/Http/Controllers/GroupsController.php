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
        $request->validate([
         'name'=>'required'
        ]);
        $group=Group::create($request->all());

        DB::table('group_user')->insert(['user_id' => auth()->id(),'group_id' => $group->id]);
        return to_route('groups.index' );
    }

    public function destroy(Group $group)
    {
        //
        // $id=$group->group_id;
        // DB::table('groups')->delete($id);
        $group->delete();
        return to_route("groups.index");
    }
}
