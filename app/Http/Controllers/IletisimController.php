<?php

namespace App\Http\Controllers;

use App\Models\Iletisim;
use App\Models\SosyalMedya;
use Illuminate\Http\Request;

class IletisimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iletisim = Iletisim::first(); // Tek bir kayıt bekliyorsanız
        $sosyalmedya = SosyalMedya::first();
        return view('web.iletisim', compact('iletisim','sosyalmedya'));

    }
    public function adminindex()
    {
        $iletisim = Iletisim::first(); // Tek bir kayıt bekliyorsanız

        return view('admin.iletisim', compact('iletisim'));

    }
    public function updateOrInsertIletisim(Request $request)
{
    $telefon = $request->input('telnumara');
    $adres = $request->input('adres');
    $harita_iframe = $request->input('harita_iframe');

    // Veritabanında ilgili kayıt var mı kontrol et
    $iletisim = Iletisim::first();

    if ($iletisim) {
        // Var ise güncelle
        $iletisim->update([
            'telnumara' => $telefon,
            'adres' => $adres,
            'harita_iframe' => $harita_iframe,
        ]);
    } else {
        // Yok ise yeni bir kayıt ekle
        Iletisim::create([
            'telnumara' => $telefon ?? null,
            'adres' => $adres,
            'harita_iframe' => $harita_iframe,
        ]);
    }

    return redirect()->back()->with('success', 'İletişim bilgileri başarıyla güncellendi.');
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
        //
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
