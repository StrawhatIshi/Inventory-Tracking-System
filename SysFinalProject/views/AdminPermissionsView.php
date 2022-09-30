<html>
    <head>
        <title>User Permissions</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <style type="text/css">
		    td {text-align:center;}
		</style>
        
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
            <h1>Modifying Permissions for: </h1>    
            <form action='' method='post'>
                <table cellpadding="10px">
                    <tr>
                        <td width='70%'><input type="checkbox" class="form-check-input" name="permission1"> ......</td>
                        <td><input type="checkbox" class="form-check-input" name="permission2"> ......</td>
                    </tr>
                    <tr>
                        <td width='70%'><input type="checkbox" class="form-check-input" name="permission3"> ......</td>
                        <td><input type="checkbox" class="form-check-input" name="permission4"> ......</td>
                    </tr>
                    <tr>
                        <td width='70%'><input type="checkbox" class="form-check-input" name="permission5"> ......</td>
                        <td><input type="checkbox" class="form-check-input" name="permission6"> ......</td>
                    </tr>
                </table>
            </form>
        </center>
        <input style="position: absolute; right: 20px;" type='submit' name='saveB' class="btn btn-outline-primary btn-sm" value='Save Changes'>
    </body>
</html>