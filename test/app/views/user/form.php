<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/test/app/asset/css/form.css" rel="stylesheet" />

    <title>User</title>
</head>
<?php 
    $user = $data["user"] ;
?>
<body>
    <form action="http://localhost/test/user/execute" method="POST">
        <input type="hidden" name="id" value='<?php echo ($user)  ? $user->id : "" ?>'>
        <input type="text" name="item_code" value='<?php echo ($user) ? $user->item_code : "" ?>' placeholder="input item_code">
        <input type="text" name="item_name" value='<?php echo ($user) ? $user->item_name : "" ?>' placeholder="input item_name">
        <input type="text" name="quantity" value='<?php echo ($user) ? $user->quantity : "" ?>' placeholder="input quantity">
        <input type="text" name="expired_date" value='<?php echo ($user) ? $user->expired_date : "" ?>' placeholder="input expired_date">
        <input type="text" name="note" value='<?php echo ($user) ? $user->note : "" ?>' placeholder="input note">
        <input style="background-color: #CE725D;color:#ffff;border:none;border-radius: 5px;" type="submit" name="submit" value="submit">
    </form>
</body>
</html>