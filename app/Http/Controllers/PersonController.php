<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::all();

        return view('crud')->with(['people'=>$people]);
    }

    /**
     * @param $id
     * @return $this
     */
    public function edit($id=false)
    {
        $person = null;
        if(!empty($id)){
            $person = Person::findOrFail($id);
        }

        return view('add')->with(['person'=>$person]);
    }

    public function store(request $request)
    {
        $validator = Validator::make(\Request::all(), [
            'name' => 'required',
            'email' => 'required|email',
        ],[
            'name.required' => 'O campo Nome é obrigatório.',
            'email.required' => 'O campo E-mail é obrigatório.',
            'email.email' => 'O campo E-mail precisa ser um e-mail válido.',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $person_id = $request->get('person_id');
            if(!empty($person_id)) {
                $person = Person::findOrFail($person_id);
                $person->name = $request->get('name');
                $person->email = $request->get('email');
                $person->save();
            }else{
                $person = new Person($request->all());
                $person->save();
            }
        }catch(\Exception $e) {
            //send email
        }

        return redirect(url('/'));
    }

    public function delete(request $request)
    {

        try {
            $person = Person::findOrFail($request->get('person_id'));
            $person->delete();
            return response(['msg'=>'success'],200);

        }catch(\Exception $e) {
            return response(['msg'=>$e->getMessage()],200);
        }

    }
}
