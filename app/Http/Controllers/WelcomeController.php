<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;

class WelcomeController extends Controller
{
    
    function index($id=9999) {
        $kowsik = new Kowsik(36,'kowsik khan');
        $details = [
            "kowsik" => $kowsik,
            "yeasin" => "yeasin arafat"
        ];
        if(auth()->check()==false){
            return redirect('/');
        }else{
            return view('practice', compact('details'));
        }
    }

    function inputpractice(Request $request){
        //auth()->logout();
        var_dump(auth()->check());
        var_dump( $request->url() );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    

}

class Kowsik{
    public $name;
    public $age;
    function __construct($age,$name){
        $this->age = $age;
        $this->name = $name;
    }

    function nameki(){
        return $this->name;
    }

}
