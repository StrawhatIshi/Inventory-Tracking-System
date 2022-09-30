<html>
    <head>
        <title>Search Results</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script>
            function printDiv() {
                var divContents = document.getElementById("printContents").innerHTML;
                var a = window.open('', '');
                a.document.write('<html>');
                a.document.write('<body> <center>');
                a.document.write(divContents);
                a.document.write('</center></body></html>');
                a.document.close();
                a.print();
            }
        </script>
    </head>
    <body>
        <style type="text/css">
		    td {text-align:center;}
		</style>
        
        <table>
            <tr>
                <td style="width:10%; text-align:left;">
                    <a href="\MemberController\index"><button  class="btn btn-outline-dark btn-sm">Home Page</button></a>
                </td>
                <td style="width:1%; text-align:right;">
                    <a href="/MemberController/logout"><button href="" class="btn btn-outline-danger btn-sm">Logout</button></a>
                </td>
            </tr>
        </table>
        
        <center>
            <h1>Search by <?php echo "{$data['option']}";?> : <?php echo "{$data['name']}";?> </h1>    
            <div id="printContents">
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
                        <?php

                        //print_r($data['equipment']);
                        if($data['equipment'] != false){
                            foreach($data['equipment'] as $equipment){
                                echo 
                                "
                                <tr style='height: 30px'>
                                    <td>$equipment->assetTag</td>
                                    <td>$equipment->model</td>
                                    <td>$equipment->sinNumber</td>
                                    <td>$equipment->productNumber</td>
                                    <td>$equipment->dateOfInventory</td>
                                    <td>$equipment->location</td>
                                    <td>$equipment->description</td>
                                </tr>
                                ";
                            }   
                        }
                        else{
                            echo 
                            "
                            <h4>Equipment with the provided {$data['option']} does not exist!</h4>                       
                            ";
                        }
                        ?>  
                    </table>
                </form>
            </div>

            <button name="printToCSV" onclick="printDiv()" class="btn btn-outline-secondary btn-sm">Print Retrieved Data!</button>
        </center>
    </body>
</html>