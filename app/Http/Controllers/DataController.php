<?php

namespace App\Http\Controllers;

use App\Models\Datas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    public function index(){
        $datas = Datas::all();
        return view('pages.expense',[
            'title' => 'Revenue & Expense',
            'datas' => $datas,
            'active' => 'expense'
        ]);
    }
    public function indexHome(){
        $datas1 = Datas::where('Type', 'Revenue')->get();
        $datas2 = Datas::where('Type', 'Expense')->get();

        // Calculate the total nominal value for 'Revenue' type
        $nom1 = 0;
        foreach ($datas1 as $data) {
            $nom1 += $data->Nominal; // Summing up the 'Nominal' values
        }
        $nom2 = 0;
        foreach ($datas2 as $data) {
            $nom2 += $data->Nominal; // Summing up the 'Nominal' values
        }
        $sum = $nom1 - $nom2;
        return view('pages.dashboard',[
            'title' => 'Dashboard',
            'nom1' => 'Rp ' . number_format($nom1, 0, ',', '.') ,
            'nom2' => 'Rp ' . number_format($nom2, 0, ',', '.') ,
            'nom3' => 'Rp ' . number_format($sum, 0, ',', '.') ,
            'active' => 'dashboard'
        ]);
    }
    public function indexReport(){
        $datas = Datas::all();
        $datas1 = Datas::where('Type', 'Revenue')->get();
        $datas2 = Datas::where('Type', 'Expense')->get();

        // Calculate the total nominal value for 'Revenue' type
        $nom1 = 0;
        foreach ($datas1 as $data) {
            $nom1 += $data->Nominal; // Summing up the 'Nominal' values
        }
        $nom2 = 0;
        foreach ($datas2 as $data) {
            $nom2 += $data->Nominal; // Summing up the 'Nominal' values
        }
        $sum = $nom1 - $nom2;
        return view('pages.report',[
            'title' => 'Revenue & Expense',
            'datas' => $datas,
            'nom1' => 'Rp ' . number_format($nom1, 0, ',', '.') ,
            'nom2' => 'Rp ' . number_format($nom2, 0, ',', '.') ,
            'nom3' => 'Rp ' . number_format($sum, 0, ',', '.') ,
            'active' => 'report'
        ]);

    }
    public function destroy($id){
        $data = Datas::find($id);
        $data -> delete();
        return redirect()->back();
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'Nominal' => 'required',
            'Description' => 'required',
            'Type' => 'required',

        ]);

        if ($validator -> fails()) {
            return redirect() -> back() -> with('errors', 'data tidak masuk');
        }
        $validateData = $validator->validate();
        Datas::create($validateData);
        return redirect()->route('expense')->with('succes','data telah masuk');
    }
    // public function edit($id){
    //     $data = Data::find($id);
    //     return view('pages.form',[
    //         'title' => $data->name . 'EDIT'
    //     ]);
    // }
}
