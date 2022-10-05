<?php
class Product{
    public $name, $price, $discount;
 
    function getName()
    {
       return $this->name;
    }
    function getPrice()
    {
       return $this->price;
    }
    function getDiscount()
    {
       return $this->discount;
    }
 
    function setName($name)
    {
       return $this->name = $name;
    }
    function setPrice($price)
    {
       return $this->price = $price;
    }
    function setDiscount($discount)
    {
       return $this->discount = $discount;
    }
 }
 class CDMusic extends Product
 {
    public $artist, $genre;
 
    function getArtist()
    {
       return $this->artist;
    }
    function getGenre()
    {
       return $this->genre;
    }
 
    function setArtist($artist)
    {
       return $this->artist = $artist;
    }
    function setGenre($genre)
    {
       return $this->genre = $genre;
    }
 
    // Menentukan Harga Per CD dan mendapatkan diskon
    function getPrice()
    {
        $harga = $this->price;
      $ppn = ((10 / 100) * $this->price);
      $discount = ((5 / 100) * $this->price);
      return ($harga + $ppn) - $discount;
   }
}

class CDRack extends Product
{
   public $capacity, $model;
   function getCapacity()
   {
      return $this->capacity;
   }
   function getModel()
   {
      return $this->model;
   }
   function setCapacity($capacity)
   {
      return $this->capacity = $capacity;
   }
   function setModel($model)
   {
      return $this->model = $model;
   }

   // Menentukan Harga Rack
   function getPrice()
   {
      $harga = $this->price;
      $tambahan = ((15 / 100) * $this->price);
      return $harga + $tambahan;
   }
}

$product = new Product;
$CDMusic = new CDMusic;
$CDRack  = new CDRack;

$product->setName('Studio Bagas');
$product->setPrice('1000000');

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 1 | OOP PHP</title>
</head>

<body>
   <h6>Promo Special Pembelian CD di Bagas Studio</h4>
      <ol>
         <li>CD Music Discount 5%</li>
         <li>CD Rack Discount Unavailable</li>
      </ol>



      <?php
      $CDMusic->setArtist('Travis Scott');
      $CDMusic->setGenre('Hip Hop');
      $CDMusic->setDiscount('5%');
      $CDMusic->setPrice('1000000');

      ?>

      <h6>Selamat Datang, Promo CD Music Rap</h6>
      <table>
         <tr>
            <td><label for="product">Nama Product :</label>
               <input type="text" id="product" value="<?= $product->getName(); ?>">
            </td>
         </tr>
         <tr>
            <td> <label for="artist">Artist :</label>
               <input type="text" id="artist" value="<?= $CDMusic->getArtist(); ?>">
            </td>
         </tr>
         <tr>
            <td>
               <label for="artist">Genre :</label>
               <input type="text" id="artist" value="<?= $CDMusic->getGenre(); ?>">
            </td>
         </tr>
         <tr>
            <td>
               <label for="diskon">Harga :</label>
               <input type="text" id="diskon" value="<?= $product->getPrice(); ?>,00">
            </td>
         </tr>
         <tr>
            <td>
               <label for="diskon">Diskon :</label>
               <input type="text" id="diskon" value="<?= $CDMusic->getDiscount(); ?>">
            </td>
         </tr>
         <tr>
            <td>
               <label for="diskon">Total Harga CD :</label>
               <input type="text" id="diskon" value="<?= $CDMusic->getPrice(); ?>,00">
               <p>* Total harga sudah termasuk PPN 10% dan diskon 5%</p>
            </td>
         </tr>
      </table>






      <?php
      $CDRack->setCapacity('50');
      $CDRack->setModel('Black');
      $CDRack->setPrice('1000000');
      ?>
      <h6>Rack CD (Optional)</h6>
      <table>
         <tr>
            <td> <label for="capacity">Kapasitas :</label>
               <input type="text" id="capacity" value="<?= $CDRack->getCapacity(); ?>">
            </td>
         </tr>
         <tr>
            <td>
               <label for="model">Model :</label>
               <input type="text" id="model" value="<?= $CDRack->getModel(); ?>">
            </td>
         </tr>
         <tr>
            <td>
               <label for="harga">Harga :</label>
               <input type="text" id="harga" value="<?= $product->getPrice(); ?>,00">
            </td>
         </tr>
         <tr>
            <td>
               <label for="diskon">Diskon :</label>
               <input type="text" id="diskon" value="0%">
               <p>* Maaf Diskon tidak tersedia</p>
            </td>
         </tr>
         <tr>
            <td>

               <label for="total">Total Harga Rack</label>
               <input type="text" id="total" value="<?= $CDRack->getPrice(); ?>,00">
               <p>* Harga sudah termasuk PPN 15%</p>
            </td>
         </tr>
      </table>

</body>

</html>