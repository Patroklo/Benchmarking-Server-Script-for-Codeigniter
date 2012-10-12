Benchmarking-Server-Script-for-Codeigniter
==========================================

A simple benchmarking script in codeigniter to test server efficiency.

## Usage

	Copy the benchmark_model.php file into your models directory.
	
	Run in any controller:

	<?php
		
		$this->load->model('benchmark_model');
		echo $this->benchmark_model->run();
		
	?>

## Change log

### 1.0.2
* First commit. Yay.