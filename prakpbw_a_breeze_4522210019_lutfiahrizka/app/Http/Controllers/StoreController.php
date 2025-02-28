<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        return view('stores.index', [
            'stores' => Store::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     
     */
    public function create()
    {
        return view('stores.form', [
            'store' => new Store(),
            'page_meta' => [
                'title' => 'Create store',
                'description' => 'Create new store for yours.',
                'method' => 'post',
                'url' => route('stores.store'),
            ]
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     
     */
    public function store( StoreRequest $request)
    {
        $file = $request->file('logo');

    // Gabungkan data yang divalidasi dengan slug dan logo
    $data = array_merge(
        $request->validated(),
        [
            'logo' => $file->store('public/images/stores'),
            'slug' => Str::slug($request->input('name')), // Buat slug dari nama toko
        ]
    );

    // Simpan data toko dengan relasi ke user
    $request->user()->stores()->create($data);

    }

    /**
     * Display the specified resource.
     *
   
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     
     */
    public function edit(Store $store)
    {
        return view('stores.form', [
            'store' => $store,
            'page_meta' => [
                'title' => 'Edit store',
                'description' => 'Edit store:' . $store->name,
                'method' => 'put',
                'url' => route('stores.update', $store),
            ]
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
    
     */
    public function update(StoreRequest $request, Store $store)
    {
        $store->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return to_route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     
     */
    public function destroy(Store $store)
    {
        //
    }
}