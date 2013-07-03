<html>
<form method="post">
<input name="url" size="50" />
<input name="submit" type="submit" />
</form>
<?php

if (!isset($_POST['submit'])) die();

$destination_folder = 'downloads/';

$url = $_POST['url'];

$filename = $destination_folder . basename($url);



// maximum execution time in seconds
	set_time_limit (0);

    $ch = curl_init();
    $fh = fopen($filename, 'wb');

    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE );
    curl_setopt($ch, CURLOPT_FILE, $fh);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);

    if(curl_exec($ch) === false)
    {
        echo 'Curl error: ' . curl_error($ch) . "\n";
    }
    else
    {
        echo 'Operation completed without any errors';
    }

    $response = array(
        'header' => curl_getinfo($ch)
    );

    curl_close($ch);
    fclose($fh);

    if($response['header']['http_code'] == 200) {
        echo "File downloaded and saved as " . $filename . "\n";
    }
	





// folder to save downloaded files to. must end with slash

/*
$file = fopen ($url, "rb");
if ($file) {
  $newf = fopen ($newfname, "wb");

  if ($newf)
  while(!feof($file)) {
    fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
  }
}

if ($file) {
  fclose($file);
}

if ($newf) {
  fclose($newf);
}
 * 
 */

?>
</html> 