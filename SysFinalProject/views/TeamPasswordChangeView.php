<html>
    <head>
        <title>Password Change</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>        
        <table>
            <tr>
                <td style="width:10%; text-align:left;">
                    <form action="/MemberController/index">
                        <input type="submit" value="Home Page" class="btn btn-outline-dark btn-sm">
                    </form>
                </td>

                <td style="width:1%; text-align:right;">
                    <form action="/MemberController/logout">
                        <input type="submit" value="Logout" class="btn btn-outline-danger btn-sm" style="float: right;">
                    </form>
                </td>
            </tr>
        </table>
        
        <?php 
        if ($data != null) {
            if (!empty($data)) {
                echo "<p style='color:red;'>$data</p><br>";
            }
        }
        ?>

        <center>
            <h1>Password Change</h1>    
            <form action='' method='post'>
                <table>
                    <tr style="height: 30px;">
                        <td>Old Password:</td>
                        <td><input type='password' name='oldPassword' class='form-control'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>New Password:</td>
                        <td><input type='password' name='newPassword' class='form-control'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>New Password Confirmation:</td>
                        <td><input type='password' name='newPasswordConfirmation' class='form-control'></td>
                    </tr> 
                    <tr style="height: 40px;">
                        <td colspan='2' style="text-align:right;"><input type='submit' name='changeB' class="btn btn-outline-primary" value='Change Password'></td>
                    </tr> 
                </table>
            </form>
        </center>
    </body>
</html>