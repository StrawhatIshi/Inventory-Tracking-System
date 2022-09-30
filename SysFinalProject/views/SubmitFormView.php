<html>
    <head>
        <title>Submit Form</title>
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
            <h1>Submit Form</h1>    
            <form action='' method='post'>
                <table>
                    <tr style="height: 30px;">
                        <td>Employee Name:</td>
                        <td><input type='text' class="form-control" name='employeeName'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>Date:</td>
                        <td><input type='date' class="form-control" name='date'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>Asset Tag:</td>
                        <td><input type='text' class="form-control" name='assetTag'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>Type:</td>
                        <td><input type='text' class="form-control" name='type'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>Description:</td>
                        <td><textarea type='text' name='type' class="form-control" rows='4' cols='30' style="resize: none;"></textarea></td>
                    </tr>
                    <tr style="height: 40px;">
                        <td colspan='2' style="text-align:right;"><input type='submit' name='submitB' class="btn btn-outline-primary" value='Submit Form'></td>
                    </tr> 
                </table>
            </form>
        </center>
    </body>
</html>