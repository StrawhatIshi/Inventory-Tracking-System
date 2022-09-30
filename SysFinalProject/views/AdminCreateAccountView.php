<html>
    <head>
        <title>Create Account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <table>
            <tr>
                <td style="width:10%; text-align:left;">
                    <button href="" class="btn btn-outline-dark btn-sm">Home Page</button>
                </td>
                <td style="width:5%; text-align:right;">
                    <button href="" class="btn btn-outline-danger btn-sm">Logout</button>
                </td>
            </tr>
        </table>
        
        <center>
            <h1>Create new Account</h1>    
            <form action='' method='post'>
                <table>
                    <tr style="height: 30px;">
                        <td>Username:</td>
                        <td><input type='text' class="form-control" name='username'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>Password:</td>
                        <td><input type='password' class="form-control" name='password'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>Password Confirmation:</td>
                        <td><input type='password' class="form-control" name='passwordConfirmation'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>First Name:</td>
                        <td><input type='text' class="form-control" name='firstName'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>Last Name</td>
                        <td><input type='text' class="form-control" name='lastName'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>Role:</td>
                        <td><input type='text' class="form-control" name='role'></td>
                    </tr>
                    <tr style="height: 40px;">
                        <td colspan='2' style="text-align:right;"><input type='submit' name='submitB' class="btn btn-outline-primary" value='Create Account'></td>
                    </tr> 
                </table>
            </form>
        </center>
    </body>
</html>