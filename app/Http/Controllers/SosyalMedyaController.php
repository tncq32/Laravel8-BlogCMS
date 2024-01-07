<?php

namespace App\Http\Controllers;

use App\Models\SosyalMedya;
use Illuminate\Http\Request;

class SosyalMedyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sosyalMedya = SosyalMedya::first();
        return view('admin.sosyalmedya', ['sosyalmedya' => $sosyalMedya]);

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sosyalMedya = SosyalMedya::first();

        if (!$sosyalMedya) {
            // Veritabanında kayıt yoksa, yeni bir kayıt oluştur
            SosyalMedya::create($request->all());
        } else {
            // Var olan veriyi güncelle, ancak boş bırakılan alanları kontrol et
            $data = array_filter($request->all(), function ($value) {
                return $value !== null;
            });

            $sosyalMedya->update($data);
        }

        return redirect()->back()->with('success', 'Sosyal medya linkleri güncellendi.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
