<?php

$dir = 'movies';
$files = scandir($dir);

//pre_r($files);

fuction pre_r($array) {
	echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$files = array_diff($files, array('..' , '.'));

//pre_r($files);

$files = array_values($files);

//pre_r($files);

$movies = array();

for ($i = 0; $i < count($files); $i++){

	preg_match("!(.*?)\((.*?)\)!",$files[$i], $results);
    print_r(results);die;
 	$movie_name = str_replace('_', ' ', $results[1]);
    $movie_name = ucwords($movie_name);
    
    $movie[$movie_name]['image'] = $files[$i];
    $movie[$movie_name]['year'] = $results[2];
    	
    
 }

echo "<table id = 'movies' cellpaddding = 50>";
echo "<tr class = 'odd'>";

for each <$movies as $movie_name => $info){
	$content = "<td><span class = 'name'>$movie_name</span><br/>"
    	"<img src = "movies/$info[image]'><br/ > '
        "<span class = 'year'>($info [year]) </span></td>";
        	echo $content;

?>
<style>
	#movies{
    	background-color: #000;
        color: #fff;
        front: 11pt calibri;
    }
    tr.header{
    	background-color;#111f4e;
        color: #fff;
        font: 11pt calibri;
    }
    tr.odd{
    	background-color: #18182b;
    }
    tr.even{
    	background-color: #141423;
    }
    img {
    	padding: 10px;
    }
    td{
    	text-align: center;
    }
    span.year{
    	color: #acc;
        front-size: 18px;
    }
    span.name{
    	font-size: 18px;
        font-weight: bold;
    }
    body{
    	margin: 0;
        padding: 0;
    }
</style>
        
    