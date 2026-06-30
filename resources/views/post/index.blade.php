<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
    body{
        padding: 50px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
             <div class="col-md-8">
                <h5> Posts List</h5>
                <a href="{{ url('/posts/create')}}">
                    <button class="btn btn-primary btn-sm float-end mb-3"> Add New</button>
                </a>
                @if(Session('successAlert'))
                <div class=" alert alert-success alert-dismissible show fade" role="alert">
                    <strong>{{ Session('successAlert') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" ariia-label="Close"></button>

                </div>
                @endif
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                            <td>{{ $post->id}}</td>
                            <td>{{ $post->title}}</td>
                            <td>{{ $post->content}}</td>
                            <td>
                            <form action="{{ url('posts/' .$post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ url('posts/' .$post->id. '/edit') }}">    
                                        <button type="button" class="btn btn-success btn-sm">Edit</button></a>
                                <a href="{{ url('posts/' .$post->id. '/destroy')}}">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button></a>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
              <div class="col-md-2"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>