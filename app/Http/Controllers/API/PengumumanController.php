<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    protected $pengumuman;

    public function __construct(){
        $this->pengumuman = new Pengumuman();
    }

    public function index()
    {
        return $this->pengumuman->all();
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
        return $this->pengumuman->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->pengumuman->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $pengumuman = $this->pengumuman->find($pengumuman->id);
        $pengumuman->update($request->all());
        return $pengumuman;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman = $this->pengumuman->find($pengumuman->id);
        return $pengumuman->delete();
    }
}
