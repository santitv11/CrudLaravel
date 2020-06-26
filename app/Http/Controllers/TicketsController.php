<?php

namespace App\Http\Controllers;

use App\Tickets;
use Illuminate\Http\Request;
 
class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['tickets']=Tickets::paginate(5);
        return view('tickets.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'descripcion'=>'required|string|max:100',
            'responsable'=>'required|string|max:100',
            'fecha'=>'required|date'
        ];
        $Mensaje=["required"=>'El campo :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        $datosTicket=request()->except('_token');
        
        Tickets::insert($datosTicket);
        return Redirect('tickets')->with('Mensaje','Ticket creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show(Tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket= Tickets::findOrFail($id);
        return view('tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'descripcion'=>'required|string|max:100',
            'responsable'=>'required|string|max:100',
            'fecha'=>'required|date'
        ];
        $Mensaje=["required"=>'El campo :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        $datosTicket=request()->except(['_token','_method']);

        Tickets::where('id','=',$id)->update($datosTicket);
        return Redirect('tickets')->with('Mensaje','Ticket actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Tickets::destroy($id);   
        return Redirect('tickets')->with('Mensaje','Ticket eliminado correctamente');
    }
}
