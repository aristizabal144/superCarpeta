<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Documento;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CarpetaController extends Controller
{
   
    public function verCarpeta()
    {
        $documentos = Documento::where('usuario_id', Auth::user()->id)->get();
        return view('carpeta',["documentos" => $documentos]);
    }

    public function descargarDocumento($var){
        $file = public_path()."/DOCUMENTS/".$var;

        return Response::download($file);
    }

    public function verSubirDoc()
    {
        return view('documentos');
    }

    public function guardarDoc(Request $request)
    {
        $file = $request->file('archivo_documento');
        $nombre_archivo = $file->getClientOriginalName();
        $nombre_final = Carbon::now()->toDateTimeString()."-".$nombre_archivo;
        $file->move(public_path().'/DOCUMENTS',$nombre_final);

        $doc = new Documento();
        $doc->usuario_id = Auth::user()->id;
        $doc->documento_nombre = $request->input('name');
        $doc->documento_url = $nombre_final;
        $doc->save();

        return view('documentos_OK');
    }

}