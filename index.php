<?php
$iLength = 5;

echo "Length = " . $iLength;

for ($i = 0; $i < $iLength; $i++) { 
    echo 'i = ' . $i;
}

$a = 1;
while ($a <= 10) {
    echo 'a = ' . $a;
    $a++;
}

$b = 15;
do {
    echo 'b = ' . $b;
    $b++;
} while ($b <= 20);

/*
Ngon ngu bien dich.
C/C++:
int iLength = 5;
for (khoi tao; dieu kien lap; buoc lap)
C: printf("Ahihi");
C++: cout << "Ahihi";


C#: int iLength = 5;

Ngon ngu thong dich:
PHP:
$iLength = 5;
for(khoi tao; dieu kien lap; buoc lap)
echo "Ahihi" hoac echo 'Ahihi'

Python: iLength = 5
*/

