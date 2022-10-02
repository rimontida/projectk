<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="./script/style.css" />
</head>

<body class="bgimg">
<h1 class="abc">Blogs</h1>
    <?php
       include "navbar.php";
    ?>

    <form action="blog_insert.php"  method="post" enctype="multipart/form-data" >
       หัวเรื่อง <input type="text" name="title" /> <br/>
       เนื้อหา <textarea rows="" cols="" name="detail"></textarea> <br/>
       แทรกรูป <input type="file" name="img" /> <br/>
       <input type="submit" value="บันทึก" />
    </form>

    <?php
      include "blog_select.php";
    ?>

</body>

</html>