<!-- <!DOCTYPE html> -->
<html>


<!-- Mirrored from glazeos.com/legal by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 07:26:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Waste Connect - Login</title>
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

    <link class="main-stylesheet" href="assets/nm2/glazeos.css" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="assets/nm2/glazeos-icons.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body class="pace-dark">

    <?php include 'header.php'; ?>

    <div class="page-wrappers">
        <div class="container p-t-70">
            <div class="container-inner">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-md-offset-3 col-sm-offset-4">
                        <div class="content">
                            <section id="introduction" style="padding-top:30px">
                              <div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <form method="post" action="?action=add" enctype="multipart/form-data" >
            <div class="sign-in-htm">
                <div class="group">
                    <label for="t_con_no" class="label1">Username</label>
                    <input type="number" name="t_con_no" id="t_con_no" class="input"/>
                </div>
                <div class="group">
                    <label for="pass" class="label1">Password</label>
                    <input type="password" name="t_pass" id="t_pass" class="input"/>
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" name="submit" value="Sign Up" class="button"/> 
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div> 
        </form>




            <form method="post" action="?action=add" enctype="multipart/form-data" >
            <div class="sign-up-htm">
                <div class="group">
                    <label for="email_id" class="label1">Email Id</label>
                    <input type="text" name="t_email" id="t_email" class="input"/>
                </div>
                <div class="group">
                    <label for="fname" class="label1">First Name</label>
                    <input type="text" name="t_f_name" id="t_f_name" class="input"/>
                </div>
                <div class="group">
                    <label for="lname" class="label1">Last Name</label>
                    <input type="text" name="t_l_name" id="t_l_name" class="input"/> 
                </div>
                <div class="group">
                    <label for="cno" class="label1">Contact Number</label>
                    <input type="number" name="t_con_no" id="t_con_no" class="input"/>
                </div>
                <div class="group">
                    <label for="add" class="label1">Address</label>
                    <textarea name="t_add" id="t_add" class="input"></textarea> 
                </div>
                <div class="group">
                    <label for="pass" class="label1">Password</label>
                    <input type="password" name="t_pass" id="t_pass" class="input"/>
                </div>
                <div class="group">
                <input type="submit" name="submit" value="Sign Up" class="button"/>  
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Already Member?</label>
                </div>
            </div>
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
        $params = array( &$_POST['t_email'],&$_POST['t_f_name'], &$_POST['t_l_name'],&$_POST['t_con_no'],&$_POST['t_add'],&$_POST['t_pass']
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
  

?> 

        </div>
    </div>
</div>

                                <!-- <h2 class="text-center">Legal</h2>
                                <h5 class="text-center">Terms of Service</h5>
                                <h3 id="disclaimer">DISCLAIMER</h3>
                                <p>All information and files — both in source and compiled form — are provided on an as is basis. No guarantees or warranties are given or implied. The user assumes all risks of any damages that may occur, including but not
                                    limited to loss of data, damages to hardware, or loss of business profits. Please use at your own risk. Note that unless explicitly allowed by the warranty covering your device, it should be assumed that any warranty
                                    accompanying your device will be voided if you tamper with either the system software or the hardware.</p>
                                <br>
                                <h3 id="terms-of-use">TERMS OF USE</h3>
                                <p>Certain images, logos, pictures, and other works originating with organizations other than GlazeOS may be or are the trademarks and/or servicemarks of those other organizations and are subject to the laws of their registered
                                    countries. GlazeOS’ usage constitutes a ‘fair use’ of any such copyrighted material as provided for in section 107 of the US Copyright Law. If you wish to use copyrighted material from this site for purposes of your
                                    own that go beyond ‘fair use’, you must obtain permission from the copyright owner.</p>
                                <br>
                                <h2 id="privacy-policy">Privacy Policy</h2>
                                <p>Your privacy is important to GlazeOS. Our Privacy Policy explains how we collect, use, disclose, transfer, and store your information. Please take a moment to familiarize yourself with our privacy practices.</p>
                                <p>GlazeOS provides an after-market operating system and applications for various mobile devices.</p>
                                <br>
                                <h3 id="information-we-have">INFORMATION WE HAVE</h3>
                                <p>Certain information (e.g. a device unique anonymized ID, device model, etc.) is transmitted to us solely for the purpose of measuring non-personally identifiable installation metrics. Unless otherwise stated below, this
                                    information is not used for any other purpose.</p>
                                <ol>
                                    <li>Information we store from the device
                                        <ul>
                                            <li>The unique anonymous ID of the device (this ID changes upon device factory reset)</li>
                                            <li>The device model</li>
                                            <li>The version(s) of our software installed on the device</li>
                                            <li>The country from which the device registered</li>
                                            <li>The wireless carrier(s) to which the device is actively registered</li>
                                        </ul>
                                    </li>
                                </ol>
                                <br>
                                <h3 id="web">WEB</h3>
                                <p>As is true of most websites, we gather some information automatically and store it in log files. This information includes Internet Protocol (IP) addresses, browser type (and version) and language, Internet service provider
                                    (ISP), referring and exit pages, operating system, date/time stamp, and clickstream data.</p>
                                <p>We may collect information regarding user activities on our website and from our other products and services. This information is aggregated and used to help us provide more useful information to our users to understand
                                    which parts of our website, products, and services are of most interest, and for general system diagnostics. Aggregated data is considered non-personal information for the purposes of this Privacy Policy.</p>
                                <p>We do not knowingly collect personal information from children under 13 except where a parent has set up an account for their child and provided GlazeOS with verified parental consent. If we learn that we have collected
                                    the personal information of a child under 13 without first receiving verifiable parental consent we will take steps to delete the information as soon as possible.</p>
                                <p>We will update this privacy policy as needed so that it is current, accurate, and as clear as possible.</p>
                                <br>
                                <h3 id="trademarks">Trademarks and copyright</h3>
                                <p>Certain trademarks belong to third parties and may not be used without permission. See their respective websites for more information.</p>
                                <br> -->
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
   <?php include 'footer.php'; ?>

    </div>

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

  </body>


<!-- Mirrored from glazeos.com/legal by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 07:26:41 GMT -->
</html>