<?php
// 檢查是否有提交的表單數據
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 獲取數量
    $burger_qty = isset($_POST['burger_qty']) ? intval($_POST['burger_qty']) : 0;
    $fries_qty = isset($_POST['fries_qty']) ? intval($_POST['fries_qty']) : 0;
    $coke_qty = isset($_POST['coke_qty']) ? intval($_POST['coke_qty']) : 0;
    $salad_qty = isset($_POST['salad_qty']) ? intval($_POST['salad_qty']) : 0;

    // 定義單價
    $burger_price = 100;
    $fries_price = 50;
    $coke_price = 30;
    $salad_price = 70;

    // 計算總金額
    $total = ($burger_qty * $burger_price) + 
             ($fries_qty * $fries_price) + 
             ($coke_qty * $coke_price) + 
             ($salad_qty * $salad_price);

    // 顯示訂單結果
    echo "<h1 style='text-align: center;'>訂單確認</h1>";
    echo "<table style='margin: auto; border-collapse: collapse; width: 50%;'>";
    echo "<thead><tr><th>菜品</th><th>數量</th><th>單價</th><th>小計</th></tr></thead>";
    echo "<tbody>";

    if ($burger_qty > 0) {
        echo "<tr><td>漢堡</td><td>{$burger_qty}</td><td>{$burger_price}元</td><td>" . ($burger_qty * $burger_price) . "元</td></tr>";
    }
    if ($fries_qty > 0) {
        echo "<tr><td>薯條</td><td>{$fries_qty}</td><td>{$fries_price}元</td><td>" . ($fries_qty * $fries_price) . "元</td></tr>";
    }
    if ($coke_qty > 0) {
        echo "<tr><td>可樂</td><td>{$coke_qty}</td><td>{$coke_price}元</td><td>" . ($coke_qty * $coke_price) . "元</td></tr>";
    }
    if ($salad_qty > 0) {
        echo "<tr><td>沙拉</td><td>{$salad_qty}</td><td>{$salad_price}元</td><td>" . ($salad_qty * $salad_price) . "元</td></tr>";
    }

    echo "<tr><td colspan='3' style='text-align: right;'><strong>總金額：</strong></td><td><strong>{$total}元</strong></td></tr>";
    echo "</tbody></table>";
} else {
    // 如果不是通過表單提交，顯示錯誤信息
    echo "<h1 style='text-align: center;'>請通過表單提交訂單</h1>";
}
?>