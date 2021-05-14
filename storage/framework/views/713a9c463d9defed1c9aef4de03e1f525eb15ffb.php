<!DOCTYPE html>
<html>
  <head>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link href="http://www.ourmanna.com/verses/api/?order=random">

      <title>J-Mode | Bible Study Request Form</title>
      
  </head>

  <body class="bg-dark">
    <!-- Modal -->
    <div class="modal fade" id="cancelConfirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cancel Request</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to cancel your request form for a bible study schedule?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" onclick="window.history.back()">Cancel Request Form</button>
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continue Filling-up</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-4">

      <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
      <?php endif; ?>

      <div class="card mx-auto bg-transparent text-white">
      
        <div class="card-header text-center font-weight-bold">
          <h2>Bible Study Request Form</h2><br>

          <div class="#ourmanna-verse">
            <div id="ourmanna-verse">Loading...</div>
            <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
          </div>
        </div>

        <div class="card-body">

          <form name="bibleStudyRequestForm" method="" action="thank-you" data-toggle="validator" class="needs-validation" novalidate>
            <?php echo csrf_field(); ?>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            
            <div class="mb-3">
              <label for="name" class="form-label">Complete name</label>
              <input type="text" class="form-control" id="name" placeholder="Juan Dela Cruz" required>
              <div class="invalid-feedback">
                Please fill in your complete name.
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
              <div class="invalid-feedback">
                Please fill in your email address.
              </div>
            </div>

            <div class="mb-3">
              <label for="contact" class="form-label">Contact number</label>
              <input type="text" class="form-control" id="contact" placeholder="09xxxxxxxxx" required>
              <div class="invalid-feedback">
                Please fill in your contact number.
              </div>
            </div>

            <div class="mb-3">
              <label for="birthdate" class="form-label">Birthdate</label>
              <input type="date" class="form-control" id="birthdate" required>
              <div class="invalid-feedback">
                Please select your birthdate.
              </div>
            </div>

            <div class="mb-3">
              <label for="religious_affiliation" class="form-label">Religious Affiliation</label>
              <input type="text" class="form-control" id="religious_affiliation" placeholder="Type religous affiliation..." required>
              <div class="invalid-feedback">
                Please fill in your religious affiliation.
              </div>
            </div>

            <div class="mb-3">
              <label for="bs_date" class="form-label">Bible Study Date</label>
              <input type="date" class="form-control" id="bs_date" required>
              <div class="invalid-feedback">
                Please select a date for the bible study.
              </div>
            </div>

            <div class="mb-3">
              <label for="bs_time" class="form-label">Bible Study Time</label>
              <input type="time" class="form-control" id="bs_time" required>
              <div class="invalid-feedback">
                Please select a time for the bible study.
              </div>
            </div>

            <div class="mb-3">
              <label for="bs_location" class="form-label">Bible Study Location / Address</label>
              <input type="text" class="form-control" id="bs_location" placeholder="Type address..." required>
              <div class="invalid-feedback">
                Please provide a location or address for the bible study.
              </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="button" class="btn btn-secondary me-md-2" data-bs-toggle="modal" data-bs-target="#cancelConfirmation">Cancel</button>

              <button type="submit" class="btn btn-primary">Submit Request</button>
            </div>
          </form>

        </div>
      </div>
    </div>    
  </body>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
  <script src=<script src="http://www.ourmanna.com/verses/api/get?format=text&order=random" type="text/javascript"></script>
</html><?php /**PATH C:\xampp\htdocs\laravel\bs-requests\resources\views/bible-study-request-form.blade.php ENDPATH**/ ?>