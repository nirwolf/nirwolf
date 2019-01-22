<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 
        <?php 
        // Afișează ceva de felul: Monday 8th of August 2005 03:12:46 PM
        date_default_timezone_set('Europe/Bucharest');
            echo date('l jS \of F Y h:i:s A');
        ?>
        </p>
      </div>
      <!-- /.container -->
    </footer>
