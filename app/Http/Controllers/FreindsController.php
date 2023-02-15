<?php

namespace App\Http\Controllers;

use App\Models\Freind;
use App\Http\Requests\StoreFreindsRequest;
use App\Http\Requests\UpdateFreindsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class FreindsController extends Controller
{
    public function index(){
        // $userGroups = UserGroup::where('user_id', auth()->id())->with('groups')->get();
       // $user = User::find(auth()->id());
        return view('friends.friends');
    }

    /**
     * Display a listing of the resource.
     */
//     public function index(): Response
//     {
//        return view('friends.freinds');
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create(): Response
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(StoreFreindsRequest $request): RedirectResponse
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Freinds $freinds): Response
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Freinds $freinds): Response
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(UpdateFreindsRequest $request, Freinds $freinds): RedirectResponse
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Freinds $freinds): RedirectResponse
//     {
//         //
//     }
}
