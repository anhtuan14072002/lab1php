<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Create a new product</h1>
    <form action="/save_weather.php" method="post">
        <div class="mb-3">
            <label class="form-label">Namecity</label>
            <input type="text" name="namecity" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="text" name="date" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Temperature</label>
            <input type="number" name="temperature" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Humidity</label>
            <input type="number" name="humidity" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description"class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>