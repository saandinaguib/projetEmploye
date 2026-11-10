<?php

namespace App\Http\Controllers;

use App\Services\EmployeService;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function listEmployes()
    {
        $service = new EmployeService();
        $employes = $service->getListEmployes();
        return view('listEmployes', compact('employes'));
    }
}
