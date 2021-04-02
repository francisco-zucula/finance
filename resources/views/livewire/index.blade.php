@extends('layouts.app', ['title' => 'Pagina inicial'])

@section('content')
@include('users.partials.header', [
'title' => '',
'description' => '',
'class' => 'col-lg-12'
])

<div class="container-fluid mt--7">

    <div class="row">
        <div class="col-xl-12">
            <div class=" card bg-secondary shadow col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">


                <div class="card-header border-0">
                    <div class="row justify-content-md-center">
                        <h2 class="mb-0">Qual desses é Seu sonho?</h2>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Carro</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Casa</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Negócio</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Viagem</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>



</div>
@endsection