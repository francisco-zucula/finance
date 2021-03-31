@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')

{{-- --}}

<div class="container-fluid mt--7">
    <div class="row mt-4">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Reclamações dos Clientes</h3>
                            </div>
                            <div class="col text-right">
                                <a href='' class="btn btn-sm btn-primary">Todos</a>
                            </div>
                        </div>
                    </div>

                    <div class='card-body bg-secondary'>
                        <h1 class="text-danger">Em manutenção</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-5">

    </div>

    @include('layouts.footers.auth')
</div>
@endsection