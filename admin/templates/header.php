
<!DOCTYPE html>
<html>
<head>

    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang Quản Trị Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script language="javascript">
        function xacnhan()
        {
            if(confirm("Bạn có muốn xoá  không?"))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    </script>
</head>
<body>
    <div id="top">
        <h3 style="color:#FFF";>Welcom Admin , <a href="../php/xulydangxuat.php" style="color:#FFF";>Logout</a></h3>
    </div>
    <div id="menu">
        <ul>
            <li><a href="list_user.php">Quản Lý Thành Viên</a></li>
            <li><a href="list_chude.php">Quản Lý Chủ Đề</a></li>
            <li><a href="list_baihat.php">Quản Lý Bài Hát</a></li>
            <li><a href="list_comment.php">Quản Lý Bình Luận</a></li>
        </ul>
    </div>
    <div style="clear:left";></div>