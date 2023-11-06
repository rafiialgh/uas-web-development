<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membership = Membership::latest()->paginate(5);
        return view('pages.membership.index', compact('membership'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.membership.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Membership::create($request->all());
            return redirect()->route('membership.index')->with('success','Successfully to create new membership');
        } catch (\Throwable $th) {
            return redirect()->route('membership.index')->with('error',$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $membership =  Membership::where('membership_id',$id)->firstOrFail();
        if($membership){
            return view('pages.membership.edit',compact('membership'));
        }else{
            return redirect()->route('membership.index')->with('error','Membership not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Membership::where('membership_id',$id)->update([
            'nama'=> $request->nama,
            'diskon'=> $request->diskon,
            'minimum_profit'=> $request->minimum_profit,
        ]);

        return redirect()->route('membership.index')->with('success','Successfully update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Membership::where('membership_id',$id)->delete();

        return redirect()->route('membership.index')->with('success','Successfully delete data');
    }
}
