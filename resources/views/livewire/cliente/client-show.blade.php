@extends('layouts.app', ['title' => 'Reclamação'])

@section('content')
@include('users.partials.header', [
'title' => 'Cadastro do Cliente',
'description' => '',
'class' => 'col-lg-12'
])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12">
            <div class=" card bg-secondary shadow col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">


                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <h3 class="mb-0">Cadastrar</h3>
                    </div>
                </div>

                @livewire('cliente.client-create')

            </div>

        </div>
    </div>



    @include('layouts.footers.auth')
</div>
@endsection