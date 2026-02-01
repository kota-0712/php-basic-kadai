<!--======== 前略 ========-->

    <p>
        <?php
        // 与えられた引数$priceに送料を加算し、その値を出力する関数を定義する
        function calculate_total($price) {
            $total = $price + 500;

            echo $total . '円<br>';
        }

        // 関数を呼び出し、引数として購入金額を渡す
        calculate_total(1200);

        // 与えられた引数$priceと引数$shipping_feeを加算し、その値を出力する関数を定義する
        function add_two_arguments($price, $shipping_fee) {
            $total = $price + $shipping_fee;

            echo $total . '円<br>';
        }

        // 関数を呼び出し、引数として購入金額と送料を渡す
        add_two_arguments(1200, 500);
        ?>
    </p>
    <p>
        <?php
        // 与えられた引数$numを2倍にし、その値を戻り値として返す関数を定義する
        function double($num) {
            return $num * 2;
        }

        // 関数の戻り値を出力する        
        echo double(30);
        ?>
    </p>
</body>

</html>