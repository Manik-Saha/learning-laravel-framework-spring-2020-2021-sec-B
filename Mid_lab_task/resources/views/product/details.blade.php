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
        <table>
            <tr>
                <td>
                    Product ID : {{ $list['product_id'] }}
                </td>
            </tr>
            <tr>
            <td>Vendor ID : {{ $list['vendor_id'] }}</td>
            </tr>
            <tr>
            <td>Vendor Name : {{ $list['vendor_name'] }}</td>
            </tr>
            <tr>
            <td>
            Vendor address : {{ $list['vendor_address']}}
            </td>
            </tr>
            <tr>
            <td>E-mail : {{ $list['email'] }}</td>
            </tr>
            <tr>
                <td>
                    Product name : {{ $list['product_name'] }}
                </td>
            </tr>
            <tr>
            <td>unit_price : {{ $list['unit_price'] }}</td>
            </tr>
            <tr>
                <td>status : {{ $list['status'] }}</>td>
            </tr>
            <tr>
            <td>
                Category : {{ $list['category']}}</td>
            </td>
            </tr>
        </table>
    </form>
</body>

</html>