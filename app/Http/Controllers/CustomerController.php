<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::latest()->paginate(5);
        return view('pages.customer.index', compact('customer'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Customer::create($request->all());
            return redirect()->route('customer.index')->with('success','Successfully to create new customer');
        } catch (\Throwable $th) {
            return redirect()->route('customer.index')->with('error',$th->getMessage());
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
        $customer =  Customer::where('customer_id',$id)->firstOrFail();
        if($customer){
            return view('pages.customer.edit',compact('customer'));
        }else{
            return redirect()->route('customer.index')->with('error','Customer not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Customer::where('customer_id',$id)->update([
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'tipe_member'=> $request->tipe_member,
        ]);

        return redirect()->route('customer.index')->with('success','Successfully update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::where('customer_id',$id)->delete();

        return redirect()->route('customer.index')->with('success','Successfully delete data');
    }
}
