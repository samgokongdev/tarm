<?php

namespace App\Http\Controllers;

use App\Models\Tunggakan;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class TunggakanController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Tunggakan', [
            'tunggakans' => Tunggakan::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('nama_wp', 'like', strtoupper("%{$search}%"));
                })
                ->where('sp2', '!=', '')
                ->orderBy('jt_daluarsa', 'asc')
                ->paginate(10)
                ->withQueryString(),

            'filters' => Request::only(['search']),
            'judul' => 'Daftar Tunggakan Pemeriksaan'
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
        return Inertia::render('Tunggakan', [
            'tunggakans' => Tunggakan::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('nama_wp', 'like', "%{$search}%");
                })
                ->where('kode_rik', '=', $id)
                ->where('sp2', '!=', '')
                ->paginate(10)
                ->withQueryString(),

            'filters' => Request::only(['search'])
        ]);
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
