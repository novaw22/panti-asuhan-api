<?php

namespace App\Http\Controllers;

use App\Models\JenisProgram;
use App\Http\Requests\StoreJenisProgramRequest;
use App\Http\Requests\UpdateJenisProgramRequest;
use Illuminate\Http\JsonResponse;
use Exception;

class JenisProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $jenisPrograms = JenisProgram::all();

        if($jenisPrograms->isEmpty()) {
            return response()->json(["error" => "data tidak ditemukan"], 200);
        }

        return response()->json($jenisPrograms, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJenisProgramRequest $request): JsonResponse
    {
        $data = $request->validated();

        $jenisProgram = JenisProgram::create($data);

        return response()->json($jenisProgram, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisProgram $jenisProgram): JsonResponse
    {
        if(!$jenisProgram) {
            return response()->json(["error" => "data tidak ditemukan"], 404);
        }

        return response()->json($jenisProgram, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJenisProgramRequest $request, JenisProgram $jenisProgram): JsonResponse
    {
        $data = $request->validated();

        $jenisProgram->update($data);

        return response()->json($jenisProgram, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisProgram $jenisProgram): JsonResponse
    {
        $jenisProgram->delete();

        return response()->json([$jenisProgram->nama => "berhasil dihapus"], 200);
    }
}
