<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/test/app/asset/css/saleItems.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1 style="color:#DB9F2F;" >Sale Items</h1>
    <a href="http://localhost/test/user/execute/"><button>Add New</button></a>
    <table style="width: 700px;">
        <tr>
            <th>Id</th>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Expired date</th>
            <th>Note</th>
            <th></th>
        </tr>
        <?php $listUser = $data["listUser"]; ?>
        <?php foreach ($listUser as $key => $value) : ?>
            <tr>
                <td><?php echo $value->id ?></td>
                <td><?php echo $value->item_code ?></td>
                <td><?php echo $value->item_name ?></td>
                <td><?php echo $value->quantity ?></td>
                <td><?php echo $value->expired_date ?></td>
                <td><?php echo $value->note ?></td>
                <td>
                    <a href="http://localhost/test/user/execute/<?php echo $value->id ?>">Edit</a> 
                    ||
                    <a href="http://localhost/test/user/delete/<?php echo $value->id ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>