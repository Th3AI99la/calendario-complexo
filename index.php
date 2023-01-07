<body background ="https://relogioonline.com.br/horario/bras%C3%ADlia/image.png">
    
<?php 

echo  "Thalles Henrique Alves de Souza <br>";


$d = mktime (0,0,0,19,12,2022);

echo "Data/Mês/Ano/Hora: " .date ('d/m/y H:i:s') ."<br>";
echo "Hoje é dia: " .date ('d/m/Y') . "<br>";
echo "Hoje é dia: " .date ('d/m/y') . "<br>";
echo "agora são: " .date ('h:i:s') . "<br>";
echo "agora são: " .date ('h:i:s a') . "<br>";
echo "agora são: " .date ('h:i:s A') . "<br>";
echo "dia da semana: " .date ('l') . "<br>";
echo "nome do mês: " .date ('F') . "<br>";
echo "Faltam " . 6 - date ('w') . "dias para sábado <br>";
echo "Faltam " . 7 - date ('w') . "dias para domingo <br>";





?>
</body>