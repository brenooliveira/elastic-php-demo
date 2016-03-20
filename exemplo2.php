<?php
  require 'vendor/autoload.php';

  $client = Elasticsearch\ClientBuilder::create()
            ->build();
  $params = [
     'index' => 'tips',
     'type' => 'tip',
     'id' => '2',
     'body' => [ 'tip' => 'Using Marvel to get metrics from Elasticsearch', 'tags' => ['protip', 'metrics'] ]
 ];

 // Documento indexado em tips/tip/2
 $response = $client->index($params);
?>
<pre>
  <?= print_r($response) ?>
</pre>
