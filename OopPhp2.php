<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 2 | OOP PHP</title>
   <style>
      * {
         padding: 0;
         margin: 0;
         font-family: "Poppins";
      }

      p {
         text-align: justify;
      }
   </style>
</head>

<body>
   <?php
   class Binatang
   {
      public $animal,
         $have,
         $can,
         $plus;

      public function __construct(
         $animal = "Monyet merupakan salah satu hewan",
         $have = "Monyet mempunyai kemampuan untuk Berjalan, Makan dan Bersuara",
         $can = "tetapi jika dilatih Monyet akan bisa Berkendara seperti naik sepeda",
         $plus = "yang tidak dipunyai oleh hewan lainnya."
      ) {
         $this->animal  = $animal;
         $this->have    = $have;
         $this->can     = $can;
         $this->plus    = $plus;
      }
   }

   class cetakKalimat
   {
      public function cetak($binatang)
      {
         $str = "{$binatang->animal}, {$binatang->have}, {$binatang->can} {$binatang->plus}";
         return $str;

         // Atau Alternative
         // echo "{$binatang->animal}, {$binatang->have}, {$binatang->can} {$binatang->plus}";

      }
   }
   ?>

   <h4>Tugas 2 | OOP PHP</h4>
   <p>
      <?php
      $hewan = new Binatang;
      $cetak = new cetakKalimat();
      echo $cetak->cetak($hewan);
      //Atau Alternative
      //$cetak->cetak($hewan);
      ?>
   </p>

</body>

</html>