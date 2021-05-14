<!DOCTYPE html>
<html>
  <head>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

      <title>J-Mode | Request Submitted</title>
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
          <h2>Thank You!</h2><br>
          Your bible study request has been sent.
        </div>

        <div class="card-body d-grid gap-2 d-md-flex justify-content-md-center">
          <form action="bible-study-requests">
              <button type="submit" class="btn btn-success">Return Home</button>
          </form>  
        </div>
      </div>
    </div>    
  </body>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html><?php /**PATH C:\xampp\htdocs\laravel\bs-requests\resources\views/thank-you.blade.php ENDPATH**/ ?>