<?php

$bdd = new PDO("mysql:host=b69cefb56b98;port=3306;dbname=fitandfastbyewa", 'ewa', 'ew1986');
$bdd->query ('SET NAMES utf8');
$bdd->query ('SET CHARACTER_SET utf8_unicode_ci');

$xmlData = file_get_contents('blog.xml');
$posts = new SimpleXMLElement($xmlData);
foreach($posts->entry as $post){
  $published = (array)$post->published;
  $categories = (array)$post->category;
  $title = (array)$post->title;
  $content = (array)$post->content;

#description
  preg_match('/<div class="caption">(.*)<\/div><\/div><a name=\'more\'>/s',$content[0],$description);
  if(isset($description[0])) {
    $description = trim($description[0]);
  }

#prdukty
  preg_match('/<ul>(.*)<\/ul>/s',$content[0],$produkty);
  if(isset($produkty[1])) {
    $produkty = explode('<li>', $produkty[1]);
    foreach($produkty as $produkt) {
      $produkt = str_replace([',', '.', '</li>'],'',$produkt);
      $produkt = explode(' ', $produkt);
      $count = '';
      $unit = '';
      if ((int)$produkt[0] > 0) {
        $count = $produkt[0];
        unset($produkt[0]);
      }

      if(isset($produkt[1]) && in_array($produkt[1], ['litra', 'litr', 'łyżka', 'łyżeczka', 'g', 'kg', 'ml'])) {
        $unit = $produkt[1];
        unset($produkt[1]);
      }

      $produkt = trim(implode(' ', $produkt));
    }
  }

#przygotowanie
  preg_match(
    '/<h3 style="background-color: white; box-sizing: border-box; color: #2b2b2b; font-size: 25px; font-weight: normal; margin: 20px 0px; text-align:' .
    ' justify;">Przygotowanie<\/h3><div style="text-align: justify;">(.*)<\/div>  <div class="widget AdSense"/s',$content[0],$recipe);
    if(isset($recipe[1])) {
      $recipe = trim($recipe[1]);


    $createDate = date('Y/m/d', strtotime($published[0]));
    $name = strtolower(str_replace(' ', '-', $title[0]));

#zdjęcia
/*$pattern = '/src=[\"\']?([^\"\']?.*(JPG|jpg|jpeg|JPEG))[\"\'](title)?/i';

preg_match_all('/<img(.*?)src=("|\'|)(.*?)("|\'| )(.*?)>/s', $content[0], $images);

if(isset($images[3])) {
  foreach($images[3] as $index => $image) {
      if(preg_match('/(s400)/', $image)) {
        $file = file_get_contents(str_replace('s400','s1600',$image));
        $path = './public/images/przepisy/' . $createDate . '/' . $name;
        if(!is_dir($path)){
          mkdir($path, 0777,true);
        }
        file_put_contents($path . '/' .$index . '.jpg', $file);
      }
  }
  }*/
  $sql = "INSERT INTO recipe(title, url, description, recipe, createdate, active, title_variety) VALUES (:title, :url, :description, :recipe, :createdate, :active, :title_variety)";
  $req = $bdd->prepare($sql);
  $req->execute([
    'title' => $title[0],
    'url' => $name,
    'description' => $description,
    'recipe' => $recipe,
    'createdate' => $published[0],
    'active' => 1,
    'title_variety' => $name
  ]);
  var_dump('dodane ' . $title[0]);
} else {
  var_dump($title[0]);
}
}
