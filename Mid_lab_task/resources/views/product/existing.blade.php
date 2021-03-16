<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Existing Product</title>
</head>

<body>
    <h1>List of existing product</h1><br>
    <a href="/logout">Logout</a>
    <table border="1">
        <tr>
        <td>Edit</td>
        <td>Details</td>
        <td>Delete</td>
            <td>product ID</td>
            <td>Product name</td>
            <td>Category</td>
            <td>Unit price</td>
            <td>Status</td>
            <td>Status update time</td>
        </tr>
        @for($i=0; $i < count($list); $i++) <tr>
           @if($list[$i]['status']=='Existing')
           <a href="{{ route('sales.edit', [$list[$i]['product_id']]) }}">Edit</a> |
        <a href="{{ route('sales.details', [$list[$i]['product_id']]) }}">Edit</a> |
        <a href="{{ route('sales.delete', [$list[$i]['product_id']]) }}">Edit</a> |
            <td>{{$list[$i]['pruduct_id']}}</td>
            <td>{{$list[$i]['product_name']}}</td>
            <td>{{$list[$i]['category']}}</td>
            <td>{{$list[$i]['unit_price']}}</td>
            <td>{{$list[$i]['status']}}</td>
            <td>{{$list[$i]['created_at']}}</td>
            <td>
            </td>
            </tr>
              @endif
            @endfor
    </table>
</body>

</html>