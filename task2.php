<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="static/styles/style_task2.css">
<?php
require_once('task2.html');
$main_file = $_FILES['file']['tmp_name'];

$arr = array();

// if ( ($file = fopen($main_file, "r")) !== false){
//     while (($str = fgetcsv($file, 200, ";")) !== false){
//         $arr = array_merge($arr, $str);
//     }
// }

if (($file = fopen($main_file, "r")) !== false){
    while (($str = fgetcsv($file, 200, ";")) !== false){
        array_push($arr, $str);
    }
}

?>

<div class="container">
    <?php foreach($arr as $item): ?>
        <div class="row">
            <?php foreach ($item as $i): ?>
                <div class="col-md-3"><?= $i ?></div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

</div>








<!-- // $files = array(
//     array('Фамилия','Имя','Отчество','Телефон'),
//     array('Иванов','Иван','Иванович','89094432126'),
//     array('Баранов','Евгений','Сергеевич','89116328493'),
//     array('Березин','Евгений','Викторович','89113675552')
// );

// $file = fopen('static/files/file.csv', 'w');

// foreach($files as $i){
//     fputcsv($file, $i, ";");
// }

// fclose('file.csv'); -->