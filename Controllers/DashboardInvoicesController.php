<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Query;

class DashboardInvoicesController extends Controller {
    /*
     * return view
     */
    public function index()
    {
        $db = new Query('cogip');
        $result = [];
        return $this->logView('dashboardnewinvoices', $result);
    }
}