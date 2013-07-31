<?php
//Example of the input structure:
/*Array
(
    [sentences] => Array
        (
            [0] => Array
                (
                    [id] => 1
                    [text] => text1
                )

            [1] => Array
                (
                    [id] => 2
                    [text] => text2
                )

        )
)*/
$meta_data=array (
  'input' => array ('wraper'=> 'sentences', 'identifier'=> 'id', 'value'=>'text'),
  'output' => array ('origin'=> 'sentence_origin_', 'result'=> 'sentence_translation_'),
  'settings' => array ('message'=> 'Please translate the given text into italian language:')
  );
//IF YOU WANT TO CHECK HOW THE FORM LOOKS LIKE, uncomment:
/*$_POST= array (
  'sentences' => array (
    '0' => array ('id'=>1,'text'=>'text1'),
    '1' => array ('id'=>2,'text'=>'text2'))
  );
  */
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Translation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap3.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class='container'>
      <form>
        <h1><?=$meta_data['settings']['message']?></h1>
        <?php if (isset($_POST[$meta_data['input']['wraper']])){
          foreach($_POST[$meta_data['input']['wraper']] as $sentence){
            ?>
            <div>
              <h5>Origin:</h5>
              <textarea name="<?=$meta_data['output']['origin'].$sentence[$meta_data['input']['identifier']] ?>"><?=$sentence[$meta_data['input']['value']] ?></textarea>
              <h5>Translation:</h5>
              <textarea name="<?=$meta_data['output']['result'].$sentence[$meta_data['input']['identifier']] ?>">put here your translation</textarea>
            </div>
            <?
          }
        } 
        ?>
        <input type='submit' class='btn btn-primary' value='Save translations'>
      </form>
    </div>
    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap3.0/js/bootstrap.min.js"></script>
    <!-- On form submit - sends all the form data to the CrowdComputer via postMessage (cross window interaction) -->
    <script src="http://static.crowdcomputer.org/CC-JS-Generator/?type=send_all_to_crowdcomputer" type="text/javascript"></script>
  </body>
  </html>