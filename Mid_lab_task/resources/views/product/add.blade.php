<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new product</title>
</head>

<body>
    <h1>Add new product</h1>
    <form method="post">
        <fieldset>
            <legend>add new product</legend>
            <table>
                <tr>
                    <td>Produnt name :</td>
                    <td><input type="text" name="product_name" value=""></td>
                </tr>
                <tr>
                    <td>Product category</td>
                    <td>
                        <select name="category" id="category">
                            <option value=""> </option>
                            <option value="Grocery">Grocery</option>
                            <option value="Medical">Medical</option>
                            <option value="Stationary">Stationary</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Unit Price :
                    </td>
                    <td><input type="text" name="unit_price"></td>
                </tr>
                <tr>
                    <td>Status :</td>
                    <td>
                        <select name="status" id="status">
                            <option value=""> </option>
                            <option value="Existing">Existing</option>
                            <option value="Upcoming">Upcoming</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Save">
        </fieldset>
    </form>
</body>

</html>