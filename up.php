<?php
 include('config.php');
 $id = $_GET['id'];
 $Firstsong = $_GET['Firstsong'];
 $Lastsong = $_GET['Lastsong'];
 $numbersong = $_GET['numbersong'];
 $linesong = $_GET['linesong'];
 $vansong = $_GET['vansong'];
 $Firstrub = $_GET['Firstrub'];
 $Lastrub = $_GET['Lastrub'];
 $numberrub = $_GET['numberrub'];
 $jungwat = $_GET['jungwat'];
 $Aum = $_GET['Aum'];
 $Tam = $_GET['Tam'];
 $ban = $_GET['ban'];
 $pai = $_GET['pai'];
 $linerub = $_GET['linerub'];
 $vanrub = $_GET['vanrub'];

 $sql = "UPDATE `data_1` SET `ชื่อผู้ส่ง`='$Firstsong',`นามสกุลผู้ส่ง`='$Lastsong',`เบอร์โทรผู้ส่ง`='$numbersong',`รายระเอียดสินค้า`='$linesong',
 `วันที่ส่ง`='$vansong',`ชื่อผู้รับ`='$Firstrub',`นามสกุลผู้รับ`='$Lastrub',`เบอร์โทรผู้รับ`='$numberrub',
 `จังหวัด`='$jungwat',`อำเภอ`='$Aum',`ตำบล`='$Tam',`บ้านเลขที่`='$ban',`รหัสไปรษณีย์`='$pai',`รายระเอียดที่อยู่`='$linerub',`วันที่สั่ง`='$vanrub' 
 WHERE ID='$id'";
$query = $conn->prepare($sql);

$query->execute();
if ($query->rowCount() > 0) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');location.href = 'select.php';</script>";
} else {
    echo "<script>alert('ผิดอะไรซักอย่างนี่แหละ'); location.href = 'select.php'; </script>";
} 
?>