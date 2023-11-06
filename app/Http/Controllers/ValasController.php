<?php

namespace App\Http\Controllers;

use App\Models\Valas;
use Illuminate\Http\Request;

class ValasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $valas = Valas::latest()->paginate(5);
        return view('pages.valas.index', compact('valas'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.valas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Valas::create($request->all());
            return redirect()->route('valas.index')->with('success','Successfully to create new valas');
        } catch (\Throwable $th) {
            return redirect()->route('valas.index')->with('error',$th->getMessage());
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
    public function edit(Request $request , string $id)
    {
        $valas =  Valas::where('valas_id',$id)->firstOrFail();
        if($valas){
            return view('pages.valas.edit',compact('valas'));
        }else{
            return redirect()->route('valas.index')->with('error','Valas not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Valas::where('valas_id',$id)->update([
            'nama_valas'=> $request->nama_valas,
            'nilai_jual'=> $request->nilai_jual,
            'nilai_beli'=> $request->nilai_beli,
            'tanggal_rate'=> $request->tanggal_rate
        ]);

        return redirect()->route('valas.index')->with('success','Successfully update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Valas::where('valas_id',$id)->delete();

        return redirect()->route('valas.index')->with('success','Successfully delete data');
    }
}
