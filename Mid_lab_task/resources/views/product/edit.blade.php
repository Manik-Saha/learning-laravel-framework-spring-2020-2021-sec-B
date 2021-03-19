<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical store channel</title>
</head>

<body>
<p style="color: red; font-size: 15px;"> @foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach </p>

    <p style="color: red; font-size: 15px;">{{session('msg')}}</p>
    <form method="post">
    @csrf 
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
                        <option value="Upcoming" @if($list['status']=='Upcoming' ) selected @endif>Upcoming</option>
                        <option value="Existing" @if($list['status']=='Existing' ) selected @endif> Existing </option>
                    </select>
                </td>
            </tr>
            <td>
                Category :
            <td>
                <select name="category" id="category">
                    <option value="Grocery" @if($list['category']=='Grocery' ) selected @endif> Grocery </option>
                    <option value="Medical" @if($list['category']=='Medical' ) selected @endif>Medical </option>
                    <option value="Stationary" @if($list['category']=='Stationary' ) selected @endif>Stationary </option>
                </select>
            </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
</body>

</html>