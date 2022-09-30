<html>
    <head>
        <title>Admin Home</title>
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
                <td style="width:10%;">
                    <select name="searchOptions">
                        <option selected="selected">Search by Asset Tag</option>
                        <option>Search by Model</option>
                        <option>Search by SIN Number</option>
                        <option>Search by Product Number</option>
                        <option>Search by Date of Inventory</option>
                        <option>Search by Location</option>
                        <option>Search by Description</option>
                    </select>
                </td>
                <td style="width: 80%; text-align:left;" > 
                    <input type="submit" name="searchB" value="Search" class="btn btn-outline-primary btn-sm" style="margin-left: 20px;"/>
                </td>
                <td style="width:5%; text-align:right;">
                    <button href="" class="btn btn-outline-danger btn-sm">Logout</button>
                </td>
            </tr>
        </table>
        
        <center>
            <br>
            <br>
            <form action='' method='post'>
                <table style="border-collapse: collapse;" cellpadding="5px">
                    <tr style="height: 30px; border-bottom:1pt solid black;">
                        <th>Asset Tag</th>
                        <th>Model</th>
                        <th>SIN Number</th>
                        <th>Product Number</th>
                        <th>Date of Inventory</th>
                        <th>Location</th>
                        <th>Description</th>
                    </tr>
                    <tr style="height: 30px;">
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td style="text-align:left;"><input type="submit" name="submitDamagedB" class="btn btn-outline-secondary btn-sm" value="Submit Damaged Form" style="text-align: left;"/></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td style="text-align:left;"><input type="submit" name="submitMissingB" class="btn btn-outline-secondary btn-sm" value="Submit Missing Form"/></td>
                    </tr> 
                    <tr style="height: 30px;">
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td style="text-align:left;"><input type="submit" name="viewForms" class="btn btn-outline-secondary btn-sm" value="View All Forms"/></td>
                    </tr> 
                    <tr>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td style="text-align:left;"><input type="submit" name="viewUsers" class="btn btn-outline-secondary btn-sm" value="View All Users" /></td>
                    </tr>
                    <tr>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>