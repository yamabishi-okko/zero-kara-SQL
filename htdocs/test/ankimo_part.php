<pre>
    <?php
        $ankimo = array(
            "紫煉さん" => array(
                "part" => "guiter",
                "from" => "神奈川県平塚市"
            ),
            "ふっきー" => array(
                "part" => "vocal",
                "from" => "東京都八王子市"
            ),
            "小川くん" => array(
                "part" => "bass",
                "from" => "北海道旭川市"
            ),
            "仁耶くん" => array(
                "part" => "guitar",
                "from" => "栃木県宇都宮市"
            ),
            "じるさん" => array(
                "part" => "violin",
                "from" => "長野県長野市"
            ),
            "ふーみん" => array(
                "part" => "drum",
                "from" => "北海道川上郡弟子屈町"
            ),
        );
        var_dump($ankimo);

        // あんきもの中身（６人の情報）を一人ずつ取り出し、キー（紫煉さん、フッキーなどキー）を$nameに代入
        // 値（"part"=>"guiter", "from"=>"神奈川県平塚市"）を$infoに入れる
        // $ankimo の中身を1件ずつ見る
        // 「キー」を $name に入れる（＝メンバーの名前）
        // 「値」を $info に入れる（＝その人のプロフィール配列）
        foreach ($ankimo as $name => $info) { 
            // 下記が繰り返す内容
            echo $name."の担当パートは".$info["part"]."で出身は".$info["from"]."です。<br>";
        };

        // 💬 まとめ表
        //     要素	             意味
        //     $ankimo	        全メンバーをまとめた配列
        //     $name	        メンバーの名前（外側のキー）
        //     $info	        その人の情報（内側の連想配列）
        //     $info["from"]	出身地
        //     $info["part"]	パート（楽器）
        //     foreach	        配列を1件ずつ順番に処理するしくみ


        foreach ($ankimo as $name => $info) {
            // 出身地が「北海道」で始まっていたら表示する
            if (strpos($info["from"], "北海道") === 0) {
                echo "メンバーの中でも".$name."は北海道出身です。<br>";
            }
        };
    ?>
</pre>