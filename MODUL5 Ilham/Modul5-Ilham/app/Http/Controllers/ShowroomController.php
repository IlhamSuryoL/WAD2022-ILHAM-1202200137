<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomController extends Controller
{
    /** 
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $showrooms = Showroom::all();
        return view('ListCar-Ilham', ['showrooms' => $showrooms]);
    }

    public function detail($id) {
        $detailmobil = Showroom::where('id', $id)->get();
        return view('Detail-Ilham', ['detailmobil' => $detailmobil]);
    }

    public function edit($id) {
        $editmobil = Showroom::where('id', $id)->get();
        return view('Edit-Ilham', ['editmobil' => $editmobil]);
    }

     /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data_gambar = $request->file('foto');
        $data_gambar->move(public_path('asset'), $data_gambar->getClientOriginalName());

        $store = new Showroom;
        $store->name = $request->mobil;
        $store->owner = $request->pemilik;
        $store->brand = $request->merk;
        $store->purchase_date = $request->date;
        $store->description = $request->deskripsi;
        $store->image = $request->foto->getClientOriginalName();
        $store->status = $request->status;
        $store->save();
        return redirect()->route('my-car.index')->with('success','Mobil berhasil ditambahkan!');

    }
}
