<p>
        <?php
        $score = [
            '国語' => 80,
            '数学' => 55,
            '理科' => 70,
            '社会' => 85,
            '英語' => 60
        ];

        echo '合格した科目は以下のとおりです。<br>';

        foreach ($score as $key => $value) {
            // 変数$valueの値（点数）が70より小さければ、キー（科目名）と値（点数）を出力せずにcontinue文で次のループに進む
            if ($value < 70) {
                continue;
            }

            echo "{$key}：{$value}点<br>";
        }
        ?>
    </p>
</body>

</html>