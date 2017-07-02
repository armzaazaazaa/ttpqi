<h1><?=isset($_GET['id'])?"แก้ไข":"เพิ่ม"?>Student</h1>
<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:20 PM
 */
require 'config.php';
?>
<form method="POST" action="insert.php">




    <?php foreach ($attributes as $ker => $attribute) { ?>
    <div style="padding:20px;">
        <span><?=$ker?></span>
        <span><input type="text" name="<?=$ker?>" value="<?=@$row[$ker]?>" ></span>
    </div>
    <?php } ?>


    <input type="submit" value="<?=isset($_GET['id'])?"แก้ไข":"เพิ่ม"?>">
</form>

