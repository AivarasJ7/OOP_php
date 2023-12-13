<?php
include "Book.php";
include "Plant.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
<!-- Sukurti klasę Book.
Properties: title, pages, releaseYear
visi properties turi būti inkapsuliuoti.
sukurti 3 objektus su reikšmėmis naudojantis tuščiu konstruktoriu, ir tris naudojantis pilnu konstuktoriu.
sudėti juos į knygų masyvą.
prasukti ciklą per masyvą ir atspausdinti knygas (naudojam getterius) -->
<?php
$book1 = new Book();
$book2 = new Book();
$book3 = new Book();

$book4 = new Book("Fight Club" , 224, 1996);
$book5= new Book("American Psycho", 399, 1991);
$book6 = new Book ("Facebook", 100, 2009);

$books = [$book1, $book2, $book3, $book4, $book5, $book6];

//echo "Title: " . $book->getTitle() . ", Pages: " . $book->getPages() . ", Release Year: " . $book->getReleaseYear() . "\n";
// Iprastas way

foreach($books as $book){
    echo  "<br><br> Title:  {$book->getTitle()}, Pages: {$book->getPages()}, Release Year: {$book->getReleaseYear()}\n ";
     // String interpolation
}

// Klasės laukai:
// Pavadinimas
// lotyniskas pavadinimas
// boolean vienmetis
// kokiam zemyne auga
// suaugusio augalo aukstis metrais. 
// ar valgomas?

// Maine susikuriam masyvą saugoti augalams. sukuriame 2 augalus su tuščiu, ir 2 su pilnu konsturktorium.

// prasukti ciklą ir atspausdinti augalus

$plant1 = new Plant();
$plant2 = new Plant();
$plant3 = new Plant("Rose", "Rosa", true, "Europe", 0.1, false);
$plant4 = new Plant("Rose", "Ananas comosus", false, "South America", 1.5, true);

$plants= [$plant1, $plant2, $plant3, $plant4];

foreach ($plants as $plant) {
    echo "<br><br> 
    Name: {$plant->getName()}, 
    Latin Name: {$plant->getLatinName()},
    Annual: " . ($plant->isAnnual() ? 'Yes' : 'No') . ", 
    Region: {$plant->getGrowingRegion()},
    height: {$plant->getHeight()} meters,
    Edible: " . ($plant->isEdible() ? 'Yes' : 'No') . "\n";
}
?>
</body>
</html>