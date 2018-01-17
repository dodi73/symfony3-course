<?php

//Névtér beállítása az Entity útvonalra:
namespace AppBundle\Entity;

//ORM osztály beemelése, állnévvel:
use Doctrine\Orm\Mapping as ORM;

//Adatbázis táblák neveinek definiálása annotációkkal, korábban a routing szabályokat és a
//metódusokat is ezzel adtuk meg. product a tábla neve.
/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */


//Osztály neve megeggyezik a file névvel
class Product
{
    //Megadjuk, hogy kell kinéznie az ID-nek, ezt is itt adjuk meg, nem az adatbázisban.
    //Ez azért jó, hogy itt adjuk meg, mert lehet szerkeszteni a táblát pl.: phpmyadmin-ban is
    //és pl. itt is a php kódban, és így könnyen összeakadthat. Ez az úgynevezett
    // ModelFirst metódus ami most bemutatásra kerül, azaz minden beállítás a PHP-ban van, és ha, van
    // változás egyetlen parancsal lehet frissíteni innen. Ez azért jó, mert ha valaki változtat
    // ezen a php file-on és fent van a GIT-en, akkor ezt a többiek letöltik és indítanak egy update-t.
    // Mindenkinek így ugyanaz az adatbázisa lesz.

    //változók protected típusúak, kívülről nem elérhetőek. Ezért mindegyikhez kellkészítenünk
    // Getter és Setter metódusokat:

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $price;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $manufacturer;


    // Getter metódusok a mezőkhöz, ezek állítják be az értékeket. A neveknek meg kell
    // egyezniük és CamelCase stílusúnak kell legyen pl.: getId .
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    //Setter metódusok megadása a mezőkhöz, kivétel az "Id", mert az automatikusan generálódik.

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

}