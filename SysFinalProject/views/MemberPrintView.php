<html>
    <head>
        <title>Database Contents</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <style type="text/css">
		    td {text-align:center;}
            th {text-align:center;}
		</style>
        <br>
        <center>
            <span style="color:darkblue;"><h1>Equipment</h1></span>
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

            <br>
            <span style="color:darkblue"><h1>Employee</h1></span>
            <table style="border-collapse: collapse;" cellpadding="5px">
                <tr style="height: 30px; border-bottom:1pt solid black;">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password Hash</th>
                    <th>Phone Number</th>
                </tr>

                <?php 
                foreach($data['employee'] as $employee) {
                    echo 
                    "<tr style='height: 30px;'>
                        <td>$employee->employeeId</td>
                        <td>$employee->firstName</td>
                        <td>$employee->lastName</td>
                        <td>$employee->email</td>
                        <td>$employee->passwordHash</td>
                        <td>$employee->phoneNumber</td>
                    </tr>";
                }
                ?>
            </table>
            <br>

            <span style="color:darkblue"><h1>Form</h1></span>
            <table style="border-collapse: collapse;" cellpadding="5px">
                <tr style="height: 30px; border-bottom:1pt solid black;">
                    <th>ID</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Employee Name</th>
                    <th>Asset Tag</th>
                </tr>

                <?php 
                foreach($data['form'] as $form) {
                    echo 
                    "<tr style='height: 30px;'>
                        <td>$form->formId</td>
                        <td>$form->formType</td>
                        <td>$form->date</td>
                        <td>$form->description</td>
                        <td>$form->employeeName</td>
                        <td>$form->assetTag</td>
                    </tr>";
                }
                ?>
            </table>

            <br>
            <span style="color:darkblue"><h1>Member</h1></span>
            <table style="border-collapse: collapse;" cellpadding="5px">
                <tr style="height: 30px; border-bottom:1pt solid black;">
                    <th>ID</th>
                    <th>Type</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password Hash</th>
                    <th>Phone Number</th>
                </tr>

                <?php 
                foreach($data['member'] as $member) {
                    echo 
                    "<tr style='height: 30px;'>
                        <td>$member->employeeId</td>
                        <td>$member->type</td>
                        <td>$member->firstName</td>
                        <td>$member->lastName</td>
                        <td>$member->email</td>
                        <td>$member->passwordHash</td>
                        <td>$member->phoneNumber</td>
                    </tr>";
                }
                ?>
            </table>
        </center>
    </body>
</html>