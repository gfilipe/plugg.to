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
                    <h3>Lista de Espécies</h3>
                    <table class="table table-hover">
                        <thead>
                            <th>Espécie</th>
                            <th>Classification</th>
                            <th>Designation</th>
                            <th>Average Height</th>
                            <th>Skin Colors</th>
                            <th>Hair Colors</th>
                            <th>Eye Colors</th>
                            <th>Average Lifespan</th>
                            <th>Language</th>
                        </thead>
                        <tbody>
                            @foreach($especies as $key => $esp)
                                @foreach($esp->results as $i => $p)
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->classification }}</td>
                                    <td>{{ $p->designation }}</td>
                                    <td>{{ $p->average_height }}</td>
                                    <td>{{ $p->skin_colors }}</td>
                                    <td>{{ $p->hair_colors }}</td>
                                    <td>{{ $p->eye_colors }}</td>
                                    <td>{{ $p->average_lifespan }}</td>
                                    <td>{{ $p->language }}</td>
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