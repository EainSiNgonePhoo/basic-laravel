<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
    body{
        padding: 100px;
    }
</style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h5>Create Post</h5>
                <form action="{{url('posts')}}" method="POST">
                 @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <!-- name="title" ပေးတာက databaseနဲ့အလုပ်လုပ်မှာမို့ -->
                        <input type="text" name="title" class="form-control" placeholder="Enter post title">

                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                       <textarea name="content" id="content" rows="3" class="form-control" placeholder="Enter the content...."></textarea>

                    </div>

                    <button class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>