<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tahun');
    }

    public function get_tahun()
    {
        // jika value diambil dari tahun 2022 maka akan mengembalikan data berupa json dengan link berikut https://tes-web.landa.id/intermediate/?tahun=2022
        if (request()->tahun == 2022) {
            return Http::get('https://tes-web.landa.id/intermediate/?tahun=2022');
        }

        // jika value diambil dari tahun 2021 maka akan mengembalikan data berupa json dengan link berikut https://tes-web.landa.id/intermediate/?tahun=2021
        if (request()->tahun == 2021) {
            return Http::get('https://tes-web.landa.id/intermediate/?tahun=2021');
        }

        // jika tidak memilih maka akan mengembalikan data berupa json dengan link berikut https://tes-web.landa.id/intermediate/?tahun= dan kembali ke halaman utama
        return redirect()->route('tahun');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tahun $tahun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tahun $tahun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tahun $tahun)
    {
        //
    }
}
