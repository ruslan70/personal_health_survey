<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include "inc/head_styles.php" ?>
        <title>question-10</title>
    </head>
    <body>
            
              
            <?php include 'inc/menu.php';?>
            <?php include 'inc/data-collector.php';?>
                
                
            
        <form action="result.php" method="post" onsubmit="return validateQuestion('number-text');">       
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container col-12">
                    <h5>Frage 10</h5>
                    <h3>An einem typischen Tag:<br> Wie viele deiner
                        Malzeiten kommen aus der Mikrowelle
                        oder sind schon fertig zubereitet?</h3>
                </div>

            </div>




            <div class="container-fluid bg-primary text-center text-warning">
                <div class="container pt-3 col-12">
                    <label for="inputPassword5" class="form-label">Anzahl Mahlzeiten pro Tag</label>
                    <input type="number" name="number-text" id="number-text" class="form-control" min="0" max="15" style="max-width: 100px;">
                    
                </div>
                        <input type="hidden" name="lastPageID" value="question-10">
                        <p id="validation-warning" class="warning"></p>
                        <input type="reset" value="Zurücksetzen"><br><br>
                        <button type="submit" class="btn btn-warning">Weiter</button> 
                        <p class="spacer"></p>
                
            </div>
                
        </form>


    </body>                     
        <?php include 'inc/footer.php';?>  
</html> 