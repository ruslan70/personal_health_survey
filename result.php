<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include "inc/head_styles.php" ?>
        <title>result</title>
    </head>
    <body>
            
              
            <?php include 'inc/menu.php';?>
            <?php include 'inc/data-collector.php';?>
            <?php include 'inc/evaluate.php';?>
                
                
            
            
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container pt-3 col-12">
                    <h5>Ergebnisse</h5>
                    <h3>Vielen Dahk fürs Mitmachen</h3>
                </div>

                <?php
                    echo "<p class='final-feedback?'>" . "You are of exellent health" ."</p>";
                ?>
                     <p class="spacer"></p>
            </div>




            <div class="container-fluid bg-primary text-center text-warning">
                <div class="container pt-3 col-12">

                    
                </div>
                        <input type="hidden" name="lastPageID" value="result">
                        <p id="validation-warning" class="warning"></p>
                        
                        <a class="btn btn-warning" href="question-10.php" role="button">❮ Zurück</a>
                        <a class="btn btn-warning" href="index.php" role="button">❮❮ Restart</a>
                        <p class="spacer"></p>
                
            </div>
                
       <?php include 'inc/footer.php';?>  


    </body>                     
         
</html> 