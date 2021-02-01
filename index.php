<!-- 
  Istruzioni:
Riscrivere questa pagina del sito google
https://policies.google.com/faq. 
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
-->

<!-- Collego il file db.php esternamente. Per fare questo posso servirmi di-
include o di reuire.
require è identico a include, tranne che in caso di errore produrrà anche un errore irreversibile di livello E_COMPILE_ERROR. In altre parole, interromperà lo script mentre include emette solo un avviso (E_WARNING) che consente allo script di continuare.-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domande frequenti</title>

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 

<!-- php  -->

  <?php include 'db.php';?>

  <!-- sass/scss -->
  <link rel="stylesheet" href="./public/assets/css/style.css">
</head>
<body>
  <header>
    <nav>
      <div class="nav-top">
        <img src="./assets/img/logo.png" alt=""><span>Privacy & Termini</span>
      </div>
      <!-- /.nav-top -->
      <div class="nav-bottom">
        <ul class="items">
        <?php 
          foreach ($nav['items'] as $key => $item) {?>
            <li class="item"><a href=""><?php echo ucfirst($item); ?></a></li>
            <?php } ?>              
          </ul>
      </div>
      <!-- /.nav-top -->
    </nav>
  </header>
  <main>
    <div class="faqs">
      <?php
        foreach ($db as $key => $faq) {?>

          <h2 class="question"><?php echo $faq['question']; ?></h2>
          <ul class="answers">
            <?php
              //var_dump($faq['answers']);
              foreach ($faq['answers'] as $key => $answer) {?>
                <li class="answer"><p><?php echo $answer; ?></p></li>
            <?php }?>
          </ul>
        <?php }?>

    </div>
    <!-- /.faqs -->
  </main>
  <footer>
  
  </footer>
</body>
</html>