<?php

namespace App\Http\Controllers;

use App\Models\Employe;
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
    public function addEmploye()
    {
        return view('formEmploye');
    }

    public function validEmploye(Request $request)
    {
        $employe = new Employe();
        $employe->nom = $request->input('nom');
        $employe->prenom = $request->input('prenom');
        $employe->profil = $request->input('profil');
    }
}
