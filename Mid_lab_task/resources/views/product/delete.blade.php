<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Existing Product</title>
</head>

<body>
    <form method="post">
    @csrf
        <table>
            <tr>
                <td>
                    Product name :  {{ $list['product_name'] }}
                </td>
            </tr>
                <td>unit_price : {{ $list['unit_price'] }}</td>
            </tr>
            <tr>
                <td>status : {{ $list['status'] }}</td>
            </tr>
                <td>
                    Category : {{ $list['category']}}</td>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Delete"></td>
            </tr>
        </table>
    </form>
</body>

</html>