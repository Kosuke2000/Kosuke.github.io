<?php
require_once('food.php');


$kani = new Menu('1', '越前ガニ', 'https://2.bp.blogspot.com/-DnIgW2vI6Ac/VNrMcH9WmoI/AAAAAAAArgc/jc4d2hDEixc/s800/kani_zuwai.png', '映えある1位に選ばれたのは、越前ガニ！冬の時期に県内の漁港で水揚げされます。高級品ですが、そのプリプリで甘い身と濃厚なミソの虜になり、冬になるとついつい買ってしまう福井県民を多数目撃します。国内でも、皇室に献上される唯一の蟹で、まさに福井を代表する食材と言えるでしょう！(ちなみに越前というのは、昔の福井の呼称です。)');
$katu = new Menu('2', 'ソースカツ丼', 'https://4.bp.blogspot.com/-Q8Hn3DAiUNI/WerKwSqbtlI/AAAAAAABHqs/xEUd5SejXukrfmNeo8N2lTj_fiaCJK0jgCLcBGAs/s800/food_tarekatsudon.png', '第二位は、ソースカツ丼！ソースのかかった薄めのカツは、魅惑のしっとりパリ食感。そのカツは、丼鉢の蓋が閉まらなくなるくらいご飯の上に積み上げられます。一口食べれば、もう止まらない。休日になると、有名店には長蛇の列ができるほど、老若男女から愛される福井のソウルフードです。');
$soba = new Menu('3', 'おろしそば', 'https://2.bp.blogspot.com/-L8bIJqk7nlE/VWmAncCZXmI/AAAAAAAAtys/MOlwl3p2s6c/s800/food_soba_oroshi.png', '第三位は、おろしそば！地味？なんてことないんです。大根おろしのピリッとした辛みと芳醇なそばの香りが口いっぱいに広がった瞬間、おいしさのあまりあなたはもう呼吸ができなくなるでしょう。これはもはや食の芸術。クセになったら最後、あなたは毎年そばだけのために福井を訪れることになります。');

$foods = array($kani, $katu, $soba);

?>