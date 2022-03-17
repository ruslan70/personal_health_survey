<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include "inc/head_styles.php" ?>
        <title>question-2</title>
    </head>
    <body>
            
              
            <?php include 'inc/menü.php';?>
            <?php include 'inc/data-collector.php';?>
                
                
            
        <form action="question-6.php" method="post" onsubmit="return validateQuestion('range-slider');">       
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container col-12">
                    <h5>Frage 5</h5>
                    <h3>Hast du das Gefühl, zu wenig, genügend
                        oder viel zu viel zusätzliche körperliche
                            Aktivitäten zu betreiben?<br>
                            Wobei: 1- Viel zu wenig /<br>
                            3- Gerade richtig<br>
                            5- Viel zu viel  bedeutet</h3>
                </div>

            </div>




            <div class="container-fluid bg-primary text-center text-warning">
                <div class="container pt-3 col-12">
                    <label for="range-slider-changed" class="form-label">Auswählen</label>
                    <input type="range" name="range-slider" class="form-range" min="0" max="4" step="1" id="range-slider" onchange="sliderChanged();">
                    <input type="hidden" name="lastPageID" value="index">
                    <input type="hidden" name="range-slider-changed" id="range-slider-changed">
                    
                </div>
                        <input type="hidden" name="lastPageID" value="question-5">
                        <p id="validation-warning" class="warning"></p>
                        <input type="reset" value="Zurücksetzen"><br><br>
                        <button type="submit" class="btn btn-warning">Weiter</button> 
                        <p class="spacer"></p>
                
            </div>
                
        </form>


    </body>                     
        <?php include 'inc/footer.php';?>  
</html> 