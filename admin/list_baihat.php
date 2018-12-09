<?php
    include('templates/header.php');

?>
    <div id="wrapper">
        <table>
            <tr>
                <td colspan="2"></td>
                <td colspan="1"><a href="../thembaihat.php" style="color:#c36">Thêm bài hát</a></td>
            </tr>
            <tr style="background: #0C6;">
                <th >STT</th>
                <th>Chủ Đề</th>
                <th>Delete</a></th>
            </tr>
            <?php
                
                include('../php/connect.php');
                $stt=1;
                $result = mysqli_query($con,"Select id,tenbaihat from baihat");
                While($data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td style='width:100px;'>$stt</td>";
                    echo "<td>$data[tenbaihat]</td>";
                    echo "<td><a href='del_baihat.php?id=$data[id]' onclick=' return xacnhan();' style='color:red;'>Delete</a></td>";
                    echo "</tr>";
                    $stt++;
                }
                
            ?>
        </table>
    </div>
    <?php
    include('templates/footer.php');

?>
</body>
</html>