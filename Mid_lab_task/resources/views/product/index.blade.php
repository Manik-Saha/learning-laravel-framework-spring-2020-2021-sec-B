<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product management</title>
</head>

<body>
    <h1>Product management page</h1>
    <div>
        <nav>
            <a href="{{route('product.existing')}}"> Existing product</a><br><br>
            <a href="{{route('product.upcoming')}}"> Upcoming product</a><br><br>
            <a href="{{route('product.add')}}"> Add new product</a><br>
        </nav>
    </div>
</body>

</html>