 <?php require_once ('../fileinfo.php'); ?> 
<div >
	<div class="input-append">	
		<select class="span3" onchange="angular.element(this).scope().selectModel(this)">
			<option value="">Select View</option>
			<?php echo getFiles('../../application/views') ?> 
		</select>
		<input class="btn btn-success" type="button" ng-click="updateFile()"  value="Update {{fileName}}"/>		 
	</div> 
</div>
<div>
	<form>
		<textarea id="code" name="code" style="display:block; width:100%;height:500px"></textarea>
	</form>
</div>
