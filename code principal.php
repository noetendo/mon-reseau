<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the gracin network</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
 
    <?php include_once('header.php'); ?>
        <h1>Contactez nous</h1>
        <form method="post" action="submit">
   <p>
       Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />
       <input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label><br />
       <input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />
       <input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />
       <input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40">Encore plus vieux que ça ?!</label>
       <form method="post" action="submit">
   
   </p>
   <p>
       Sur quel continent habitez-vous ?<br />
       <input type="radio" name="continent" value="europe" id="europe" /> <label for="europe">Europe</label><br />
       <input type="radio" name="continent" value="afrique" id="afrique" /> <label for="afrique">Afrique</label><br />
       <input type="radio" name="continent" value="asie" id="asie" /> <label for="asie">Asie</label><br />
       <input type="radio" name="continent" value="amerique" id="amerique" /> <label for="amerique">Amérique</label><br />
       <input type="radio" name="continent" value="australie" id="australie" /> <label for="australie">Australie</label>
   </p>
</form>
  
     <form method="post" action="submit">
   <p>
       <label for="pays">Dans quel pays habitez-vous ?</label><br />
       <select name="pays" id="pays">
           <optgroup label="Europe">
               <option value="france">France</option>
               <option value="espagne">Espagne</option>
               <option value="italie">Italie</option>
               <option value="royaume-uni">Royaume-Uni</option>
           </optgroup>
           <optgroup label="Amérique">
               <option value="canada">Canada</option>
               <option value="etats-unis">Etats-Unis</option>
           </optgroup>
           <optgroup label="Asie">
               <option value="chine">中国:Chine</option>
               <option value="japon">日本:Japon</option>
           </optgroup>
        <optgroup label="océannie">
            <option value="australie">Australie</option>
            <option value="nouvelle zelande">Nouvelle Zelande</option>
           </optgroup>
       </select>
   </p>
</form>
   
</form>
   
</form>

   
</form>
<form method="post" action="submit">
   <p>
       <label for="ameliorer">
       <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
            </div>
         

       <br />
       <input type="radio" name="vous aimés mon sit" value="vous amais mon sit" id="vous amais mon sit" /> <label for="vous amais mon sit">vous amais mon sit</label><br />
       <input type="radio" name="vous aimés pas mon sit" value="vous amais pas mon sit" id="vous amais pas mon sit" /> <label for="vous amais pas mon sit">vous amais pas mon sit</label><br />

   </p>
   
   <form method="post" action="submit">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
        <br />
    
        
    <?php include_once('footer.php'); ?>
</body>
</html>