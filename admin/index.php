<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="card p-4 col-sm-5 shadow p-3 mb-5 bg-body rounded">
                <div class="card-title mb-3">
                    <h2> <b>ADD THE PRODUCT</b> </h2>
                </div>
                <form action="ProductSave.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group mt-2">
                        <label for="fullname">Product Name</label>
                        <input type="text" name="name" class="form-control" required >
                    </div>
                    <div class="form-group mt-2">
                        <label for="fullname">Product Name</label>
                        <input type="file" name="fileToUpload" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="fullname">Product DESCRIPTION</label>
                        <textarea type="text" name="description" class="form-control" required></textarea>
                    </div>
                    <div class="text-end mt-3">
                        
                    <button class="btn btn-primary" name="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
