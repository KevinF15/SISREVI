<?php
	function showAlert($type, $message) {
		echo '<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
				  '.$message.'
  			      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			  </div>';
	}
?>