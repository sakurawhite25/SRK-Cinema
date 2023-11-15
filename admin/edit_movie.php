<?php
include_once('include/db.php');

$query = "SELECT * FROM `movie`  WHERE movie_id = '" . $_GET["id"] . "'";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie Page</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<form action="edit_movie.php?id=<?=$_GET['id']; ?>" method="post" enctype="multipart/form-data">
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="customer.php"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="customer.php" target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
  <?php while($row= mysqli_fetch_array($result)) { ?>
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;"><img src="<?=$row['movie_image']?>"  style="width: 140px; height: 140px;"></span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?=$row["movie_name"]?></h4>
                    <p class="mb-0">Decription: <?=$row["movie_description"]?></p>
                    <div class="text-muted"><small>Duration: <?=$row["movie_type"]?></small></div>
                    <div class="text-muted"><small>Duration: <?=$row["movie_duration"]?></small></div>
                    <div class="text-muted"><small>Release Date: <?=$row["release_date"]?></small></div>
                    <div class="mt-2">
                    <label for="changePhotoInput" class="btn btn-primary">
                      <i class="fa fa-fw fa-camera"></i>
                      <span>Change Photo</span>
                    </label>
                    <input type="file" id="changePhotoInput" name="newPhoto" accept=".jpg, .jpeg, .png" style="display: none;">

                    <label for="changeTrailerInput" class="btn btn-primary">
                      <i class="fa fa-fw fa-video-camera"></i>
                      <span>Change Trailer</span>
                    </label>
                    <input type="file" id="changeTrailerInput" name="newTrailer" accept=".mp4, .mov" style="display: none;">

                  </div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Movie Name</label>
                              <input class="form-control" type="text" name="movie_name" placeholder="<?= $row['movie_name'] ?>" value="<?= $row['movie_name'] ?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Type</label>
                              <select class="form-control" name="movie_type" id="movie_id">
                              <option value="<?= $row['movie_type'] ?>" selected><?= $row['movie_type'] ?></option>
                              <option value="Action">Action</option>
					          <option value="Comedy">Comedy</option>
					          <option value="Romance">Romance</option>
					          <option value="Horror">Horror</option>
					          <option value="Animation">Animation</option>
					          <option value="Science Fiction">Science Fiction</option>
					          <option value="Drama">Drama</option>
                             </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Duration</label>
                              <input class="form-control" type="text" name="movie_duration" placeholder="<?= $row['movie_duration'] ?>" value="<?= $row['movie_duration'] ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Release Date</label>
                              <input class="form-control" type="date" name="release_date" placeholder="<?= $row['release_date'] ?>" value="<?= $row['release_date'] ?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name="movie_description" placeholder="<?= $row['movie_description'] ?>" value="<?= $row['movie_description'] ?>"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit" name="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-secondary">
                <i class="fa fa-sign-out"></i>
                <span>Back</span>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Support</h6>
            <p class="card-text">Get fast, free help from our friendly assistants.</p>
            <button type="button" class="btn btn-primary">Contact Us</button>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

  </div>
</div>
</div>
</form>
<script>
    document.getElementById('changePhotoInput').addEventListener('click', function() {
      document.getElementById('changePhotoInput').click();
    });

    document.getElementById('changeTrailerInput').addEventListener('click', function () {
      document.getElementById('changeTrailerInput').click();
    }
  </script>
</body>
</html>