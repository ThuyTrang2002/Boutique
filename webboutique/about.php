<?php require_once('header.php'); ?>
<link rel="stylesheet" href="assets/css/3dcube3.css">
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
   $about_title = $row['about_title'];
    $about_content = $row['about_content'];
    $about_banner = $row['about_banner'];
}
?>

<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $about_banner; ?>);">
    <div class="inner">
        <h1><?php echo $about_title; ?></h1>
    </div>
</div>
<br/><br/><br/>
<div class="box">
        <div class="scene">
                        <div class="cube">
                            <div  id="cube-face front"  class="cube-face front" style="background-image:url(assets/img/giang3.jpg)"></div>
                            <div id="cube-face back" class="cube-face back"></div>
                            <div id="cube-face left" class="cube-face left"></div>
                            <div id="cube-face right" class="cube-face right"></div>
                            <div id="cube-face bottom" class="cube-face bottom"></div>
                            <div id="cube-face top" class="cube-face top"></div>
                        </div>
        </div>              
</div>
<br/><br/><br/>
<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <p>
                    <?php echo $about_content; ?>
                </p>

            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>