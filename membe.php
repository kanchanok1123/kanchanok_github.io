<?php require_once('Connections/mysqli.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "m_login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_mysqli, $mysqli);
$query_noy_rec_member = "SELECT * FROM noy_system";
$noy_rec_member = mysql_query($query_noy_rec_member, $mysqli) or die(mysql_error());
$row_noy_rec_member = mysql_fetch_assoc($noy_rec_member);
$totalRows_noy_rec_member = mysql_num_rows($noy_rec_member);

mysql_select_db($database_mysqli, $mysqli);
$query_noyloveice = "SELECT * FROM std_it12";
$noyloveice = mysql_query($query_noyloveice, $mysqli) or die(mysql_error());
$row_noyloveice = mysql_fetch_assoc($noyloveice);
$totalRows_noyloveice = mysql_num_rows($noyloveice);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
  <p>ข้อมูลนักศึกษา</p>
</div>
<div align="center">
  <table border="1">
    <tr>
      <td>id</td>
      <td>เลขนักศึกษา</td>
      <td>ชื่อ-นามสกุล</td>
      <td>สาขา</td>
      <td>เบอร์</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_noyloveice['id']; ?></td>
        <td><?php echo $row_noyloveice['code_std']; ?></td>
        <td><?php echo $row_noyloveice['name_std']; ?></td>
        <td><?php echo $row_noyloveice['dep_std']; ?></td>
        <td><?php echo $row_noyloveice['tel_std']; ?></td>
      </tr>
      <?php } while ($row_noyloveice = mysql_fetch_assoc($noyloveice)); ?>
  </table>
</div>
<div align="center"></div>
<p align="center">&nbsp;<a href="<?php echo $logoutAction ?>">ย้อนกลับ</a></p>
</body>
</html>
<?php
mysql_free_result($noy_rec_member);

mysql_free_result($noyloveice);
?>
