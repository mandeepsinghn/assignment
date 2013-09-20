<?php
require_once 'ConvertImage.php';
require_once 'CreateZip.php';
require_once 'DbConnect.php';

$img=new ConvertImage();
$zip=new CreateZip();
$db=new DbConnect();

$fileArray=array();
foreach($_FILES as $file)
{
	$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
	$fileNewName=uniqid().'-'.uniqid().'-'.uniqid();
	move_uploaded_file($file['tmp_name'],$fileNewName.'.'.$ext);
	if($ext=='pdf')$img->Convert($fileNewName.'.'.$ext,$fileNewName,'jpg');
	$fileArray[]=$fileNewName.'.'.$ext;
	$fileArray[]=$fileNewName.'.jpg';

}
$zipName=uniqid().'-'.uniqid().'-'.uniqid().'.zip';
$zip->addToZip($fileArray,$zipName);

$sql_user="INSERT INTO `users`( `name`, `dob`, `add`, `email`, `mobile`) VALUES (?,?,?,?,?)";
$sql_file="INSERT INTO `files`(`user_id`, `filename`) VALUES (?,?)";
$userInfo=array($_POST['name'],$_POST['dob'],$_POST['add'],$_POST['email'],$_POST['mobile']);
$user_id=$db->InsertRow($sql_user,$userInfo);
if(!empty($fileArray)){
foreach($fileArray as $file)$db->InsertRow($sql_file,array($user_id,$file));
$db->InsertRow($sql_file,array($user_id,$zipName));
}
?>
<div>
<h2><a href="user_info.php?user_id=<?php echo $user_id; ?>">User Information</a></h2>
</div>
<?php foreach($_POST as $key=>$val): ?>
<div>
<h3><?php echo ucfirst($key);?>  :  <?php echo $val;?></h3>
</div>

<?php endforeach;  ?>
<div>
<h3>Uploaded File:<a href="<?php echo $zipName;?>">Download</a></h3>
</div>
