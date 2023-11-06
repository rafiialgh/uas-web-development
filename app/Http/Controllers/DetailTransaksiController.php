<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        $detailTransaksi = DetailTransaksi::latest()->paginate(5);
        return view('pages.detailTransaksi.index', compact('detailTransaksi'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.detailTransaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DetailTransaksi::create($request->all());
            return redirect()->route('detailTransaksi.index')->with('success','Successfully to create new detail transaksi');
        } catch (\Throwable $th) {
            return redirect()->route('detailTransaksi.index')->with('error',$th->getMessage());
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
        $detailTransaksi =  DetailTransaksi::where('detail_id',$id)->firstOrFail();
        if($detailTransaksi){
            return view('pages.detailTransaksi.edit',compact('detailTransaksi'));
        }else{
            return redirect()->route('detailTransaksi.index')->with('error','Detail transaksi not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DetailTransaksi::where('detail_id',$id)->update([
            'transaksi_id'=> $request->transaksi_id,
            'nama_valas'=> $request->nama_valas,
            'rate'=> $request->rate,
            'qty'=> $request->qty,
        ]);

        return redirect()->route('detailTransaksi.index')->with('success','Successfully update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DetailTransaksi::where('detail_id',$id)->delete();

        return redirect()->route('detailTransaksi.index')->with('success','Successfully delete data');
    }
}
