
<?php
require 'vendor/autoload.php';
use Stichoza\GoogleTranslate\TranslateClient;
?>
<html>
<head>
    
</head>
    
<body>
    <form method="post" action="">
        <h2>Indonesia</h2>
        <textarea id="id" name="id">
        
        </textarea>
        
        <h2>Arab</h2>
        
        <textarea id="ar" name="ar">
        
        </textarea>
        <button id="translate" name="translate">Terjemahkan</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['translate'])){
        $sourceLang = "id";
        $targetLang = "ar";
        $sourceText = $_POST['id'];
        $tr = new TranslateClient("id","ar");
        $tr->setUrlBase('https://translate.googleapis.com/translate_a/single');
        
        echo $tr->translate($sourceText);
    

    }
