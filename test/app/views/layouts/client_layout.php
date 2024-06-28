<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="http://localhost/test/app/asset/css/layout.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <?php 
        $this->view("layouts/header");
        // print_r($data) ;
        $this->view($data["content"], $data);
        $this->view("layouts/footer");
    ?>
</body>
</html>