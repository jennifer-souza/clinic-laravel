<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Professional;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        //$pessoa = Pessoa::all();
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
        /*
        $professional = new Professional();
        //$pessoa = new Pessoa();
        $phone = new Phone();
        $profession = new Profession();
        */

/*        $professional->pessoa([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'birth' => $request->birth,
            'email' => $request->email
        ]);
        $professional->phone([
            'ddd' => $request->ddd,
            'phone' => $request->phone
        ]);
        $professional->profession([
            'profession' => $request->profession,
            'license' => $request->license
        ]);*/
/*
        //$pessoa->save();
        $phone->save();
        $profession->save();

        //$pessoa = Pessoa::find($pessoa->id);
        $phone = Phone::find($phone->id);
        $profession = Profession::find($profession->id);
        

        //$professional->pessoa()->attach($pessoa, ['id' => 'professional_id']);
        $professional->phone()->attach($phone, ['id' => 'professional_id']);
        $professional->profession()->attach($profession, ['id' => 'professional_id']);
        $professional->save();*/

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show(/*Professional $professional*/ $id)
    {
        $professional = Professional::where('id', $id)->first();



        if ($professional) {   
            echo "<h1>Dados do Usuário</h1>";
            echo "<p>ID: {$professional->id}</p>";
        }

        $person = $professional->person()->first();

        if ($person) {
            echo "<p>Nome: {$person->name}</p>";
            echo "<p>CPF: {$person->cpf}</p>";
            echo "<p>RG: {$person->rg}</p>";
            echo "<p>Data de Nascimento: {$person->birth}</p>";
            echo "<p>E-mail: {$person->email}</p>";
        }

        $phone = $professional->phone()->first();

        if ($phone) {
            echo "<p>DDD: {$phone->ddd}</p>";
            echo "<p>Telefone: {$phone->phone}</p>";
        }

        $address = $professional->address()->first();

        if ($address) {
            echo "<h1>Endereço:</h1>";
            echo "<p>Rua: {$address->address}</p>";
            echo "<p>Nº: {$address->number}</p>";
            echo "<p>Bairro: {$address->neighborhood}</p>";
            echo "<p>Cidade: {$address->city}</p>";
        }
        
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
