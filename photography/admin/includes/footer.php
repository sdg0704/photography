<footer class="footer pt-5">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="copyright text-center text-sm text-muted text-lg-start">
          <script>
            document.write(new Date().getFullYear())
          </script>,
          made with <i class="fa fa-heart"></i> by
          <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Photography</a>
          for a better web.
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">

          <li class="nav-item">
            <a href="#" class="nav-link pe-0 text-muted" target="_blank">About</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>


<script src="assets/js/sweetalert.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>


</main>

<?php

if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
 
?>
  <script>
    swal({
      title: '<?php  echo $_SESSION['status']; ?>',
      text: '<?php  echo $_SESSION['status_code']; ?>',
      icon: "success",
      button: "Okay!",
    });
  </script>
<?php
  unset($_SESSION['status']);
}
?>



</body>



</html>