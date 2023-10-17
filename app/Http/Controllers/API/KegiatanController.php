<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    protected $kegiatan;

    public function __construct(){
        $this->kegiatan = new Kegiatan();
    }

    public function index()
    {
        return $this->kegiatan->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->kegiatan->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        return $this->kegiatan->find($kegiatan->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $kegiatan = $this->kegiatan->find($kegiatan->id);
        $kegiatan->update($request->all());
        return $kegiatan;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan = $this->kegiatan->find($kegiatan->id);
        return $kegiatan->delete();
    }
}
