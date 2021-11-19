<?php
function tinhTong($a, $b)
{
    return $a + $b;
}

echo tinhTong(1, 2) . '<br>';

$iLength = 5;

echo "Length = " . $iLength . '<br>';

echo "For:" . "<br>";
for ($i = 0; $i < $iLength; $i++) { 
    echo 'i = ' . $i . '<br>';
}

echo "While:" . "<br>";
$a = 1;
while ($a <= 10) {
    echo 'a = ' . $a . '<br>';
    $a++;
}

echo "Do While:" . "<br>";
$b = 15;
do {
    echo 'b = ' . $b . '<br>';
    $b++;
} while ($b <= 20);

/*
Ngon ngu bien dich.
C/C++:
int iLength = 5;
for (khoi tao; dieu kien lap; buoc lap)
C: printf("Ahihi");
C++: cout << "Ahihi";
void ten_thu_tuc(danh sach tham so)
{

}

<kieu du lieu tra ve> ten_ham(danh sach tham so)
{

}

C#: int iLength = 5;

Ngon ngu thong dich:
PHP:
$iLength = 5;
for(khoi tao; dieu kien lap; buoc lap)
echo "Ahihi" hoac echo 'Ahihi'
function ten_ham(danh sach tham so)

Python: iLength = 5
*/

