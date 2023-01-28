<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use Carbon\Carbon;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $test = DB::connection('mysql')->table('suppliers')->get();
        return response()->json($test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        $this->validate($request, [
            'harga' => 'required',
            'status'=>'required',
        ]);

        $request['created_at'] = $timestamp;
        $request['updated_at'] = $timestamp;

        $query = DB::connection('mysql')->table('suppliers')->insert($request->all());
        return response()->json('Berhasil ditambahkan', 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $query = DB::connection('mysql')->table('suppliers')->find($id);
        if ($query == NULL){
            return response()->json('Data tidak ditemukan', 404);
        } else {
            return response()->json($query, 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
        $query = DB::connection('mysql')->table('suppliers')->where('supplier', $supplier)->get();
        return response()->json(' EDIT $query', 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $query = DB::connection('mysql')->table('suppliers')->find($id);
        if ($query == NULL){
            return response()->json('Data tidak ditemukan', 404);
        } else {
            $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            $request['updated_at'] = $timestamp;
            $query = DB::connection('mysql')->table('suppliers')->where('id', $id)->update($request->all());
            return response()->json('Berhasil Update Data', 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $query = DB::connection('mysql')->table('suppliers')->find($id);
        if ($query == NULL){
            return response()->json('Data tidak ditemukan', 404);
        } else {
            $result = DB::connection('mysql')->table('suppliers');
            $result->find($id);
            $result->delete($id);
            return response()->json('Data Berhasil di Hapus!', 200);
        }
    }
}
