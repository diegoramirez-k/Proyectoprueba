@extends('layout.general')

@section('menu')
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
<img src="{{ asset('storage').'/'.'uploads'.'/'.'1pR8JnYGtygJStzvO5OKp6NvTi3u957Hr12NTiX7.jpeg'}}" alt="150" class="img-thumbnail img-fluid" alt="" width="300">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Barra de navegacion
        </div>

        <div class="card-body">
            <ul>
            <li><a href="/productos"><em class="icon-reorder">&nbsp;</em> Productos</a></li>
            <li class="active"><a href="/categorias"><em class="icon-sitemap">&nbsp;</em> Categorias</a></li>
            <li><a href="charts.html"><em class="icon-exchange">&nbsp;</em> Ventas</a></li>
            <li><a href="elements.html"><em class="icon-shopping-cart">&nbsp;</em> Mis compras</a></li>
 </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-md-9">
            <div class="card">
                <div class="card-header">Bienvenido</div>
                            <div class="card-body">
                            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-12 px-0">
      <h1 class="display-4 font-italic"><img src="https://media.tenor.com/images/dd651b0bc0ae49020efb7ded2302442b/tenor.gif" align="right">El Avalon</h1>
      <p class="lead my-3">
    Adentrate en el avalon y descubre una extensa variedad en Animes, mangas y coleccionables, recuerda que de igual manera tienes la opcion de vender tus productos en nuestra biblioteca
    </p>


    </div>
  </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
@endsection