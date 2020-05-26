<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Professional;
use App\Pessoa;
use App\Phone;
use App\Profession;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professional = Professional::all();
        $pessoa = Pessoa::all();
        $phone = Phone::all();
        $profession = Profession::all();

        //return view('profissionais.index', compact('professionals', 'pessoas', 'phones', 'professions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('newProfessional');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professional = new Professional();
        
        $professional->pessoa()->name = $request->name;
        $professional->pessoa()->cpf = $request->cpf;
        $professional->pessoa()->rg = $request->rg;
        $professional->pessoa()->birth = $request->birth;
        $professional->pessoa()->email = $request->email;
        $professional->phone()->ddd = $request->ddd;
        $professional->phone()->phone = $request->phone;
        $professional->profession()->profession = $request->profession;
        $professional->profession()->license = $request->license;

        $professional->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show(Professional $professional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function edit(Professional $professional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professional $professional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        //
    }
}
