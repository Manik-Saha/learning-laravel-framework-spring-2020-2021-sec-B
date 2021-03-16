<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical store channel</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <td>
                    Product name :
                </td>
                <td>
                    <input type="text" name="product_name" value="{{ $list['product_name'] }}">
                </td>
            </tr>
                <td>unit_price :</td>
                <td><input type="text" name="unit_price" value="{{ $list['unit_price'] }}"></td>
            </tr>
            <tr>
                <td>status</td>
                <td>
                <select name='status'>
							<option value="Upcoming" @if($list['status'] == 'Upcoming') selected @endif >Upcoming</option> 
							<option value="Existing"  @if($list['status'] == 'Existing') selected @endif > Existing </option>
						</select>
                </td>
            </tr>
                <td>
                    Category :</td>
                <td><input type="text" name="category" value="{{ $list['category']}}"></td>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
</body>

</html>