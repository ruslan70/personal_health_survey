<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include "inc/head_styles.php" ?>
        <title>question-2</title>
    </head>
    <body>
            
              
            <?php include 'inc/menu.php';?>
            <?php include 'inc/data-collector.php';?>
                
                
            
        <form action="question-4.php" method="post" onsubmit="return validateQuestion('range-slider');">       
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container pt-3 col-12">
                    <h5>Frage 3</h5>
                    <h3>Wie wichtig ist köperliche Aktivität für dich?<br>
                    Wobei: 1- Überhaupt nicht wichtig...<br>
                     3 - Neutral...<br>5- Sehr wichtig bedeutet</h3>

                     <p class="spacer"></p>

                </div>

            </div>




            <div class="container-fluid bg-primary text-center text-warning">
                <div class="container pt-5 col-12">

                    <label for="range-slider-changed" class="form-label">Auswählen</label>
                    <input type="range" name="range-slider" class="form-range" min="1" max="5" step="1" id="range-slider" onchange="sliderChanged();">
                    <input type="hidden" name="lastPageID" value="index">
                    <input type="hidden" name="range-slider-changed" id="range-slider-changed">
                    <div class="range-lables">
                        <div class="range-marker">1</div>
                        <div class="range-marker">2</div>
                        <div class="range-marker">3</div>
                        <div class="range-marker">4</div>
                        <div class="range-marker">5</div>
                    </div> 
                                       
                    <p class="spacer"></p>                    
                </div>
                        <input type="hidden" name="lastPageID" value="question-3">
                        <p id="validation-warning" class="warning"></p>
                        <input type="reset" value="Zurücksetzen"><br><br>
                        <button type="submit" class="btn btn-warning">Weiter</button> 
                        <p class="spacer"></p>
                
            </div>
                
        </form>
        <?php include 'inc/footer.php';?> 

    </body>                     
         
</html>     