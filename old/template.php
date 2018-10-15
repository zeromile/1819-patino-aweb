<?php 
    require_once("content.php"); 
    
    $thisPage = $_GET["page"];
    
    $myTitle = $allContent[$thisPage]["title"];
    
    $myContent = $allContent[$thisPage]["content"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
    <title><?php echo $myTitle; ?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php include("nav.php"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php echo $myContent; ?>
            </div>
        </div>
    </div>
</body>
</html>