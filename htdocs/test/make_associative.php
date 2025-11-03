<pre>
<?php
  // array関数で連想配列を作成する
  $result1 = array(
    "Japanese" => 80,
    "math" => 75,
    "science" => 90
  );
  var_dump($result1);
  // []で配列を作成する
  $result2 = [
    "history" => 85,
    "English" => 80
  ];
  var_dump($result2);
  $birthday = [
    "紫煉さん" => 3.10,
    "ふっきー" => 6.9,
    "仁耶くん" => 7.8,
    "小川くん" => 3.24,
    "ふーみん" => 12.18,
    "Jillさん" => 2.17,
    "歌澄さん" => null,
  ];
  var_dump($birthday);

  $result2["English"] =45;
  var_dump($result2);

?>
</pre>

