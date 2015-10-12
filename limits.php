<?php

function github($url) {
  $url = "https://api.github.com/$url?access_token=<<ACCESSTOKENHERE>>";
  //
  $context = stream_context_create(
    array('http'=>array(
      'header'=>"User-Agent: Polymer-Magic-Server\r\n"
    ))
  );
  $contents = file_get_contents($url, false, $context);
  //
  return $contents;
}

echo github('rate_limit');

?>