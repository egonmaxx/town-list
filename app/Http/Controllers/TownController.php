<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TownController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $towns = DB::table('towns')->get();

        return response()->json([
            $towns
        ]);
    }

    public function getTownById($id)
    {
        $town = DB::table('towns')->where('id', $id)->get();

        return response()->json([
            $town
        ]);
    }

    public function browseByCounty($countyId)
    {
        $towns = DB::table('towns')->where('county_id', $countyId)->get();

        return response()->json([
            $towns
        ]);
    }

    public function updateNameById($id,$name)
    {
        DB::table('towns')
            ->where('id', $id)
            ->update(['name' => $name, 'updated_at' => now(),]);
    }

    public function updateNameByJson()
    {
        DB::table('towns')
            ->where('id', Input::get('id'))
            ->update(['name' => Input::get('name'), 'updated_at' => now(),]);
    }

    public function deleteById($id)
    {
        DB::table('towns')
            ->where('id', $id)
            ->delete();
    }

    public function add($countyId,$name)
    {
        DB::table('towns')->insert([
            'county_id' => $countyId,
            'name' => $name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function addTownByJson()
    {
        DB::table('towns')->insert([
            'county_id' => Input::get('countyId'),
            'name' => Input::get('name'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}