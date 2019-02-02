<html>  
<head>  
<Title>Azure SQL Database - PHP Website</Title>  
</head>  
<body>  
<form method="post" action="?action=add" enctype="multipart/form-data" >


First Name <input type="text" name="t_fname" id="t_fname"/></br>  
Last Name <input type="text" name="t_lname" id="t_lname"/></br>  
Mobile Number <input type="text" name="t_Mobile_number" id="t_Mobile_number"/></br>  
E-mail address <input type="text" name="t_email" id="t_email"/></br>
Residence Address <input type="text" name="t_uaddress" id= "t_uaddress"> 
Password <input type="text" name="t_upassword" id= "t_upassword"> 
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
        $params = array(&$_POST['t_email'], &$_POST['t_fname'], &$_POST['t_lname'], &$_POST['t_Mobile_number',&$_POST['t_uaddress'],&$_POST['t_upassword'],  
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
print("<tr><td>Emp Id</td>"); 
print("<td>Name</td>"); 
print("<td>education</td>"); 
print("<td>Email</td></tr>"); 
 
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