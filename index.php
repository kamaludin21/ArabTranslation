
<?php
require 'vendor/autoload.php';
use Stichoza\GoogleTranslate\TranslateClient;
?>
<html>
<head>
  <link rel="stylesheet" href="bulma/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</head>

<body>
  <div class="container">
    <form method="post" action="">
      <div class="columns">
        <div class="column">
          <h3>Indonesia</h3>
          <textarea class="textarea is-info" id="id" name="id">

          </textarea>

        </div>
        <div class="column">

          <div class="media">
            <div class="media-left">
              <h5>Arab</h5>
            </div>
            <div class="media-right">
              <button class="button is-info is-small" id="translate" name="translate" onclick="myFunction()">Terjemahkan</button>
            </div>
          </div>

          <textarea class="textarea is-success" id="ar" name="ar">
            <?php
                if(isset($_POST['translate'])){
                    $sourceLang = "id";
                    $targetLang = "ar";
                    $sourceText = $_POST['id'];
                    $tr = new TranslateClient("id","ar");
                    $tr->setUrlBase('https://translate.googleapis.com/translate_a/single');
                    echo $tr->translate($sourceText);
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
      var arab = document.getElementById("ar");

      document.getElementById("demo").innerHTML = indo;



    }
  </script>
</body>
</html>
