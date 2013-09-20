<?php
extract($_GET);
if(!isset($user_id))exit("Invalid Request");
require_once 'DbConnect.php';
$db=new DbConnect();

$userInfo=$db->fetchAll("SELECT * FROM `users` WHERE `id`=?",array($user_id));
$usersFile=$db->fetchAll("SELECT * FROM `files` WHERE `user_id`=? AND `filename` NOT LIKE '%.zip' AND `filename` NOT LIKE '%.pdf'",array($user_id));


?>
<div>
<h2>User Information</h2>
</div>
<?php foreach($userInfo as $t): foreach($t as $key=>$val): ?>
<div>
<h3><?php echo ucfirst($key);?>  :  <?php echo $val;?></h3>
</div>

<?php endforeach; endforeach; ?>
<?php foreach($usersFile as $file): ?>
<div>
<img src="<?php echo $file['filename']; ?> ">
</div>
<?php endforeach; ?>
