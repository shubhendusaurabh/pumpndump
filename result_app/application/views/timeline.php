
    <div class="container">
		<h1 class="muted">Timeline for this app.</h1>
      <!-- Main hero unit for a primary marketing message or call to action -->
      			
		<?php
		$tmpl = array('table_open' => '<table class = "table table-striped table-hover table-bordered">');
		$this->table->set_template($tmpl);
 		echo $this->table->generate($logs);
		?>
      <!-- Example row of columns -->
      <div class="row">
        
        
      </div>

      <hr>

      

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <footer>
        <p>&copy; <a href="http://pumpndump.in">pumpndump.in</a> <?php echo date("Y", time()); ?></p>
	</footer>

  </body>

</html>