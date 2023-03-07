<?php 

require_once __DIR__ . '/../model/movie.php';
require_once __DIR__ . '/../model/genre.php';

//GENERI:
$azione = new Genre ('azione');
$comico = new Genre ('comico');


$pirati_dei_caraibi_1 = new Movie ('La maledizione della prima luna', 2003, 'inglese' , $azione, 'Gore Verbinski' );
$pirati_dei_caraibi_2 = new Movie ('La maledizione del forziere fantasma', 2006, 'inglese' ,  $comico , 'Gore Verbinski' );
$pirati_dei_caraibi_3 = new Movie ('Ai confini del mondo', 2007, 'inglese' , $azione, 'Gore Verbinski' );
$pirati_dei_caraibi_4 = new Movie ('Oltre i confini del mare', 2011, 'inglese' ,  $comico, 'Rob Marshall' );
$pirati_dei_caraibi_5 = new Movie ('La vendetta di Salazar', 2017, 'inglese' , $azione, 'Joachim Ronning e Espen Sandberg' );

$movies = [$pirati_dei_caraibi_1, $pirati_dei_caraibi_2, $pirati_dei_caraibi_3, $pirati_dei_caraibi_4, $pirati_dei_caraibi_5 ];
?>