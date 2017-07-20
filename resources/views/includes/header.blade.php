<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}">Filmes</a></li>
                <li><a href="{{ url('/pessoas') }}">Pessoas</a></li>
                <li><a href="{{ url('/planetas') }}">Planetas</a></li>
                <li><a href="{{ url('/especies') }}">Espécies</a></li>
                <li><a href="{{ url('/naves') }}">Naves Espaciais</a></li>
                <li><a href="{{ url('/veiculos') }}">Veículos</a></li>
            </ul>
        </div> 
    </div> 
</nav>