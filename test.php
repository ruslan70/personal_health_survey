<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include "inc/head_styles.php" ?>
        <title>Home</title>
    </head>
    <body>
            
              
              <?php include 'inc/menu.php';?>
                <div class="container col-12 text-center pt-3">
                    <h3>Sehr geehrter Teilnehmer,<br>Vielen Dank, dass Sie sich die Zeit nehmen,
                    <br> den folgenden Fragebogen auszufüllen.<h/3> 
                </div>    
        <form action="result.php" method="post">        
            <div class="container-fluid text-center mt-3">
                
                <div class="row">  
                
                    <div class="col-12 p-3 bg-warning text-primary">
                
                      <select  id="kurs" class="form-select" aria-label="Default select example" required>
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
                      <inputtype="number" id="age" name="age" min="18" max="99" required><br><br>

                    </div>
                    saveSelection


                    <div class="col-12 p-3 bg-primary text-white">

               
                        <input type="checkbox" value="Keine zusätzliche körperliche Aktivität" name="Act1" onChange="saveSelection(this)"> Keine zusätzliche körperliche Aktivität 
                        <input type="checkbox" value="Gewichte heben" name="Act2" onChange="saveSelection(this)"> Gewichte heben
                        <input type="checkbox" value="Kampfsport" name="Act3" onChange="saveSelection(this)"> Kampfsport 
                        <input type="checkbox" value="Wandern" name="Act4" onChange="saveSelection(this)"> Wandern 
                        <input type="checkbox" value="Joggen" name="Act5" onChange="saveSelection(this)"> Joggen<br>
                        <input type="checkbox" value="Rennen" name="Act6" onChange="saveSelection(this)"> Rennen
                        <input type="checkbox" value="Schwimmen" name="Act7" onChange="saveSelection(this)"> Schwimmen
                        <input type="checkbox" value="Tanzen" name="Act8" onChange="saveSelection(this)"> Tanzen
                        <input type="checkbox" value="Pilates " name="Act9" onChange="saveSelection(this)"> Pilates 
                        <input type="checkbox" value="Team Sport" name="Act10" onChange="saveSelection(this)"> Joggen
                        <input type="checkbox" value="Aerobics" name="Act11" onChange="saveSelection(this)"> Joggen
                        <input type="checkbox" value="Spazieren" name="Act12" onChange="saveSelection(this)"> Spazieren
                        <hr> 
                        Anderes: 
                        <input type="checkbox" value="Freitext" name="Act9" onChange="saveSelection(this)"> 
                        <br> 
                        Freitext:<input size="60" name="Freitext" onChange="saveSelection(this)"> 
                        <hr> 
                        
                        <p>&nbsp;</p>
                        <input type="reset" value="Zurücksetzen"><br><br>
                      
                        <a class="btn btn-warning" href="index.php" role="button">❮ Zurück</a>
                        <input class="btn btn-warning" type="submit" value="Submit ❯"> 
                    </div>
                </div>
                

            </div>        
                 
        </form>                     
                               
        <div class="container-fluid p-5 my-8 bg-primary text-white">
          <h1>My First Bootstrap Page</h1>
          <p>This container has a blue background color and a white text, and some extra padding and margins.</p>
        </div>                  
            
        
    </body>                     
        <?php include 'inc/footer.php';?>  
</html>                    
