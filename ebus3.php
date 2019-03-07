
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="style.css" type="text/css" />
        <div id="menu">
			<ul>
				<li><a href="index.php ">Home</a></li>
				<li><a href="Resume.html">CV</a></li>
                                <li><a href="tiltedpage_scroll_demo.html">Interests</a></LI>
                                <li><a href="ConsultingServices.html">Consulting services</a></li>
                                <li><a href="ebus1.php">EBusiness</a></li>
			</ul>
		</div>
    </head>
    <body>
        
        <!-- //Starting the session to get the session variable from last page.-->
        <h1> Purchase Receipt:</h1>
        
        <pre>
            








        </pre>
<div id="Content1">

        
        <?php
       
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "The name is : ".$fullNameValue.".";
        echo "<br></br>";
        echo "The total value is ".$totalValue.".";
       
        ?>
</div>
    </body>
</html>