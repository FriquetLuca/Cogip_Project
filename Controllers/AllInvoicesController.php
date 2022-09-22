<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Query;

class AllInvoicesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $db = new Query('cogip');
        $dbResult = $db->fetchAll("");
        return $this->view('allinvoices', $dbResult);
    } 
}