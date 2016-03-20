<?php
  require 'vendor/autoload.php';
  $client = Elasticsearch\ClientBuilder::create()->build();
  $params = [
     'index' => 'tips',
     'type' => 'tip',
     'id' => '4',
     'body' => [ 'tip' => 'Loren Ipsum', 'tags' => ['lorem'] ]
 ];

 $response_insert = $client->index($params);
 $params = [
    'index' => 'tips',
    'type' => 'tip',
    'id' => '4',
    'body' => [
        'doc' => [
            'text' => 'lipsum generator'
        ]
    ]
 ];
 $response_update = $client->update($params);
 $params = [
   'index' => 'tips',
   'type' => 'tip',
   'id' => '4'
 ];
 $response_search = $client->get($params);
?>
<pre>
  <hr>
  <?= print_r($response_update) ?>
  <hr>
  <?= print_r($response_search) ?>
</pre>
