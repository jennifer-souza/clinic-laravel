<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Person;
use App\Phone;
use App\Profession;
use App\Professional;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professional = DB::table('professionals')
            ->join('persons', 'professionals.id', '=', 'persons.professional_id')
            ->join('professions', 'professionals.id', '=', 'professions.professional_id')
            ->join('phones', 'professionals.id', '=', 'phones.professional_id')
            ->select('professionals.*', 'persons.*', 'professions.*','phones.*')
            ->get();


        return view('listProfessional', [
            'professionals' => $professional
        ]);
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
      /*  $this->validate($request, [
            'title' => 'required'
            ]);
      ]);*/ 

      $professional = new Professional();
      $professional->save();

      $person = new Person();
      $person->name = $request->name;
      $person->cpf = $request->cpf;
      $person->rg = $request->rg;
      $person->birth = $request->birth;
      $person->email = $request->email;
      $professional->person()->save($person);
      
      $profession = new Profession();
      $profession->profession = $request->profession;
      $profession->license = $request->license;
      $professional->profession()->save($profession);
      
      $phone = new Phone();
      $phone->ddd = $request->ddd;
      $phone->phone = $request->phone;
      $phone->dddc = $request->dddc;
      $phone->cellphone = $request->cellphone;
      $professional->phone()->save($phone);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show(Professional $professional)
    {
        $professional = Professional::where('id', $professional->id)->first();
        $person = $professional->person()->first();
        $profession = $professional->profession()->first();
        $phone = $professional->phone()->first();


        return view('showProfessional', [
            'professional' => $professional,
            'person' => $person,
            'profession' => $profession,
            'phone' => $phone
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function edit(Professional $professional)
    {
        return view('editProfessional', [
            'professional' => $professional
        ]);
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
        $professional->person()->update([
            'professional_id' => $professional->id,
            'name' => $request->name,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'email' => $request->email,
            'birth' => $request->birth
        ]);

        $professional->profession()->update([
            'professional_id' => $professional->id,
            'prof' => $request->profession,
            'license' => $request->license
        ]);

        $professional->phone()->update([
            'professional_id' => $professional->id,
            'ddd' => $request->ddd,
            'phone' => $request->phone,
            'dddc' => $request->dddc,
            'cellphone' => $request->cellphone
        ]);

        return redirect()->route('professional.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        $professional->delete();
        return redirect()->route('professional.index');
    }
}
