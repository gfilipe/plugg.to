<!DOCTYPE html>
<html>
    <head>
        <title>Teste Gabriel - SWAPI</title>
        <?php echo View::make('includes/bibliotecas')->render(); ?>
    </head>
    <body>
        <?php echo View::make('includes/header')->render(); ?>
        <div class="container conteudoSite">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3>Lista de Planetas</h3>
                    <table class="table table-hover">
                        <thead>
                            <th>Planeta</th>
                            <th>Período Rotacional</th>
                            <th>Período Orbital</th>
                            <th>Diametro</th>
                            <th>Clima</th>
                            <th>Gravidade</th>
                            <th>Terreno</th>
                            <th>Superficie aquatica</th>
                            <th>População</th>
                        </thead>
                        <tbody>
                            @foreach($planetas as $key => $planets)
                                @foreach($planets->results as $i => $p)
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->rotation_period }}</td>
                                    <td>{{ $p->orbital_period }}</td>
                                    <td>{{ $p->diameter }}</td>
                                    <td>{{ $p->climate }}</td>
                                    <td>{{ $p->gravity }}</td>
                                    <td>{{ $p->terrain }}</td>
                                    <td>{{ $p->surface_water }}</td>
                                    <td>{{ $p->population }}</td>
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>