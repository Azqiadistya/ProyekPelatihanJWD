
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Nilai</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Smandagiri</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/siswa">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/nilai">Nilai</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- CONTENT -->
<div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Nilai</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Nilai Siswa Smandagiri</li>
              <br />
            </ol>
            <div class="row">
              <div class="col-xl-6">
 
              <div class="row">
              <div class="col-xl-6">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Input Nilai</button>
                <br><br>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nilai Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="/inputNilai">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="ex: Azqiadistya" name="nama" />
                          </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Mapel</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="ex: Kimia" name="mapel" />
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nilai</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="ex: 98" name="nilai" />
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>

            <table class="table">
                <thead>
                  <tr> 
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Mapel</th>
                    <th scope="col">Nilai</th>
                  </tr>
                </thead>

  <!-- php -->
                </tr>
                
              </table>

            <div class="card mb-4">
              <div class="card-header"></div>
              <div class="card-body"></div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto fixed-bottom ">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; Azqiadistya 2021</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

