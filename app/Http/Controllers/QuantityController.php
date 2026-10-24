<?php

namespace App\Http\Controllers;

use App\Models\Quantity;
use App\Http\Requests\StoreQuantityRequest;
use App\Http\Requests\UpdateQuantityRequest;

class QuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $quantities = Quantity::orderBy('id')->get();
        return view('institute.index', compact('quantities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuantityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuantityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function show(Quantity $quantity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $quantity = Quantity::find($id); //single data of user
        return view('institute.edit', compact('quantity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuantityRequest  $request
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateQuantityRequest $request, $id)
    {
        $quantities = Quantity::findOrFail($id);

        $quantities->name = $request->input('name');
        $quantities->total = $request->input('total');


        if ($quantities->save($request->all())) {
            return redirect(route('institute.index'))->withStatus('Successfully update!');
        }

        return back()->withErrors('Failed to update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quantity $quantity)
    {
        //
    }
}
