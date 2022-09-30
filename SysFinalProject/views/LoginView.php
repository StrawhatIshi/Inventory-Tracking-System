<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <br>
        <?php 
        if ($data != null) {
            if (!empty($data)) {
                echo "<p style='color:red;'>$data</p><br>";
            }
        }
        ?>
        
        <h1 style="text-align: center;">Login</h1>             
        <center>
            <form action='' method='post'>
                <table>
                    <tr style="height: 30px;">
                        <td>Username:</td>
                    </tr>
                    <tr style="height: 30px;">
                        <td><input type='text' name='username'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>Password:</td>
                    </tr>
                    <tr style="height: 30px;">
                        <td><input type='password' name='password'></td>
                    </tr> 
                    <tr style="height: 50px;">
                        <td style="text-align: right;"><input type='submit' name='loginB' value='Log in' class='btn btn-primary'></td>
                    </tr> 
                </table>
            </form>
        </center>
    </body>
</html>