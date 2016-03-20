<?php
  require 'vendor/autoload.php';
  $client = Elasticsearch\ClientBuilder::create()
            ->build();

  $params = array();
  $params['index'] = 'tips';
  $params['type'] = 'tip';
  $params['id'] = '2';
  $result = $client->get($params)
?>
<pre>
  <?= print_r($result); ?>
</pre>
