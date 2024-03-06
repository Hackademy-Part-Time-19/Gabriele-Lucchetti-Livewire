<div class="container"style="margin-top:30px">
    <h2>Elenco post:</h2>
    <table class="table" style="margin-top:30px">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        <button class="btn btn-secondary">Modifica</button>
                        <button class="btn btn-danger">Elimina</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
