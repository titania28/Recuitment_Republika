<?php
  $id       = $data->id;
if($this->input->post('is_submitted')){
  $title    = set_value('title');
  $content  = set_value('content');
  $kategori = set_value('kategori');
} else {
  $title     = $data->title;
  $content  = $data->content;
  $kategori      = $data->kategori;
}
?>
<div class="registration-form">
	<div class="container">
		<h2>Edit Berita</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data"  action="<?php echo site_url(). '/home/update/'.$data->id; ?>" method="POST" >

						 <ul>
							 <li class="text-info">Title:</li>
							 <li><input type="text" name="title" value="<?php echo $data->title;?>"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Content :</li>
							 <li><textarea class="form-control" name="content"><?= $content ?></textarea></input>
							</li>
						 </ul>				 
						<ul>
							 <li class="text-info">category : </li>
							 <li><select class="form-control" name="kategori">
                      			<option value="<?php echo $data->kategori;?>" >category</option>
                      			<option value="Politik">Politik</option>
                      			<option value="Hiburan">Hiburan</option>
                     			 </select>
							</li>
						 </ul>

						 <ul>
						<li class="text-info">Upload Gambar : </li>
						<li>
              			 <img src="<?php echo base_url();?>foto/<?php echo $data->image;?>" width="70" height="70" alt="img">
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