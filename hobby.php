<?php
$song1  = ['id' =>  1, 'name' => 'One Love'];
$song2  = ['id' =>  2, 'name' => 'Get Up Stand Up'];
$song3  = ['id' =>  3, 'name' => 'I Shot The Sheriff'];
$song4  = ['id' =>  4, 'name' => 'NO Woman No Cry'];
$song5  = ['id' =>  5, 'name' => 'One Drop'];
$song6  = ['id' =>  6, 'name' => '24K Magic'];
$song7  = ['id' =>  7, 'name' => 'The Lazy Song'];
$song8  = ['id' =>  8, 'name' => 'Chunky'];
$song9  = ['id' =>  9, 'name' => 'Thats What I Like'];
$song10 = ['id' => 10, 'name' => 'Count On Me'];
$song_re  = [$song1, $song2, $song3, $song4,  $song5];
$song_POP = [$song6, $song7, $song8, $song9, $song10];
$reggae   = ['id' => 1, 'name' => 'Bob Marley',     'singer' => $song_re];
$POP      = ['id' => 2, 'name' => 'Bruno Mars', 'singer' => $song_POP];
$musics = ['genre' => [$reggae, $POP]];


echo $musics['genre'][0]['singer'][0]['name'];

// echo "<pre>";
// var_dump($musics);
// echo "</pre>";


