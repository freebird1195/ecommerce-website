<?php

require_once '../../core/init.php';
$parentID = $_POST['parentID'];
$childQuery = $db->query("SELECT * FROM categories WHERE parent = '$parentID' ORDER by category");

ob_start(); ?>
<option value=""></option>
<?php while($child = mysqli_fetch_assoc($childQuery)) : ?>
    <option value="<?=$child['id']?>"><?=$child['category']?></option>
<?php endwhile; ?>

<?php
echo ob_get_clean();
?>