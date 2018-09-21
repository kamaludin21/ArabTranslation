
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

</head>

<body>
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
            <div class="buttons has-addons">
              <button class="button is-info is-selected">Indonesia</button>
              <button class="button">Arab</button>
            </div>
          </div>
          <textarea class="textarea is-info" id="id" name="id">

          </textarea>

          <p class="content is-small" >Ketik teks atau <a href="#" >Terjemahkan file <i class="fa fa-upload" aria-hidden="true" style="padding-left: 3px;"></i></a></p>
        </div>      
        <div class="column">

          <div class="media" style="margin-bottom: -15px;">

              <div class="buttons has-addons is-left">
                <button class="button">Indonesia</button>
                <button class="button is-info is-selected">Arab</button>
              </div>
              <div class="buttons" style="margin-left: 30px;">
                <button class="button is-info" id="translate" name="translate" onclick="myFunction()">Terjemahkan</button>
              </div>

          </div>

          <textarea class="textarea is-success" id="ar" name="ar">
            <?php
                if(isset($_POST['translate'])){
                    // $sourceLang = "id";
                    // $targetLang = "ar";
                    $sourceText = $_POST['id'];
                    $tr = new TranslateClient("id","ar");
                    $tr->setUrlBase('https://translate.googleapis.com/translate_a/single');
                    $hasil = $tr->translate($sourceText);
                    echo "$hasil";
                }
                ?>
          </textarea>

          <p id="demo"></p>

        </div>
      </div>

    </form>

  </div>
  <script type="text/javascript">
    function myFunction(){
      var indo = document.getElementById("id").value;
      var arab = document.getElementById("ar").value;

      document.getElementById("demo").innerHTML = indo;



    }
  </script>
</body>
</html>
