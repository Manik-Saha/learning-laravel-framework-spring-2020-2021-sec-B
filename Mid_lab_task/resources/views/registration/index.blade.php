<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create staff</title>
</head>

<body>
    <form method="post">
        @csrf
        <table>
            <tr>
                <td>
                    Full name :
                </td>
                <td>
                    <input type="text" name="fullname" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type="text" name="username" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="password" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Confirm password :
                </td>
                <td>
                    <input type="password" name="Cpassword" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Home address :
                </td>
                <td>
                    <input type="text" name="address" value="">
                </td>
            </tr>
            <tr>
                <td>
                    E-mail :
                </td>
                <td>
                    <input type="text" name="email" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Contact no. :
                </td>
                <td>
                    <input type="text" name="phone" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Company name :
                </td>
                <td>
                    <input type="text" name="company" value="">
                </td>
            </tr>
            <tr>
                <td>
                    City. :
                </td>
                <td>
                    <input type="text" name="city" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Country :
                </td>
                <td>
                    <input type="text" name="country" value="">
                </td>
            </tr>
            <tr>
                <td><label for="role">Select role:</label></td>
                <td><select name="role" id="role" name="role">
                        <option> </option>
                        <option value="customer">Customer</option>
                        <option value="accoutant">Accounant</option>
                        <option value="Sales&marketing">Sales & Marketing person</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Save">
    </form>
    @foreach($errors->all() as $err)
    {{$err}} <br>
    @endforeach
</body>

</html>