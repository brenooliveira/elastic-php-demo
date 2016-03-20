<?php
  require 'vendor/autoload.php';
  $client = Elasticsearch\ClientBuilder::create()->build();
  $params = [
     'index' => 'tips',
     'type' => 'tip',
     'id' => '3',
     'body' => [ 'tip' => 'Wrong insert', 'tags' => ['missing', 'error', 'no_logs'] ]
 ];
 $response_insert = $client->index($params);
 $params = [
    'index' => 'tips',
    'type' => 'tip',
    'id' => '3'
 ];
 $responde_delete = $client->delete($params);
?>
<pre>
  <?= print_r($response_insert) ?>
  <hr>
  <?= print_r($responde_delete) ?>
</pre>
