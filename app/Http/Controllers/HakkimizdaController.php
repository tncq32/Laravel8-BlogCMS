<?php

namespace App\Http\Controllers;

use App\Models\Hakkımızda;
use App\Models\SosyalMedya;
use Illuminate\Http\Request;

class HakkimizdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sosyalmedya = SosyalMedya::first();
        $hakkimizda = Hakkımızda::first(); // Tek bir kayıt bekliyorsanız

        return view('web.hakkimizda', compact('sosyalmedya','hakkimizda'));

    }
    public function adminindex()
    {
        $hakkimizda = Hakkımızda::first(); // Tek bir kayıt bekliyorsanız

        return view('admin.hakkimizda', compact('hakkimizda'));

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
        $hakkimizdakisayazi = $request->input('hakkimizdakisayazi');
    $hakkimizdaicerik = $request->input('hakkimizdaicerik');

    // Veritabanında ilgili kayıt var mı kontrol et
    $hakkimizda = Hakkımızda::first();

    if ($hakkimizda) {
        // Var ise güncelle
        $hakkimizda->update([
            'hakkimizdakisayazi' => $hakkimizdakisayazi,
            'hakkimizdaicerik' => $hakkimizdaicerik,

        ]);
    } else {
        // Yok ise yeni bir kayıt ekle
        Hakkımızda::create([
            'hakkimizdakisayazi' => $hakkimizdakisayazi ?? null,
            'hakkimizdaicerik' => $hakkimizdaicerik,

        ]);
    }

    return redirect()->back()->with('success', 'Hakkımızda bilgileri başarıyla güncellendi.');
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
