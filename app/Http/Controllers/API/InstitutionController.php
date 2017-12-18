<?php

namespace App\Http\Controllers\API;

use App\ApiUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Institution;

class InstitutionController extends Controller{

    public function index(Request $request){
        $apiUser = ApiUser::where('token',$request->get('access_token'))->first();
        if(!$apiUser)
            abort(403);

        
        $results = Institution::all();

        $institutions = [];
        foreach($results as $r){
            $institutions[] = $r->toPublicArray();
        }

        return [
            'servicios' => [
                'titulo' => 'Listado de Servicios',
                'tipo' => 'chileatiende#serviciosFeed',
                'items' => $institutions
            ]
        ];

    }


    public function show(Request $request, $id){
        $apiUser = ApiUser::where('token',$request->get('access_token'))->first();
        if(!$apiUser)
            abort(403);

        $institution = Institution::find($id);
        
        $institution = $institution->toPublicArray();

        return ['servicio' => $institution];
    }


}