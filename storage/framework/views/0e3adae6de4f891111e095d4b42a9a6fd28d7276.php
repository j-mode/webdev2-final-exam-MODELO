<!DOCTYPE html>
<html>
  <head>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

      <title>J-Mode | Bible Study Requests</title>
  </head>

  <body class="bg-dark">
    <div class="container my-4">

      <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
      <?php endif; ?>

      <div class="card mx-auto bg-transparent text-white">
      
        <div class="card-header text-center font-weight-bold">
          <h2>Bible Study Requests</h2>
        </div>

        <div class="card-body">

          <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Complete Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Religious Affiliation</th>
                <th scope="col">BS Date</th>
                <th scope="col">BS Time</th>
                <th scope="col">BS Location</th>
              </tr>
            </thead>

            <!--?php
            $results = bible_study_requests::select('select * from bible_study_requests', [10]);

            ?-->

            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Aether Main</td>
                <td>09123456789</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Amber Sparks</td>
                <td>09123456789</td>
                <td>@fat</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Thornton</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Kaeya Majin</td>
                <td>09123456789</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Lisa Mon Lisa</td>
                <td>09123456789</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Diluc Phoenix</td>
                <td>09123456789</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Venti Bards</td>
                <td>09123456789</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Zhongli Lapiz</td>
                <td>09123456789</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Childe Harbinger</td>
                <td>09123456789</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

          <form action="bible-study-request-form">
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
              <button type="submit" class="btn btn-primary">Request a Bible Study Schedule</button>
            </div>
          </form>  
        </div>
      </div>
    </div>    
  </body>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html><?php /**PATH C:\xampp\htdocs\laravel\bs-requests\resources\views/bible-study-requests.blade.php ENDPATH**/ ?>