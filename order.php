<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Waste Connect - Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon/wc.png" sizes="16x16" />

    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta property="og:image" content="img/glaze-os-banner.png" />

    <link href="assets/nm2/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm2/login.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm2/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm2/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm2/swiper.css" rel="stylesheet" type="text/css" media="screen" />

    <link href="assets/ion-slider/ion.rangeSlider.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/ion-slider/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" media="screen" />

    <link class="main-stylesheet" href="assets/nm2/glazeos.css" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="assets/nm2/glazeos-icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm2/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/nm2/jquery.nouislider.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/nm2/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/new/bt.html" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="assets/nm/jquery.js"></script>
    <script>
        $(function() {
            $("#Index").load("https://glazeos-devices.github.io/Download/index.html");
        });
        $(function() {
            $("#Downloads").load("https://glazeos-devices.github.io/Download/downloads.html");
        });
    </script>
    <script>
        function myFunction()
        {
            var quantity = document.getElementById("quan");
            document.getElementById("price").value= " INR "+ quantity.value * 10;
        }
    </script>
</head>

<body class="index" data-spy="scroll" data-target=".sidebar">

    <?php include 'header.php'; ?>
        <div class="page-wrappers">

        <section class="bg-master-lightest p-b-85 p-t-75 no-overflow">
            <div class="container">
                <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                    <div class="row">
                        <div class="col-md-9 col-sm-8 col-md-offset-3 col-sm-offset-4">
                        <div class="content">
                            <section id="introduction" style="padding-top:30px">
                              <div class="login-wrap1">
                                <div class="login-html">
                                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Order Details</label>
                                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                                    <div class="login-form">
                                        <form method="post" action="?action=add" enctype="multipart/form-data">
                                        <div class="sign-in-htm">
                                            <div class="group">
                                               <br> <label for="item" class="label1">Item</label>
                                                <select id="item" class="input" name="item">
                                                    <option style="background-color: black;">Bottle</option>
                                                    <option style="background-color: black;">Paper</option>
                                                    <option style="background-color: black;">Glass</option>
                                                </select>
                                            </div>
                                            <div class="group">
                                                <label for="quan" class="label1">Quantity</label>
                                                <input id="quan" type="number" class="input" data-type="number" 
                                                onchange="myFunction()" name="quanty">
                                            </div>
                                            <div class="group">
                                                <label for="price" class="label1">Estimated Price</label>
                                                <input id="price" name="price" class="input" value="INR 0"/>
                                            </div>
                                            <br>
                                            <div class="group">
                                                <input type="submit" class="button" value="Place Order" name="submit">
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>

                            </section>
                        </div>

                        
                    </div>
                </div>
            </div>
        </section>

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
        $insertSql = "INSERT INTO order1 (Item,Quantity,Estimated_Price)   
VALUES (?,?,?)";  
        $params = array( &$_POST['item'],&$_POST['quanty'], &$_POST['price']);  
        $stmt = sqlsrv_query($conn, $insertSql, $params);  
        echo "<script>window.location='order-summary.php';<script>"; 
        if ($stmt === false)  
            {  
            /*Handle the case of a duplicte e-mail address.*/  
            $errors = sqlsrv_errors();  
            if ($errors[0]['code'] == 2601)  
                {  
                echo "This Order has been entered.";  
                }  
  
            /*Die if other errors occurred.*/  
              else  
                {  
                die(print_r($errors, true));  
                }  
            }  
          else  
            {  
            echo "Order Placed.</br>"; 
             
            }  
        }  
    }  
  

?> 


        <?php include 'footer.php'; ?>

    <script type="text/javascript">
      var vglnk = { key: 'd87a226caac758bd75828c0be0ce91f0' };

      (function(d, t) {
        var s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
        s.src = '../cdn.viglink.com/api/vglnk.js';
        var r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
      }(document, 'script'));
    </script>

    <!--footer>
        <h5>Glaze OS.</h5>
        <h6>Copyright &copy; 2017 Glaze OS . All Rights Reserved </h6>
    </footer-->

    <script src="assets/nm/pace.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/nm/glazeos.image.loader.js"></script>
    <script type="text/javascript" src="assets/nm/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/nm/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/nm/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="assets/nm/velocity.min.js"></script>
    <script type="text/javascript" src="assets/nm/velocity.ui.js"></script>

    <script type="text/javascript" src="assets/nm/jquery.unveil.min.js"></script>

    <script type="text/javascript" src="assets/nm/glazeos.noelmacwan.js"></script>

    <script type="text/javascript" src="assets/nm/custom.js"></script>

    <script src="assets/nm/sidebar.js" type="text/javascript"></script>
    <script src="assets/nm/jquery.scrollbar.min.js"></script>

    <script src="assets/nm/jquery-ui.min.js" type="text/javascript"></script>
  </body>

</html>
