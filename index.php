<?php
require_once __DIR__ . '/Model/Products.php';
require_once __DIR__ . '/Model/Categories.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/Kennel.php';
require_once __DIR__ . '/data/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous' />
  <title>Document</title>
</head>

<body>
  <main>
    <div class="container">
      <div class="row row-cols-3 ">
        <?php foreach ($categorieDog->product as $productDog) : ?>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $productDog->name; ?></h5>
                <p class="card-text"><?php echo $productDog->type; ?></h5>
                </p>
                <p class="card-text"><?php echo $productDog->matirial ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productDog->age ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productDog->toytype ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productDog->taste ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productDog->size ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productDog->foodtype ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productDog->kennelsize ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productDog->kennelmatirial ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productDog->kenneltype ?? ''; ?></h5>
                </p>
                <a href="#" class="btn btn-primary"><?php echo $productDog->price; ?></h5></a>
                <p class="text-end "><i class="fa-solid fa-dog"></i></p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <div class="container">
      <div class="row row-cols-3 ">
        <?php foreach ($categorieCat->product as $productCat) : ?>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $productCat->name; ?></h5>
                <p class="card-text"><?php echo $productCat->type; ?></h5>
                </p>
                <p class="card-text"><?php echo $productCat->matirial ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productCat->age ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productCat->toytype ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productCat->taste ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productCat->size ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productCat->foodtype ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productCat->kennelsize ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productCat->kennelmatirial ?? ''; ?></h5>
                </p>
                <p class="card-text"><?php echo $productCat->kenneltype ?? ''; ?></h5>
                </p>
                <a href="#" class="btn btn-primary"><?php echo $productCat->price; ?></h5></a>
                <p class="text-end "><i class="fa-solid fa-cat"></i></p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>
</body>

</html>