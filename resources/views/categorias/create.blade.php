@extends('layout.general')

@section('content')
    <div class="container">
        <div class="row">

 @include('layout.sidebar')
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">Crear Nueva Categoria</div>
                    <div class="card-body">
                        <a href="{{ url('/categorias') }}" title="Back"><button class="btn btn-danger btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/categorias') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('categorias.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
