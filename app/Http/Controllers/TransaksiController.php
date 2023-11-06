<?php

namespace App\Http\Controllers;


use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::latest()->paginate(5);
        return view('pages.transaksi.index', compact('transaksi'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Transaksi::create($request->all());
            return redirect()->route('transaksi.index')->with('success','Successfully to create new transaksi');
        } catch (\Throwable $th) {
            return redirect()->route('transaksi.index')->with('error',$th->getMessage());
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
        $transaksi =  Transaksi::where('transaksi_id',$id)->firstOrFail();
        if($transaksi){
            return view('pages.transaksi.edit',compact('transaksi'));
        }else{
            return redirect()->route('transaksi.index')->with('error','Transaksi not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Transaksi::where('transaksi_id',$id)->update([
            'no_transaksi'=> $request->no_transaksi,
            'nama_customer'=> $request->nama_customer,
            'tgl_transaksi'=> $request->tgl_transaksi,
            'diskon'=> $request->diskon,
        ]);

        return redirect()->route('transaksi.index')->with('success','Successfully update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Transaksi::where('transaksi_id',$id)->delete();

        return redirect()->route('transaksi.index')->with('success','Successfully delete data');
    }
}
