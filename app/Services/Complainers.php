<?php
namespace App\Services;

use Illuminate\Support\Facades\{ DB };
use App\Models\{ Event, Information, Complainer };

class Complainers
{
    public function create($request) : Complainer
    {
        $complainer = new Complainer();
        $category = $request->category;

        switch($category){
            case('animal'):
                $event = new Events();
                $event->school_level = 'not case';
                $event->ocuppation = 'not case';
                $event->event_date = 'not case';
                $event->name = 'not case';

                break;
 
            case('food'):
                
                break;
 
            case('special'):
               
                break;
 
            default:
        }

        return $serie;
    }

    public function update($request, $serie_up) : Serie
    {
        $seasons = new Seasons();
        DB::beginTransaction();
            $serie_up->title = $request['title'];
            $seasons->update( $request, $serie_up );

            $serie_up->save();
        DB::commit();
        
        return $serie_up;
    }

    public function delete($uuid) : string
    {   
        $serie_title = '';
        DB::beginTransaction();
            $serie = Serie::find($uuid);
            $seasons = new Seasons();
            $serie_title = $serie->title;

            $seasons->delete( $serie );
            $serie->delete(); 
        DB::commit();

        return $serie_title;
    }
};