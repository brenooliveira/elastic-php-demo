<?php
  require 'vendor/autoload.php';
  $client = Elasticsearch\ClientBuilder::create()->build();
  $json = '{
      "query" : {
          "match" : {
              "tags" : "metrics"
          }
      }
  }';
  $params = [
      'index' => 'tips',
      'type' => 'tip',
      'body' => $json
  ];
  $responses = $client->search($params);
?>
<pre>
  <?= print_r($responses) ?>
</pre>
