<?php

namespace App\Http\Controllers;

use App\Consumable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ConsumablesExport;

class ConsumableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumables =DB::table('consumables')->paginate(2);
        return view('consumables.index', compact('consumables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Consumable::create($request->all());
        return redirect()->route('consumables.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumable  $consumable
     * @return \Illuminate\Http\Response
     */
    public function show(Consumable $consumable)
    {
        return view('consumables.show', compact('consumable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumable  $consumable
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumable $consumable)
    {
        return view('consumables.edit', compact('consumable')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumable  $consumable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumable $consumable)
    {
        $request->validate([
            'name'      => 'required',
            'price'     => 'required' ,
            'quantity'  => 'required'
                ]);
                $consumable->update($request->all());
                return redirect()->route('consumables.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumable  $consumable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumable $consumable)
    {
        $consumable->delete();
        return redirect()->route('consumables.index');
    }
    public function exportToPDF(){
        $consumables = Consumable::get();
        $pdf = PDF::loadView('consumables.exportToPDF', compact('consumables'));
        return $pdf->download('AlimentosRegistrados.pdf');
    }
    public function exportToXls(){
        return Excel::download(new ConsumablesExport,'Alimentos.xlsx');
    }
    public function exportToCsv(){
        return Excel::download(new ConsumablesExport,'Alimentos.csv');
    }
}
