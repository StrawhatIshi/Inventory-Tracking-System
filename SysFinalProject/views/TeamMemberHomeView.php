<html>
    <head>
        <title>Team Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function closePrint () {
              document.body.removeChild(this.__container__);
            }

            function setPrint () {
              this.contentWindow.__container__ = this;
              this.contentWindow.onbeforeunload = closePrint;
              this.contentWindow.onafterprint = closePrint;
              this.contentWindow.focus(); // Required for IE
              this.contentWindow.print();
            }

            function printPage (sURL) {
              var oHideFrame = document.createElement("iframe");
              oHideFrame.onload = setPrint;
              oHideFrame.style.position = "fixed";
              oHideFrame.style.right = "0";
              oHideFrame.style.bottom = "0";
              oHideFrame.style.width = "0";
              oHideFrame.style.height = "0";
              oHideFrame.style.border = "0";
              oHideFrame.src = sURL;
              document.body.appendChild(oHideFrame);
            }
            </script>
        </head>

    <body>
        </body>
        <body>
        <style type="text/css">
            td {text-align:center;}
            </style>
        
        <table>
            <tr>
                <form method='post' action=''>
                    <td>
                        <input type='text' name='searchName' placeholder='Search...'></td>
                        <td style="width:10%;">
                            <select name='searchOptions'>
                                <option value='tag' selected='selected'>Search by Asset Tag</option>
                                <option value='model' >Search by Model</option>
                                <option value='sin'>Search by SIN Number</option>
                                <option value='productNumber'>Search by Product Number</option>
                                <option value='date'>Search by Date of Inventory</option>
                                <option value='location'>Search by Location</option>
                                <option value='description'>Search by Description</option>
                            </select>
                        </td>
                        <td style="width: 80%; text-align:left;" > 
                            <input type='submit' name='searchB' value='Search' class='btn btn-outline-primary btn-sm' style='margin-left: 20px;'/>
                        </td>
                    </form>
                    <td style="width:5%; text-align:right;">
                        <form action="/MemberController/logout">
                            <input type="submit" value="Logout" class="btn btn-outline-danger btn-sm" style="float: right;">
                        </form>
                    </td>
                </tr>
            </table>
            
            <form action="/MemberController/changePassword/<?= $data['member']->email ?>">
                <input type="submit" value="Change Password" class="btn btn-outline-danger btn-sm" style="float: right;">
            </form>
            
            <center>
                <br><br>
                
                <a href="">
                    <button name="submitFormB" class="btn btn-outline-secondary btn-sm">Submit Form</button>
                </a>
                
                <a href="/EquipmentController/insert">
                    <button name="insertData" class="btn btn-outline-secondary btn-sm">Insert Data</button>
            </a>
            <a href="/EquipmentController/modify">
                <button name="modifyData" class="btn btn-outline-secondary btn-sm">Modify Data</button>
            </a>
            
            <a href="">
                <button name="assignEquip" class="btn btn-outline-secondary btn-sm">(Un)Assign Equipment</button>
            </a>
            <button name="printToCSV" onclick="printPage('/MemberController/PrintView');" class="btn btn-outline-secondary btn-sm">Print external page!</button>
            
            <br><br>
            
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
                        <th>Desk Number</th>
                    </tr>

                    <?php 
                    foreach($data['equipment'] as $equipment) {
                        echo 
                        "<tr style='height: 30px;'>
                            <td>$equipment->assetTag</td>
                            <td>$equipment->model</td>
                            <td>$equipment->sinNumber</td>
                            <td>$equipment->productNumber</td>
                            <td>$equipment->dateOfInventory</td>
                            <td>$equipment->location</td>
                            <td>$equipment->description</td>
                            <td>$equipment->deskNumber</td>
                        </tr>";
                    }
                    ?>
                </table>
            </form>
        </center>
    </body>
</html>