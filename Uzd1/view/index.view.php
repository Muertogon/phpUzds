<?php
include "data/data.php";
require_once('./ascii_table.php');
$ascii_table = new ascii_table();
$tab = $data;
for ($i=0;$i<sizeof($tab);$i++) {
    krsort($tab[$i]);
}
?>
<body>
    <pre>
        <?php
        $table = $ascii_table->make_table($tab, " ", True);
        echo $table;
        ?>
    </pre>
</body>

