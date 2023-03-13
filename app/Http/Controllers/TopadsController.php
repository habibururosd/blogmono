<?php

namespace App\Http\Controllers;

use App\Models\Topads;
use App\Http\Requests\StoreTopadsRequest;
use App\Http\Requests\UpdateTopadsRequest;

class TopadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.top_adv');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(StoreTopadsRequest $request)
    {
        $path = '';
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('top-adv');
        }
        Topads::create([

            'top_ad' => $request->get('top_ad'),
            'top_ad_url' => $request->get('top_ad_url'),
            'top_ad_status' => $request->get('top_ad_status'),
            'image' => $path
        ]);
        return redirect()->route('top-adv.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topads  $topads
     * @return \Illuminate\Http\Response
     */
    public function show(Topads $topads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topads  $topads
     * @return \Illuminate\Http\Response
     */
    public function edit(Topads $topads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopadsRequest  $request
     * @param  \App\Models\Topads  $topads
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopadsRequest $request, Topads $topads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topads  $topads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topads $topads)
    {
        //
    }
}
