
<?php
require 'vendor/autoload.php';
use Stichoza\GoogleTranslate\TranslateClient;

?>
<html>
<head>
  <title>Arabic Translation</title>
  <link rel="icon" href="images/arabic-icon.png">
  <link rel="stylesheet" href="bulma/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  <style >
    @font-face {
      font-family: Roboto;
      src: url(font/RobotoMono-Medium.ttf);
    }

  </style>
</head>

<body>

  <!-- kode session -->
  <?php
  if (isset($_POST['translate'])):
    // code...
    $_SESSION['pos'] = $_POST;
  endif;

  if (isset($_SESSION['pos']['id'])):
    // code...
    $teks = $_SESSION['pos']['id'];
  elseif (isset($_SESSION['pos']['ar'])):
    // code...
    $teks = $_SESSION['pos']['ar'];
  else:
    $teks = '';
  endif;

   ?>

  <section class="hero is-primary is-bold" style="margin-bottom:10px;">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Arabic Translation
      </h1>
      <h2 class="subtitle">
        Selamat Datang
      </h2>
    </div>
  </div>
</section>

  <div class="container">

    <form method="post" action="">
      <div class="columns">

        <div class="column">
          <div class="media" style="margin-bottom: 10px;">
            <div class="buttons has-addons" id="divBtn">
              <a class="button is-info is-selected" id="btn-ind" onclick="functionInd()" >Indonesia</a>
              <a class="button" id="btn-ar" onclick="functionArb()">Arab</a>
            </div>

          </div>

          <textarea class="textarea is-info" id="textareaLang" name="id">
            <?php echo $teks; ?>
          </textarea>

          <p class="content is-small" >Ketik teks atau <a href="#" >Terjemahkan file <i class="fa fa-upload" aria-hidden="true" style="padding-left: 3px;"></i></a></p>

          <p id="demo">TEST JS!</p>

          <?php
          //Parse pdf file and build necessary objects.
          $parser = new \Smalot\PdfParser\Parser();
          $pdf    = $parser->parseFile('pdffile/document.pdf');

          $text = $pdf->getText();
          echo $text;
            ?>


        </div>

        <div class="column">

          <div class="media" style="margin-bottom: -15px;">

              <div class="buttons has-addons is-left">
                <a class="button" id="btn-ind2">Indonesia</a>
                <a class="button is-info is-selected" id="btn-ar2">Arab</a>
              </div>
              <div class="buttons" style="margin-left: 30px;">
                <button class="button is-info" id="translate" name="translate" onclick="myFunction()">Terjemahkan</button>
              </div>

          </div>

          <textarea class="textarea is-success">
            <?php
                if(isset($_POST['translate'])){
                    // $sourceLang = "id";
                    // $targetLang = "ar";
                    if (isset($_POST['id'])) {//jika yg dipilih bahasa Indonesia
                      // code...
                      $sourceText = $_POST['id'];
                      $tr = new TranslateClient("id","ar");
                      $tr->setUrlBase('https://translate.googleapis.com/translate_a/single');
                      $hasil = $tr->translate($sourceText);
                      echo "$hasil";
                    }
                    elseif (isset($_POST['ar'])) {//jika yg dipilih bahasa Arab
                      // code...
                      $sourceText = $_POST['ar'];
                      $tr = new TranslateClient("ar","id");
                      $tr->setUrlBase('https://translate.googleapis.com/translate_a/single');
                      $hasil = $tr->translate($sourceText);
                      echo "$hasil";
                    }
                }
                ?>
          </textarea>

          <button class="button is-small" style="margin-top: 5px; float: right;"><i class="fa fa-edit"></i> Saran edit</button>

          <!-- <p id="demo"></p> -->

        </div>
      </div>

    </form>

  </div>
  <script src="main.js"></script>
</body>
</html>
