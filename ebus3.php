
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="style.css" type="text/css" />
        <div id="menu">
			<ul>
				<li><a href="index.php ">Home</a></li>
				
                                <li><a href="ConsultingServices.html">Consulting services</a></li>
                                <li><a href="ebus1.php">EBusiness</a></li>
			</ul>
		</div>
    </head>
    <header> <h1> Purchase Receipt:</h1></header>
    <body>
        
        <!-- //Starting the session to get the session variable from last page.-->
      
<div id="Content1">
    <pre>
        

    </pre>
        
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