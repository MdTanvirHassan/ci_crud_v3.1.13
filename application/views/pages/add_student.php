<div class="container">
	<div class="box-content">

		<fieldset>
			<div class="control-group">

				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>


					<p>
						<?php
						$message = $this->session->userdata('message');
						if ($message) {
							echo "<span class='alert alert-danger'>$message</span>";
							$this->session->unset_userdata('message');
						}
						?>
					</p>

					<div class="box-content">
						<form class="form-horizontal" action="<?php base_url(); ?>save-student" method="post">
							<fieldset>

								<div class="control-group">
									<label class="control-label" for="date01">Student Name</label>
									<div class="controls">
										<input type="text" class="input-xlarge " id="date01" name="student_name"
											required />
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="date01">Student Phone</label>
									<div class="controls">
										<input type="text" class="input-xlarge " id="date01" name="student_phone"
											required />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="date01">Student Roll</label>
									<div class="controls">
										<input type="text" class="input-xlarge " id="date01" name="student_roll"
											required>
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn btn-primary">Add Student</button>
									<button type="reset" class="btn">Cancel</button>
								</div>
							</fieldset>
						</form>

					</div>
				</div>
		</fieldset>
	</div>
</div>