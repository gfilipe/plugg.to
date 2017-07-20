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
                    <h3>Lista de Filmes</h3>
                    <table class="table table-hover">
                        <thead>
                            <th>Episode ID</th>
                            <th>Filme</th>
                            <th>Diretor</th>
                            <th>Produtor</th>
                            <th>Data Lançamento</th>
                        </thead>
                        <tbody>
                            @foreach($filmes as $key => $movies)
                                @foreach($movies->results as $i => $m)
                                <tr>
                                    <td>{{ $m->episode_id }}</td>
                                    <td>{{ $m->title }}</td>
                                    <td>{{ $m->director }}</td>
                                    <td>{{ $m->producer }}</td>
                                    <td>{{ date('d/m/Y',strtotime($m->release_date)) }}</td>
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