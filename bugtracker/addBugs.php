<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 22/03/2016
 * Time: 10:08
 */
include ("db_connect.php");

$bugName = $_post["bugName"];
$BugSummary = $_post["BugSummary"];
$BugCategory = $_post["BugCategory"];
$sql = "INSERT INTO bugs (bugName, BugSummary, BugCategory ) VALUES ('$bugName','$BugSummary','$BugCategory')";

if (mysqli_query($db,$sql)){}
else {
    echo "Error:" . $sql . "<br>" . msqli_error($db);
}
header("location:index.php");
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
-->
<html>
    
    <head>
        <meta charset="UTF-8">
         <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>BugTracker</title>
    </head>
    <body>
        
        <div class="container border">

            <header>
                
                
            <div class="row border">
                <div class="col-md-2">
                    <img class ="image-logo" src="image/logo.png" alt="" />

                    
                </div>
                
                <div class="col-md-10">
                        
                        <h2>BugTracker</h2>
                        <h3>Keeping Track all of the Peski little bugs</h3>
                        
                    </div>
    
            </div>
            
           
                
            </header>
           
            <div class="row">
                <div class="col-md-2 min-height">
                    
                        <div class="navbar">
                        <div class="row">
                            <div class="col-md-12"><h5><a href="index.php">All Bug Items</a></h5></div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12"><h5><a href="showBugs.php">Android Bugs</a></h5></div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12"><h5><a href="showBugs.php">IOS Bugs</a></h5></div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12"><h5><a href="showBugs.php">Windows Bugs</a></h5></div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12"><h5><a href="addBugs.php">Insert Bug</a></h5></div>
                            
                        </div>
                        
        
                        </div>
                    </div>
                    
                
                <div class="col-md-10 border min-height">
                    
                    <div class = "row" style="margin-top: 10px;">
                        <div class="col-md-3"> Bug Name</div>
                        <div class="col-md-9"> <input type="text" name="bugName" class="form-control"> </div>
                    </div>
                    
                      <div class = "row" style="margin-top:10px;">
                        <div class="col-md-3"> Bug summary</div>
                        <div class="col-md-9"> <textarea name="Bugsummary"class="form-control"></textarea> </div>
                    </div>
                    
                      <div class = "row" style="margin-top: 10px;">
                        <div class="col-md-3"> Bug Catagory </div>
                        <div class="col-md-9"> <input type="text" name="BugCategory" class="form-control"></div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-2" style="float:right;">
                            <input type="submit" value="Submit" class="form-control">
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <div class="row">
            
                <div class="col-md-12 border footer">
                    Designed by <mark>Nirdesh Kulhar</mark> (2016)


                </div>
                
        </div>

            </div>
        
               
            
        
        
        
    </body>
</html>

