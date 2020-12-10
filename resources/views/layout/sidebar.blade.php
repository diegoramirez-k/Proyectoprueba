<div class="col-md-3">
    <div class="card">
        <div class="card-header">
<img src="{{ asset('storage').'/'.'uploads'.'/'.'anonimo.png'}}" alt="150" class="img-thumbnail img-fluid" alt="" width="300">
        </div>
        <p>{{Auth::user()->name}}</p>
        <p>({{Auth::user()->rol}})</p>
    </div>
    <div class="card">
        <div class="card-header">
            Barra de navegacion
        </div>

        <div class="card-body">
            <ul>
                @can('supervisor')
            <li><a href="/tablero"><em class="icon-reorder">&nbsp;</em> Tablero</a></li>
            @endcan
            <li class="active"><a href="/categorias"><em class="icon-sitemap">&nbsp;</em> Categorias</a></li>
            <li><a href="charts.html"><em class="icon-exchange">&nbsp;</em> Ventas</a></li>
            <li><a href="elements.html"><em class="icon-shopping-cart">&nbsp;</em> Mis compras</a></li>
            @can('cliente')
            <li><a href="{{ url('/productos/' . Auth::user()->id) }}"><em class="icon-shopping-cart">&nbsp;</em> Mis productos</a></li>
            @endcan
            @can('supervisor')
            <li><a href="{{ url('/empleados') }}">Registrar Empleado</a></li>
            @endcan
 </ul>
        </div>
    </div>
</div>
