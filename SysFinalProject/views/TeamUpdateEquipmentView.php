<html>
    <head>
        <title>Update Equipment</title>
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
            <h1>Update Equipment Information</h1>    
            <br>
            <form action="">
                <input type="submit" value="Asset Tag Selected" class="btn btn-outline-primary">
            </form>
            <br>

            <form action='' method='post'>
                <table>
                    <tr style="height: 30px;">
                        <td style='padding-right: 10px;'>Asset Tag:</td>
                        <td style='padding-right: 30px;'><input type='text' name='assetTag' class='form-control'></td>
                        
                        <td style='padding-right: 10px;'>Product Number:</td>
                        <td style='padding-right: 30px;'><input type='text' name='productNumber' class='form-control'></td>
                        
                        <td style='padding-right: 10px;'>Description:</td>
                        <td style='padding-right: 30px;'><textarea type='text' name='type' class='form-control' rows='2' cols='30' style="resize: none;"></textarea></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td style='padding-right: 10px;'>Model:</td>
                        <td style='padding-right: 30px;'><input type='text' name='model' class='form-control'></td>
                        
                        <td style='padding-right: 10px;'>Date of Inventory:</td>
                        <td style='padding-right: 30px;'><input type='date' name='dateOfInventory' class='form-control'></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td style='padding-right: 10px;'>SIN:</td>
                        <td style='padding-right: 30px; padding-top: 20px;'><input type='text' name='sin' class='form-control'></td>
                        
                        <td style='padding-right: 10px;'>Location:</td>
                        <td style='padding-right: 30px; padding-top: 20px;'><input type='text' name='location' class='form-control'></td>
                    </tr>
                    <tr style="height: 30px;">
                        <td colspan='6' style="text-align:right;"><input type='submit' name='updateB' class="btn btn-outline-primary" value='Update'></td>

                        <td colspan='6' style="text-align:right;"><input type='submit' name='deleteB' class="btn btn-outline-primary" value='Delete'></td>
                    </tr> 
                </table>
            </form>
        </center>
    </body>
</html>