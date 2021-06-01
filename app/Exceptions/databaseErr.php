<?php

namespace App\Exceptions;

use Exception;

class databaseErr extends Exception
{
    public function report($d){

        if ($d instanceof \Illuminate\Database\QueryException) {
            dd($d->getMessage());
            //return response()->view('custom_view');
        } elseif ($d instanceof \PDOException) {
            dd($d->getMessage());
            //return response()->view('custom_view');
        }
    }
}
