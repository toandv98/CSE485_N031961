<?php
    include('templates/header.php');

?>
    <div id="wrapper">
        <table>
            <tr style="background: #0C6;">
                <th>STT</th>
                <th>Username</th>
                <th>Email</th>
                <th>Level</th>
                <th>Delete</a></th>
            </tr>
            <?php
            //moketnoi
            include('../php/connect.php');

            //thuchiencautruyvan
            $stt=1;
            $result = mysqli_query($con,"Select id,userName,email,level from nguoidung");
            While($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>$stt</td>";
                echo "<td>$data[userName]</td>";
                echo "<td>$data[email]</td>";
                if($data['level']==2)
                {
                    echo "<td>Admin</td>";
                }
                else
                {
                    echo "<td>Thành Viên</td>";
                }
                echo "<td><a href='del_user.php?id=$data[id]' onclick=' return xacnhan();' style='color:red;'>Delete</a></td>";
            echo "</tr>";
            $stt++;
            }

            mysqli_close($con);
            ?>
        </table>
    </div>
    <?php
    include('templates/footer.php');

?>
</body>
</html>