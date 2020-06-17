<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Patient;
use App\Person;
use App\Address;
use App\Phone;
use App\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = DB::table('patients')
            ->join('persons', 'patients.id', '=', 'persons.patient_id')
            ->join('addresses', 'patients.id', '=', 'addresses.patient_id')
            ->join('phones', 'patients.id', '=', 'phones.patient_id')
            ->select('patients.*', 'persons.*', 'addresses.*', 'phones.*')
            ->get();

        return view('listPatient', [
            'patients' => $patient
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newPatient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->save();

        $person = new Person();
        $person->name = $request->name;
        $person->cpf = $request->cpf;
        $person->rg = $request->rg;
        $person->birth =  $request->birth;
        $person->email = $request->email;
        $patient->person()->save($person);

        $address = new Address();
        $address->zip =  $request->zip;
        $address->street = $request->street;
        $address->number = $request->number;
        $address->complement = $request->complement;
        $address->neighborhood = $request->neighborhood;
        $address->city = $request->city;
        $address->state = $request->state;
        $patient->address()->save($address);

        $phone = new Phone();
        $phone->ddd = $request->ddd;
        $phone->phone = $request->phone;
        $patient->phone()->save($phone);

        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $patients = Patient::where('id', $patient->id)->first();
        $person = $patients->person()->first();
        $address = $patients->address()->first();
        $phone = $patients->phone()->first();

        return view('showPatient', [
            'patient' => $patients,
            'person' => $person,
            'address' => $address,
            'phone' => $phone
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('editPatient', [
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->person()->update([
            'patient_id' => $patient->id,
            'name' => $request->name,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'email' => $request->email,
            'birth' => $request->birth
        ]);

        $patient->address()->update([
            'patient_id' => $patient->id,
            'zip' => $request->zip,
            'street' => $request->street,
            'number' => $request->number,
            'complement' => $request->complement,
            'neighborhood' => $request->neighborhood,
            'city' => $request->city,
            'state' => $request->state
        ]);

        $patient->phone()->update([
            'patient_id' => $patient->id,
            'ddd' => $request->ddd,
            'phone' => $request->phone
        ]);

        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patient.index');
    }
}
