<html>  
<head>  
<Title>Azure SQL Database - PHP Website</Title>  
</head>  
<body>  
<form method="post" action="?action=add" enctype="multipart/form-data" > 
E-mail address <input type="text" name="t_email" id="t_email"/></br>
First Name <input type="text" name="t_f_name" id="t_f_name"/></br>  
Last Name <input type="text" name="t_l_name" id="t_l_name"/></br>  
Mobile Number <input type="number" name="t_con_no" id="t_con_no"/></br>  
Address <textarea name="t_add" id="t_add"/></br>  
Password <input type="password" name="t_pass" id="t_pass"/><br>  
<input type="submit" name="submit" value="Submit" />  
</form>  
<?php  
/*Connect using SQL Server authentication.*/  
$serverName = "tcp:mysqlserver00001.database.windows.net,1433";  
$connectionOptions = array(  
    "Database" => "mssql",  
    "UID" => "meet",  
    "PWD" => "Qwerty123456"  
);  
$conn = sqlsrv_connect($serverName, $connectionOptions);  
  
if ($conn === false)  
    {  
    die(print_r(sqlsrv_errors() , true));  
    }  
  
if (isset($_GET['action']))  
    {  
    if ($_GET['action'] == 'add')  
        {  
        /*Insert data.*/  
        $insertSql = "INSERT INTO empTable (email,First_name,Last_name,Mobile_Number,uaddress,upassword)   
VALUES (?,?,?,?,?,?)";  
        $params = array( &$_POST['t_email'], &$_POST['t_f_name'], &$_POST['t_l_name'], &$_POST['t_con_no'], &$_POST['t_add'], &$_POST['t_pass']
            );  
        $stmt = sqlsrv_query($conn, $insertSql, $params);  
        if ($stmt === false)  
            {  
            /*Handle the case of a duplicte e-mail address.*/  
            $errors = sqlsrv_errors();  
            if ($errors[0]['code'] == 2601)  
                {  
                echo "The e-mail address you entered has already been used.</br>";  
                }  
  
            /*Die if other errors occurred.*/  
              else  
                {  
                die(print_r($errors, true));  
                }  
            }  
          else  
            {  
            echo "Registration complete.</br>";  
            }  
        }  
    }  
  
/*Display registered people.*/  
/*$sql = "SELECT * FROM empTable ORDER BY name"; 
$stmt = sqlsrv_query($conn, $sql); 
if($stmt === false) 
{ 
die(print_r(sqlsrv_errors(), true)); 
} 
 
if(sqlsrv_has_rows($stmt)) 
{ 
print("<table border='1px'>"); 
print("<tr><td>Email</td>"); 
print("<td>First Name</td>"); 
print("<td>Last Name</td>"); 
print("<td>Contact_no</td></tr>"); 
print("<td>Address</td></tr>");
print("<td>Password</td></tr>");

 
while($row = sqlsrv_fetch_array($stmt)) 
{ 
 
print("<tr><td>".$row['emp_id']."</td>"); 
print("<td>".$row['name']."</td>"); 
print("<td>".$row['education']."</td>"); 
print("<td>".$row['email']."</td></tr>"); 
} 
 
print("</table>"); 
}*/  
?> 
</body>  
</html> 
