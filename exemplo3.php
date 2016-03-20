<?php
  require 'vendor/autoload.php';

  $client = Elasticsearch\ClientBuilder::create()
            ->build();
  for($i = 0; $i < 100; $i++) {
      $params['body'][] = [
          'index' => [
              '_index' => 'jobs',
              '_type' => 'job',
          ]
      ];

      $params['body'][] = [
          'title' => 'Job position '. $i,
          'email' => 'email-'. $i . '@gmail.com'
      ];
  }

  $responses = $client->bulk($params);
?>
<pre>
  <?= print_r($response) ?>
</pre>
