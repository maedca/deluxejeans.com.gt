<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactenos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function send(Request $request){
        
        $result = Mail::send('emails.contacto', $request->all(), function ($msj) use ($request){
            $msj->subject('Formulario de Contacto');
            $msj->to('contacto@maedcacars.com.ve');
            $msj->from(env('MAIL_USERNAME'));
        });
        if($result){
            flash()->overlay('Información','Contacto enviado correctamente');
            return redirect()->guest('/');
        }
    }
    public function sendPedido(Request $request){
        $result = Mail::send('emails.pedido', $request->all(), function ($msj) use ($request){
            $msj->subject('Formulario de Contacto');
            $msj->to('contacto@maedcacars.com.ve');
            $msj->from(env('MAIL_USERNAME'));
        });
        if($result){
            flash()->overlay('Informacion','Pedido enviado correctamente');
            return redirect()->guest('/');
        }
    }
}
