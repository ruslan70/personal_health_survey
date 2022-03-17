<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include "inc/head_styles.php"?>
        <title>question-2</title>
    </head>
    <body>
            
              
            <?php include 'inc/menu.php';?>
            <?php include 'inc/data-collector.php';?>
                
                
            
        <form action="question-3.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">       
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container col-12">
                    <h5>Frage 2</h5>
                    <h3>Nimmst du Nahrungsergänzungsmittel?</h3>
                </div>

            </div>




            <div class="container-fluid bg-primary text-center text-warning">
                <div class="container pt-3 col-12">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
                        <label class="form-check-label" for="single-choice-1">
                        <h3>Ja</h3>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
                        <label class="form-check-label" for="single-choice-0">
                        <h3>Nein</h3>
                        </label>
                    </div>
                </div>
                        <input type="hidden" name="lastPageID" value="question-2">
                        <p id="validation-warning" class="warning"></p>
                        <input type="reset" value="Zurücksetzen"><br><br>
                        <button type="submit" class="btn btn-warning">Weiter</button> 
                        <p class="spacer"></p>
                
            </div>
                
        </form>


    </body>                     
        <?php include 'inc/footer.php';?>  
</html>             