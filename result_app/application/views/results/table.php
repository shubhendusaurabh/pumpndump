	<div class="span10">
		 <ul>
		 	<?php 
		 		$tmpl = array('table_open' => '<table class = "table table-striped table-hover table-bordered" id="myTable">');
				$this->table->set_template($tmpl);
		 		//$this->table->set_heading('Name', 'Roll No', 'Subject1', 'Subject2', 'Subject3', 'Subject4', 'Subject5', 'Total');
		 		echo $this->table->generate($marks);
		 	?>
		 </ul>
	</div>
	</div>
	<?php echo link_tag('css/DT_bootstrap.css'); ?>
	<?php echo link_tag('css/chardinjs.css'); ?>
	<script src="<?php echo base_url('js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
	<script src="<?php echo base_url().'js/jquery.dataTables.min.js' ?>"></script>
	<script src="<?php echo base_url().'js/DT_bootstrap.js' ?>"></script>
	<script src="<?php echo base_url('js/chardinjs.min.js') ?>"></script>
	<script src="<?php echo base_url('js/tour.js') ?>"></script>
