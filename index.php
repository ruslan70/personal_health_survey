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
             
              
        <form action="question-2.php" onsubmit="return validateQuestion('range-slider')";>        
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container col-12">
                    <h3>Sehr geehrter Teilnehmer,<br>Vielen Dank, dass Sie sich die Zeit nehmen,<br> den folgenden Fragebogen auszufüllen.<h/3>
                </div>
             
                <div class="container p-5  mt-4 col-8">
                      <select  id="kurs" class="form-select" aria-label="Default select example">
                        <option value="default" selected>Geschlecht</option>
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

                      <label for="age">Age:</label>
                      <input type="number" id="age" name="age" min="18" max="99" required><br><br>

                </div>     
                                     
            </div> 

            <div class="container-fluid bg-primary text-center text-white">

                <div class="container pt-3 col-12">
                    <h3>Bitte antworten Sie auf die folgende Frage und klicken Sie auf "Weiter" um fortzufahren.<h/3>
                
                </div>
                
                
                    <h4>Wie gesund bist du körperlich?<br>Wobei: 1- Überhaupt nicht gesund...<br>
                    3- Mittelmässiggesund...<br>5- Extrem gesund bedeutet</h4>
                    <h5>Schätze deine Gesundheit mit dem Slider ein.</h5>
                    <div class="row flex-nowrap">
                        <div class="col text-danger">
                        <p>1</p>
                        </div>
                        <div class="col text-warning" style="text-align: center;">
                        <p>3</p>
                        </div>
                        <div class="col text-success" style="text-align: right;">
                        <p>5</p>
                    </div>
                    </div>
                    <label for="range-slider-changed" class="form-label">Auswählen:</label>
                    <input type="range" name="range-slider" class="form-range" min="0" max="4" step="1" id="range-slider" onchange="sliderChanged();">
                    <input type="hidden" name="lastPageID" value="index">
                    <input type="hidden" name="range-slider-changed" id="range-slider-changed">
                    <p id="validation-warning" class="warning"></p>
                                       
                    <p class="spacer"></p>
                    
                    <input type="reset" value="Zurücksetzen"><br><br>
                    <button type="submit" class="btn btn-warning">Weiter</button> 
                    <p class="spacer"></p>

            </div>          
                 
        </form>                     
                               
                      
    
        
    </body>                     
        <?php include 'inc/footer.php';?>  
</html>                    

                
                
                 
                
    
    
