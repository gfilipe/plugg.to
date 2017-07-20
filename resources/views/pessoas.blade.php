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
                    <h3>Lista de Pessoas</h3>
                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Height</th>
                            <th>Mass</th>
                            <th>Hair Color</th>
                            <th>Skin Color</th>
                            <th>Eye Color</th>
                        </thead>
                        <tbody>
                            @foreach($pessoas as $key => $pe)
                                @foreach($pe->results as $i => $p)
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->gender }}</td>
                                    <td>{{ $p->height }}</td>
                                    <td>{{ $p->mass }}</td>
                                    <td>{{ $p->hair_color }}</td>
                                    <td>{{ $p->skin_color }}</td>
                                    <td>{{ $p->eye_color }}</td>
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