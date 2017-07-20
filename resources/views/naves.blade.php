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
                    <h3>Lista de Naves Espaciais</h3>
                    <table class="table table-hover">
                        <thead>
                            <th>Nave</th>
                            <th>Model</th>
                            <th>Manufacturer</th>
                            <th>Cost in Credits</th>
                            <th>Length</th>
                            <th>Crew</th>
                            <th>Passengers</th>
                        </thead>
                        <tbody>
                            @foreach($naves as $key => $n)
                                @foreach($n->results as $i => $p)
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->model }}</td>
                                    <td>{{ $p->manufacturer }}</td>
                                    <td>{{ $p->cost_in_credits }}</td>
                                    <td>{{ $p->length }}</td>
                                    <td>{{ $p->crew }}</td>
                                    <td>{{ $p->passengers }}</td>
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