
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>the gracin network</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
        >
</link> 
    </head>
    <body>
        <div class="container">
    
        <?php include_once('header.php'); ?>
            <h1>Message bien reçu !</h1>
            
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
                </div>
            </div>
        </div>
    </body>
</html>