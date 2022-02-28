<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function index()
    {
        $customers =  DB::table('customers')->get();
        return view('customer.index',compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $data = $request->only('name','phone','address','email');
        DB::table('customers')->insert($data);
        return redirect()->route('customer.index');
    }

    public function show($id)
    {
        $customer = DB::table('customers')->where('id',$id)->first();
        return view('customer.detail',compact('customer'));
    }

    public function edit($id)
    {
        $customer = DB::table('customers')->where('id',$id)->first();
        return view('customer.edit',compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only('name','phone','address','email');
        DB::table('customers')->where('id',$id)->update($data);
        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        DB::table('customers')->where('id',$id)->delete();
        return redirect()->route('customer.index');
    }
}
