<?php
$host = "localhost";
$userdb = "root";
$passdb = "";
$db = "tpqi";

/*<th>ชื่อเข้าใช้</th>
        <th>รหัสผ่าน</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>รหัสนิสิต</th>
        <th>สาขาวิชา</th>
        <th>คณะ</th>
        <th>มหาวิทยาลัย</th>
        <th>เกรดเฉลี่ย</th>
        <th>เพศ</th>
        <th>วัน/เดือน/ปี เกิด</th>
        <th>จัดการ</a></th>*/


/*<td><input type="text" name="username" value="<?=@$_POST['username']?>" size="10" ></td>
        <td><input type="text" name="password"  value="<?=@$_POST['password']?>"  size="10"></td>
        <td><input type="text" name="name"  value="<?=@$_POST['name']?>"  size="10"></td>
        <td><input type="text" name="sname"  value="<?=@$_POST['sname']?>"  size="10"></td>
        <td><input type="text" name="code"  value="<?=@$_POST['code']?>"  size="10"></td>
        <td><input type="text" name="major"  value="<?=@$_POST['major']?>"  size="10"></td>
        <td><input type="text" name="faculty"  value="<?=@$_POST['faculty']?>"  size="10"></td>
        <td><input type="text" name="university"  value="<?=@$_POST['university']?>"  size="10"></td>
        <td><input type="number" name="gpa"  value="<?=@$_POST['gpa']?>"  size="10"></td>
        <td><input type="text" name="gender"  value="<?=@$_POST['gender']?>"  size="10"></td>
        <td><input type="date" name="birthdate"  value="<?=@$_POST['birthdate'];?>"  size="10"></td>*/


$attributes = [
    "username" => "ชื่อเข้าใช้",
    "password"=>"รหัสผ่าน",
    "name" => "ชื่อ",
    "sname" => "นามสกุล",
    "code" => "รหัสนิสิต",
    "major" => "สาขาวิชา",
    "faculty" => "คณะ",
    "university" => "มหาวิทยาลัย",
    "gpa" => "เกรดเฉลี่ย",
    "gender" => "เพศ",
    "birthdate" => "วัน/เดือน/ปี เกิด"
];

$conn = mysqli_connect($host, $userdb, $passdb, $db);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}

?>