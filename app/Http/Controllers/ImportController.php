<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Exports\UsersExport;
//use App\Imports\UsersImport;
//use Maatwebsite\Excel\Facades\Excel;
use Excel;
use App;

class ImportController extends Controller {
    function importExcel(){
        //$dtr = Excel::import(request()->file('file'));
        $excel = App::make('excel');
        echo"<pre>"; print_r($excel); die('Ex');
    }
}
