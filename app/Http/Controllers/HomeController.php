<?php

namespace App\Http\Controllers;

use App\Models\Tunggakan;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Home', [
            'sp2bulanini' => DB::table('tunggakans')
                ->whereMonth('jt_daluarsa', date('m'))
                ->whereYear('jt_daluarsa', date('Y'))
                ->count(),
            'sp2beluminputsppl' => DB::table('tunggakans')
                ->where('tgl_sppl', '=', '0000-00-00')
                ->where('sp2', '!=', "")
                ->count(),
            'np2beluminputsp2' => DB::table('tunggakans')
                ->where('sp2', '=', "")
                ->count(),
            'sp2outstanding' => DB::table('tunggakans')
                ->where('sp2', '!=', "")
                ->count(),

        ]);
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jtnow()
    {
        return Inertia::render('Tunggakan', [
            'tunggakans' => Tunggakan::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('nama_wp', 'like', strtoupper("%{$search}%"));
                })
                ->where('sp2', '!=', '')
                ->whereMonth('jt_daluarsa', date('m'))
                ->orderBy('jt_daluarsa', 'asc')
                ->paginate(10)
                ->withQueryString(),

            'filters' => Request::only(['search']),
            'judul' => 'Daftar Tunggakan JT Bulan Ini'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nosppl()
    {
        return Inertia::render('Tunggakan', [
            'tunggakans' => Tunggakan::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('nama_wp', 'like', strtoupper("%{$search}%"));
                })
                ->where('sp2', '!=', '')
                ->where('tgl_sppl', '=', '0000-00-00')
                // ->orderBy('jt_daluarsa', 'asc')
                ->paginate(10)
                ->withQueryString(),

            'filters' => Request::only(['search']),
            'judul' => 'Daftar Tunggakan Belum Input SPPL'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function np2nosp2()
    {
        return Inertia::render('Tunggakan', [
            'tunggakans' => Tunggakan::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('nama_wp', 'like', strtoupper("%{$search}%"));
                })
                ->where('sp2', '=', '')
                // ->where('tgl_sppl', '=', '0000-00-00')
                ->orderBy('jt_daluarsa', 'asc')
                ->paginate(10)
                ->withQueryString(),

            'filters' => Request::only(['search']),
            'judul' => 'Daftar NP2 Belum Terbit SP2'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sp2outstanding()
    {
        return Inertia::render('Tunggakan', [
            'tunggakans' => Tunggakan::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('nama_wp', 'like', strtoupper("%{$search}%"));
                })
                ->where('sp2', '!=', '')
                // ->where('tgl_sppl', '=', '0000-00-00')
                ->orderBy('jt_daluarsa', 'asc')
                ->paginate(10)
                ->withQueryString(),

            'filters' => Request::only(['search'])
        ]);
    }
}
