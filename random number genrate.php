<html>
   <body>

      <?php
         srand( microtime() * 1000000 );
         $num = rand( 1, 4 );

         switch( $num ) {
            case 1: $image_file = "https://pbs.twimg.com/profile_images/1020363302335942657/DFBBR8GY_400x400.jpg";
               break;

            case 2: $image_file = "https://i.pinimg.com/280x280_RS/5f/6a/8e/5f6a8e77f766d858b20bde4029e860d7.jpg";
               break;

            case 3: $image_file = "https://lh3.googleusercontent.com/-5MRT4yHpX1M/VitNLaujLWI/AAAAAAAAAFM/F6nS6SFiUrQt4QsNbZnYXlPTHe8Y_J12QCJkCGAYYCw/w1082-h609-n-rw-no/aamir_kalimi0005.png";
               break;

            case 4: $image_file = "https://c1.staticflickr.com/9/8585/15686342674_abe021b699_b.jpg";
               break;
         }
         echo "Random Image : <img src=$image_file />";

      /* Function used:
         srand()
         rand(star, end)
         microtime()
      */
      ?>

   </body>
</html>