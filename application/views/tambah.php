<div class="registration-form">
	<div class="container">
		<h2>Tambah Berita</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>home/proses">
						 <ul>
							 <li class="text-info">Title:</li>
							 <li><input type="text" name="title" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Content :</li>
							 <li><textarea type="text" id="content" name="content" required="required" class="form-control col-md-7 col-xs-12" placeholder="Content"></textarea>
							</li>
						 </ul>				 
						<ul>
							 <li class="text-info">category : </li>
							 <li><select class="form-control" name="kategori">
                      			<option value="-" >category</option>
                      			<option value="Politik">Politik</option>
                      			<option value="Hiburan">Hiburan</option>
                     			 </select>
							</li>
						 </ul>

						<ul>
						<li class="text-info">Upload Gambar : </li>
						<li>
              			 <input type="file" class="form-control" name="userfile" >
            			 </li>
            			 </ul>
									
						 <input type="submit" value="SUBMIT" name="submit">
						 
					 </form>
				 </div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>