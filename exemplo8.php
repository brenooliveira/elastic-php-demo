<?php
  require 'vendor/autoload.php';
  $client = Elasticsearch\ClientBuilder::create()->build();
  $json = '{
    "query" : {
      "more_like_this" : {
        "like_text" : "In production",
        "min_term_freq" : 1,
        "min_doc_freq" : 1
      }
    }
  }';
  $params = [
     'index' => 'tips',
     'type'  => 'tip',
     'body' => $json
 ];
 $response = $client->search($params);
?>
<pre>
  <?= print_r($response) ?>
</pre>
