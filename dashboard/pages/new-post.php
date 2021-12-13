				<div class="page-inner mt--5"> 
					<div class="row"> 
						<div class="col-12">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row"> 
												 <form class="form-horizontal" method="POST" action="includes/new-post.inc.php" enctype="multipart/form-data"> 
												<div class="modal-body"> 
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="Post Name"> Post Title </label>
																	<input type="text" class="form-control" name = "post_title" placeholder="Post Title"> 
																</div>
															</div> 
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleFormControlSelect1"> Post Category *</label>
																	<select class="form-control" name = "post_category" required>
																		<option> Blogs </option>
																		<option> Real Estate Tips </option>
																		<option> Design Tips  </option>
																	</select>
																</div>  
															</div>  
															<div class="col-md-6">
																<div class="form-group">
																	<label for="email2"> post Tags  (Separate With Comma) *</label>
																	<input type="text" class="form-control" placeholder="Post Tags e.g Parking Space" name = "post_tags" required> 
																</div> 
															</div>  
															<div class="col-md-6">
																<div class="form-group">
																	<label for="email2"> Featured image*</label>
																	<input  type="file" name="post_pic" class="form-control"  required> 
																</div> 
															</div>  
															<div class="col-md-6">
																<div class="form-group">
																	<label class="col-sm-12"> Post Details </label>
																	<input name="post_details" id="inp_htmlcode" type="hidden" />
																	<div id="div_editor1" class="richtexteditor" style="width: 900px;margin:0 auto;">
																	</div>
																	<script>
																		var editor1 = new RichTextEditor(document.getElementById("div_editor1"));
																		editor1.attachEvent("change", function () {
																			document.getElementById("inp_htmlcode").value = editor1.getHTMLCode();
																		});
																	</script>
																</div>
															</div>
															</div>
													<div class="modal-footer no-bd">
														<button  type="submit" class="btn btn-primary" value = "Publish post" name = "add">  Publish Post </button>  
													</div>
																																													
														</div>
													</div>
												</form>									
									</div>
								</div>
							</div>
						</div>
 
					</div>
				</div>  