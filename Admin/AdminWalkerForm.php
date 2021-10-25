<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paws and Tails | Health and Train</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../style/style.css">
  <script src="https://kit.fontawesome.com/2c558ff8c9.js" crossorigin="anonymous"></script>

</head>

<body>
  <header>
    <h1>
      <icon style="padding-right:10px ">
        <img src="../assets/snoopy2.png" style="width:6% ;">
      </icon>
      Paws and Tails
    </h1>
  </header>

  <section id="contact">
    <div class="container-lg">
      <div>
        <h5 class="text-muted">You are looking to add to?</h5>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <input class="btn btn-light btn-sm round" onclick="location.href = 'AdminVetForm.html'" type="reset"
          value="&nbsp;Vets&nbsp;" />
        <input class="btn btn-light btn-sm round" onclick="location.href = 'AdminTrainerForm.html'" type="reset"
          value="Trainers" />
        <input class="btn btn-secondary btn-md round" onclick="location.href = 'AdminWalkerForm.html'" type="reset"
          value="Walkers" />
        <input class="btn btn-light btn-sm round" onclick="location.href = 'AdminCaretakerForm.html'" type="reset"
          value="Care Takers" />
      </div>

      <div class="text-center">
        <h2>Add professional</h2>

      </div>
      <div class="row justify-content-center my-5">
        <div class="col-lg-6">

          <form action="./AdminAddProductForm.php" method="post">
            <label for="dogname" class="form-label">Name of the Walker:</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-person-fill text-secondary"></i>
              </span>
              <input type="text" id="name" name="name" class="form-control" placeholder="e.g. Aarti Shinde" />
            </div>


            <label for="age" class="form-label">Age:</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="material-icons text-secondary md-18">cake</i>
              </span>
              <input class="form-control" type="text" id="age" name="age" pattern="\d+" placeholder="e.g. 30 years" />
            </div>


            <label for="age" class="form-label">Experience:</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="material-icons text-secondary md-18">stars</i>
              </span>
              <input class="form-control" type="text" id="experience" name="experience" pattern="\d+"
                placeholder="e.g. 5 years" />
            </div>

            <label for="phone" class="form-label">Phone Number</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-telephone-fill text-secondary"></i>
              </span>
              <input required class="form-control" type="text" id="phone" name="phone" placeholder="eg. 9652XXXXX0"
                maxlength="10" minlength="10">
            </div>
        </div>
        <div class="col-lg-6">
          <label for="pay" class="form-label">Fee:</label>
          <div class="mb-4 input-group">
            <span class="input-group-text">
              <i class="material-icons md-18 text-secondary">
                currency_rupee
              </i>
            </span>
            <input class="form-control" type="text" id="fee" name="fee" pattern="\d+" placeholder="e.g. &#8377;6000" />
          </div>

          <label class="custom-file-label form-label" for="image">Add a Picture:</label>
          <div class="custom-file mb-4 input-group">
            <span class="input-group-text">
              <i class="material-icons md-18 text-secondary">
                add_a_photo
              </i>
            </span>
            <input class="form-control custom-file-input" type="file" id="image" name="image" required>

          </div>

          <label for="description" class="form-label">Description:</label>
          <div class="input-group mb-4">
            <span class="input-group-text">
              <i class="material-icons text-secondary md-18">description</i>
            </span>
            <textarea class="form-control" name="description" id="description" rows="5"></textarea>

          </div>
        </div>


        <div class="mb-4 text-center">
          <button type="submit" class="btn btn-secondary" onclick="location.href = './AdminAddWalker.html'">Add
            Walker</button>
        </div>

        </form>
      </div>
    </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

</body>

</html>