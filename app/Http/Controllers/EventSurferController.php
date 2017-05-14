<?php
/**
 * Created by PhpStorm.
 * User: shady
 * Date: 06/05/2017
 * Time: 00:00
 */

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Connection;
use Input;
use Request;
use Doctrine\DBAL\Driver\IBMDB2\DB2Connection;

class EventSurferController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insertToDb(){

    }

    //--------------------------------------------Get Routes----------------------------------------------------------------------------------------------------//
    public function getDashboardPage()
    {
        return view('dashboard');
        //$results = DB::select('select * from users where id = :id', ['id' => 1]);
       // $results = DB::select('select * from users where 1');
       //return $results;
    }

    public function getSearchPage()
    {
        return view('search');
    }

    public function getContactPage()
    {
        return view('contact');
    }
}