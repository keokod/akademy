<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <script src="script.js"></script>
      <title>video console nextgen</title>
   </head>
   <body>
      <?php
         include'menu.php';
         ?>
      <div class="row" id="divide4"></div>
      <div class="container">
         <div class="row align-items-center">
            <div id="slider">
               <figure>
                  <img src="./image/ps4.png" alt= "image ps4">
                  <img src="./image/switch.png" alt= "image swicht">
                  <img src="./image/xboxone.png" alt= " image xbox">
               </figure>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <br/>
         <h1>Rechercher vidéo sur dailymotion (récupération de l'api )</h1>
         <div class="row align-items-center">
            <div class="col"></div>
            <div class="col">
        
               <div class="input-group" >
                  <input type="text" class="form-control" id="formulaire" placeholder="rechercher une video">
                  <span class="input-group-btn"><button class="btn btn-primary" type="button" name="motcle"  id ="motcle">valider</button></span>
               </div>
            </div>
            <div class="col"></div>
         </div>
         <hr/>

       <script src="daily.js"></script>
         
         <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
               <ul class="pagination">
                  <li class="page-item">
                     <a class="page-link" href="#" aria-label="Previous">
                     <span aria-hidden="true">&laquo;</span>
                     <span class="sr-only">Previous</span>
                     </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item">
                     <a class="page-link" href="#" aria-label="Next">
                     <span aria-hidden="true">&raquo;</span>
                     <span class="sr-only">Next</span></a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <?php
         include'foot.php';
         ?>
   </body>
</html>