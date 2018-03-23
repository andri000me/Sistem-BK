<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © <a href="https://api.whatsapp.com/send?phone=082228191006">Sinyo</a> (Sistem INput Yang Organizable) <?php $date = date('Y'); echo "$date";?>
            <?php
            $btime = microtime(true);
            $tend = $btime;
          // Store end time in a variable

          // Calculate Difference
          $time = ($tend - $tstart );
          $time = number_format((float)$time, 3, '.', '');
          // Output the result
          printf (" .Waktu menampilkan laman %f detik.", $time);
  ?>
</small>
        </div>
      </div>
    </footer>
    <script src="theme/vendor/jquery/jquery.min.js"></script>
       <script src="theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
       <!-- Core plugin JavaScript-->
       <script src="theme/vendor/jquery-easing/jquery.easing.min.js"></script>
       <!-- Custom scripts for all pages-->
       <script src="theme/js/sb-admin.min.js"></script>


     </div>
   </body>

   </html>
