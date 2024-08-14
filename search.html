<?php require_once('Connections/mysqli.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO std_it12 (id, code_std, name_std, dep_std, tel_std) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['id'], "int"),
                       GetSQLValueString($_POST['code_std'], "text"),
                       GetSQLValueString($_POST['name_std'], "text"),
                       GetSQLValueString($_POST['dep_std'], "text"),
                       GetSQLValueString($_POST['tel_std'], "text"));

  mysql_select_db($database_mysqli, $mysqli);
  $Result1 = mysql_query($insertSQL, $mysqli) or die(mysql_error());

  $insertGoTo = "search.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$colname_scarch_noy = "-1";
if (isset($_POST['search'])) {
  $colname_scarch_noy = $_POST['search'];
}
mysql_select_db($database_mysqli, $mysqli);
$query_scarch_noy = sprintf("SELECT * FROM std_it12 WHERE name_std LIKE %s", GetSQLValueString("%" . $colname_scarch_noy . "%", "text"));
$scarch_noy = mysql_query($query_scarch_noy, $mysqli) or die(mysql_error());
$row_scarch_noy = mysql_fetch_assoc($scarch_noy);
$totalRows_scarch_noy = mysql_num_rows($scarch_noy);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
  <table border="1">
    <tr>
      <td>id</td>
      <td>uname</td>
      <td>upass</td>
      <td>myname</td>
      <td>email</td>
      <td>tell</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_scarch_noy['id']; ?></td>
        <td><?php echo $row_scarch_noy['uname']; ?></td>
        <td><?php echo $row_scarch_noy['upass']; ?></td>
        <td><?php echo $row_scarch_noy['myname']; ?></td>
        <td><?php echo $row_scarch_noy['email']; ?></td>
        <td><?php echo $row_scarch_noy['tell']; ?></td>
      </tr>
      <?php } while ($row_scarch_noy = mysql_fetch_assoc($scarch_noy)); ?>
  </table>
<p>&nbsp;</p>
</div>
</body>
</html>
<?php
mysql_free_result($scarch_noy);
?>
