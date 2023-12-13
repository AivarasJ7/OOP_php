<?php
// 1.Sukurti klasę Book.
// Properties: title, pages, releaseYear
// visi properties turi būti inkapsuliuoti.
// sukurti 3 objektus su reikšmėmis naudojantis tuščiu konstruktoriu, ir tris naudojantis pilnu konstuktoriu.
// sudėti juos į knygų masyvą.
// prasukti ciklą per masyvą ir atspausdinti knygas (naudojam getterius) 

class Book
{
    private $title;
    private $pages;
    private $releaseYear;

    public function __construct($title = "", $pages = 0, $releaseYear = 0){
        $this->title = $title;
        $this->pages = $pages;
        $this->releaseYear = $releaseYear;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPages(){
        return $this->pages;
    }

    public function getReleaseYear(){
        return $this->releaseYear;
    }
}
?>

