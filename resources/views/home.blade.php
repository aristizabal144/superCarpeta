@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #00045C; color: #fff">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="card-body col-md-6" style="background-color: #7B68EE;">
                            <img src="images/share.png" width="100" alt="" style="display:block; margin: 0 auto;">
                            <h4 style="text-align:center; color:white; font-weight:bold;">Compartir Documentos</h4>
                        </div>

                        <div class="card-body col-md-6" style="background-color: #00BFFF ; ">
                            <img src="images/upload.png" width="100" alt="" style="display:block; margin: 0 auto;">
                            <h4 style="text-align:center; color:white; font-weight:bold;">Subir Documentos</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card-body col-md-12" style="background-color: #4682B4 ; ">
                            <img src="images/folder.png" width="100" alt="" style="display:block; margin: 0 auto;">
                            <h4 style="text-align:center; color:white; font-weight:bold;">Mi carpeta</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
