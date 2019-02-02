<html>  
<head>  
<Title>Azure SQL Database - PHP Website</Title>  
</head>  
<body>  
<form method="post" action="?action=add" enctype="multipart/form-data" >  
First Name <input type="text" name="t_fname" id="t_fname"/></br>  
Last Name <input type="text" name="t_lname" id="t_name"/></br>   
Mobile Number <input type="text" name="t_Mobile Number" id="t_Mobile Number"/></br>  
Address <input type="text" name="t_address" id="t_address"/> </br>
E-mail <input type="text" name="t_email" id="t_email"/></br>
Password <input type="password" name="t_password" id="t_password"/></br> 

<input type="submit" name="submit" value="Submit" />  
</form> 

<?php  


$serverName = "tcp:wasteserver.database.windows.net,1433";  
$connectionOptions = array(  
    "Database" => "WasteConnect_users",  
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
        $insertSql = "INSERT INTO WasteConnect_users (First Name,Last Name,Mobile Number,Address,Email,Waste_Password)   
VALUES (?,?,?,?,?,?)";  
        $params = array(&$_POST['t_fname'], &$_POST['t_lname'], &$_POST['t_Mobile Number'], &$_POST['t_address'],&$_POST['t_email'],&$_POST['t_password']]  
        );  
        $stmt = sqlsrv_query($conn, $insertSql, $params);  
        if ($stmt === false)  
            {  
            /*Handle the case of a duplicte e-mail address.*/  
            $errors = sqlsrv_errors();  
            if ($errors[0]['code'] == 2601)  
                {  
                echo "The e-mail address you entered has already been used.<br>";  
                }  
  
            /*Die if other errors occurred.*/  
              else  
                {  
                die(print_r($errors, true));  
                }  
            }  
          else  
            {  
            echo "Registration complete.<br>";  
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
print("<tr><td>First Name</td>"); 
print("<td>Name</td>"); 
print("<td>Mobile Number</td>"); 
print("<td>Email</td></tr>"); 
 
while($row = sqlsrv_fetch_array($stmt)) 
{ 
 
print("<tr><td>".$row['emp_id']."</td>"); 
print("<td>".$row['name']."</td>"); 
print("<td>".$row['Mobile Number']."</td>"); 
print("<td>".$row['email']."</td></tr>"); 
} 
 
print("</table>"); 
}*/  
?> 
 
</body>  
</html>  