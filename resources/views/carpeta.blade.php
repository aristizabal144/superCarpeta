@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #00045C; color: #fff">Mis Documentos <a href="/home" style="float:right; color:white;">Volver</a></div>

                <div class="card-body">
                    <div class="row">

                    @foreach ($documentos as $doc)
                        <div class="col-md-3" style=" height:150px; margin-bottom:20px;">
                            <a href="/carpeta/{{$doc['documento_url']}}"><img src="/images/doc.png" alt="" style="width:100%; height:100%;"></a>
                            <p style="text-align:center;">{{$doc['documento_nombre']}}</p>
                        </div>
                    @endforeach

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection