<?php
    include('templates/header.php');
?>
        <div id="wrapper">
        <table>
            <tr>
                <td colspan="2"></td>
                <td colspan="2"><a href="../themalbum.php"style="color:#c36;">Thêm Album</a></td>
            </tr>
            <tr style="background: #0C6;">
                <th>STT</th>
                <th>Chude</th>
                <th>Edit</th>
                <th>Delete</a></th>
            </tr>
            <?php
                
                include('../php/connect.php');
                $stt=1;
                $result = mysqli_query($con,"Select id,tenalbum from album");
                While($data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td style='width:100px;'>$stt</td>";
                    echo "<td>$data[tenalbum]</td>";
                    echo "<td style='width:100px;'><a href='chinhsuaalbum.php?id=$data[id]' style='color:#09F;'>Edit</a></td>";
                    echo "<td><a href='del_album.php?id=$data[id]' onclick=' return xacnhan();' style='color:red;'>Delete</a></td>";
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