<?php
//start the session
session_start();
//the first and the last name of the user that logged in
$fName=$_SESSION["firstName"];
$lName=$_SESSION["lastName"];
if(!($_SESSION["inloggning"]==true)) // if there is no valid session
{
    header("Location:../login/login.php");
}
 
?>
 
<?php
//include the header page
include('../header/header.php');
?>
 
<!--the body-->
<div id="slider">
    <div align="right">
        <p><strong>שלום: <?php echo $fName.' '. $lName?></strong></p>
    </div>
    <div align="center">
        <h2>עמוד הבית</h2>
    </div>
        <div class="viewer">
         
            <div class="reel">
                <div class="slide">
                     
                </div>
            </div>
        </div>
    </div>
    <div id="page">
        <div id="content">
            <div class="box1">
     
                <h3>יעוד האתר</h3>
                <p>
                    <strong>מערכת ניהול בweb אשר תענה על הצרכים הבאים:</strong><br>
                            א. דף אנשי קשר.<br>
                            ב. פרסום עדכונים שוטפים. <br>
                            ג. ניהול משימות ומעקב אחרי ביצוען. <br>
                </p>
 
            </div>
             
         
             
            <br class="clearfix" />
        </div>
        <div id="sidebar">
         
        </div>
        <br class="clearfix" />
    </div>
 
</div>
 
<!--footer-->
<div id="footer">
    הזכויות שמורות לצוות 
    control room
</div>
</body>
</html>
