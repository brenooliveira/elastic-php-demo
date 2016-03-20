<?php
  require 'vendor/autoload.php';
  $client = Elasticsearch\ClientBuilder::create()->build();
  $json = '{
    "my-suggestion" : {
      "text" : "Elastiscearch",
      "term" : {
        "field" : "tip"
      }
    }
  }';
  $params = [
     'index' => 'tips',
     'body' => $json
 ];
 $response = $client->suggest($params);
?>
<pre>
  <?= print_r($response) ?>
</pre>
