<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Student ID</th>
								  <th>Student</th>
								  <th>Phone</th>
								  <th>Roll</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php 
								foreach ($all_students_info as $v_student) {
							?>
							<tr>

								<td class="center"> <?php echo $v_student->student_id ?> </td>
								<td class="center"> <?php echo $v_student->student_name ?> </td>
								<td class="center"> <?php echo $v_student->student_phone ?> </td>
                                <td class="center"> <?php echo $v_student->student_roll ?> </td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url();?>edit-student/<?php echo $v_student->student_id ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php } ?>

                            
							
						  </tbody>
					  </table>   