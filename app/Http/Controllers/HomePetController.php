<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Entrust;
use Redirect;
use App\HomePet;

class HomePetController extends Controller
{
    private function checkAdmin()
    {
        return Entrust::hasRole('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!$this->checkAdmin()) return Redirect::to('/');

        $homePets = array();
        $homePets['carousel'] = HomePet::getCarouselPets();
        $homePets['featured'] = HomePet::getFeaturedPets();

        return view('homePets.index')->with('homePets', $homePets);
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
        return view('homePets.edit')->with('pet', HomePet::find($id));
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
        $data = $request->only('caption', 'location');
        
        $pet = HomePet::find($id);
        $pet->caption = $data['caption'];
        $pet->location = $data['location'];
        $pet->save();

        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pet = HomePet::find($id);
        $pet->delete();

        return back();
    }
}