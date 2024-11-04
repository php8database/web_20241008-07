<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 取得表單數據
    $hamburger = isset($_POST['hamburger']) ? intval($_POST['hamburger']) : 0;
    $fries = isset($_POST['fries']) ? intval($_POST['fries']) : 0;
    $cola = isset($_POST['cola']) ? intval($_POST['cola']) : 0;
    $salad = isset($_POST['salad']) ? intval($_POST['salad']) : 0;

    // 定義價格
    $prices = [
        'hamburger' => 100,
        'fries' => 50,
        'cola' => 30,
        'salad' => 70,
    ];

    // 計算總價
    $total = ($hamburger * $prices['hamburger']) +
             ($fries * $prices['fries']) +
             ($cola * $prices['cola']) +
             ($salad * $prices['salad']);

    // 顯示訂單詳情
    echo "<h1>訂單詳情</h1>";
    echo "<p>漢堡數量: $hamburger, 總價: $" . ($hamburger * $prices['hamburger']) . "</p>";
    echo "<p>薯條數量: $fries, 總價: $" . ($fries * $prices['fries']) . "</p>";
    echo "<p>可樂數量: $cola, 總價: $" . ($cola * $prices['cola']) . "</p>";
    echo "<p>沙拉數量: $salad, 總價: $" . ($salad * $prices['salad']) . "</p>";
    echo "<h2>總計: $$total</h2>";
} else {
    echo "<h1>請透過點餐表單提交訂單。</h1>";
}
?>
