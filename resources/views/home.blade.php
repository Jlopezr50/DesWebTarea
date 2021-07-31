@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mt-5">
    <div class="card-header">
        Titulo del contenido de la plantilla
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>Contenido del curso - Plantillas de blade.</p>
        </blockquote>
    </div>
</div>
@endsection
