<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include "inc/head_styles.php" ?>
        <title>Home</title>
    </head>
    <body>
              
            <?php 

                session_start();
                session_destroy();
                
                include 'inc/menu.php';
            ?>
             
              
        <form action="question-2.php" method="post" onsubmit="return validateQuestion('range-slider');">        
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container col-12">
                    <h3>Sehr geehrter Teilnehmer,<br>Vielen Dank, dass Sie sich die Zeit nehmen,<br> den folgenden Fragebogen auszufüllen.<h/3>
                </div>
             
                <div class="container p-5  mt-4 col-8">
                      <select  id="kurs" class="form-select" aria-label="Default select example" required>
                        <option value="default" selected>*Geschlecht</option>
                        <option value="Female">
                          Weiblich
                        </option>
                        <option value="Male">
                         Männlich
                        </option>
                        <option value="Others">
                          Divers
                        </option>
                      </select><br>

                      <label for="age">*Age:</label>
                      <input type="number" id="age" name="age" min="18" max="99" required><br><br>

                </div>     
                                     
            </div> 

            <div class="container-fluid bg-primary text-center text-white">

                <div class="container pt-5 col-12">
                    <h3>Bitte antworten Sie auf die folgende Frage und klicken Sie auf "Weiter" um fortzufahren.<h/3>
                
                </div>
                    <p class="spacer"></p>
                
                    <h4>Wie gesund bist du körperlich?<br>Wobei: 1 - Überhaupt nicht gesund...<br>
                      3 - Mittelmässig gesund...<br>  5 - Extrem gesund bedeutet</h4>
                    <p class="spacer"></p>

                    <h5>Schätze deine Gesundheit mit dem Slider ein.</h5>
                   
                    
            
                 
                    <p class="spacer"></p>
 
                    <label for="range-slider-changed" class="form-label">*Auswählen:</label>
                    <input type="range" name="range-slider" class="form-range" min="1" max="5" step="1" id="range-slider" onchange="sliderChanged();">
                    <input type="hidden" name="lastPageID" value="index">
                    <input type="hidden" name="range-slider-changed" id="range-slider-changed">
                    <p id="validation-warning" class="warning"></p>
                    
                    <div class="range-lables">
                        <div class="range-marker">1</div>
                        <div class="range-marker">2</div>
                        <div class="range-marker">3</div>
                        <div class="range-marker">4</div>
                        <div class="range-marker">5</div>
                    </div>    
                    
                    <p class="spacer"></p>
                                       
                    
                    <input type="hidden" name="lastPageID" value="index">
                    <p id="validation-warning" class="warning"></p>
                    <input type="reset" value="Zurücksetzen"><br><br>
                    <input class="btn btn-warning" type="submit" value="Weiter ❯"> 
                    <p class="spacer"></p>
            </div>
                    
                    

                     
                 
        </form>                     
                               
      <?php include 'inc/footer.php';?>                 
    
        
    </body>                     
         
</html>                    

                
                
                 
                
    
    
