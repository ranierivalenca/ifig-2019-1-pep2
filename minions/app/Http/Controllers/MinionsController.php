<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Minion::all()->jsonSerialize(), Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Generator $faker)
    {
        $minion = new Minion();
        $minion->name = $faker->lexify('????????');
        $minion->color = $faker->boolean ? 'red' : 'green';
        $minion->save();

        return response($minion->jsonSerialize(), Response::HTTP_CREATED);
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
        $minion = Minion::findOrFail($id);
        $minion->color = $request->color;
        $minion->save();

        return response(null, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Minion::destroy($id);

        return response(null, Response::HTTP_OK);

    }
}
