<?php
include("dbconnect.php");
$id=$_GET['id'];
$all=mysql_query("SELECT * FROM database1 WHERE id=$id") or die(mysql_error());
$row=mysql_fetch_array($all);
?>
<head>
  <meta charset="UTF-8">
</head>
<body>
<form action="update.php?id=<?php echo $id; ?>" method="post">
   <table widght="100%" border="5" cellspacing="0">
  <tr>
      <td>
	    Име:
      </td>	
      <td>
	    <input type="text" name="ime" value="<?php echo $row['ime']; ?>">
      </td>	  
    </tr>
	<tr>
      <td>
	    Фамилия:
      </td>	
      <td>
	    <input type="text" name="familiq" value="<?php echo $row['familiq']; ?>">
      </td>	  
    </tr>
	<tr>
      <td>
	    Потребителско име:
      </td>	
      <td>
	    <input type="text" name="username" value="<?php echo $row['username']; ?>">
      </td>	  
    </tr>
	<tr>
      <td>
      </td>	
      <td>
	    <input type="submit" name="Edit">
      </td>	  
    </tr>
     </table>
</form>
</body>