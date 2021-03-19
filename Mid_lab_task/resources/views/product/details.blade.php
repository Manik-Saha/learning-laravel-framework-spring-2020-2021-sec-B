<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Existing Product</title>
</head>

<body>
<h1>Details Existing Product</h1>
    <form method="post">
        <table>
            <tr>
                <td>
                    Product ID : {{ $list[0]->product_id }}
                </td>
            </tr>
            <tr>
            <td>Vendor ID : {{ $list[0]->user_id }}</td>
            </tr>
            <tr>
            <td>Vendor Name : {{ $list[0]->vendor_name }}</td>
            </tr>
            <tr>
            <td>
            Vendor address : {{ $list[0]->vendor_address}}
            </td>
            </tr>
            <tr>
            <td>E-mail : {{ $list[0]->email }}</td>
            </tr>
            <tr>
                <td>
                    Product name : {{ $list[0]->product_name }}
                </td>
            </tr>
            <tr>
            <td>unit_price : {{ $list[0]->unit_price }}</td>
            </tr>
            <tr>
                <td>status : {{ $list[0]->status }}</td>
            </tr>
            <tr>
            <td>
                Category : {{ $list[0]->category}}</td>
            </td>
            </tr>
        </table>
    </form>
</body>

</html>