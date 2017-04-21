<div class="container">
		<div class="bs-docs-example">
		<br>
		<br>
		<h3>DAFTAR BERITA</h3>
		<br>
		<br>
		<a href="<?php echo base_url();?>home/proses"><button type="submit" class="btn btn-default">Tambah Berita</button></a>
            <table class="table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Category</th>
				  <th>Images</th>
				  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
			  <?php foreach($news as $a) { ?>
                <tr>
                  <td><?php echo $a->title;?></td>
                  <td><?php echo $a->content;?></td>
				          <td><?php echo $a->kategori;?></td>
				          <td><img src="<?php echo base_url();?>foto/<?php echo $a->image;?>" width="70" height="70" alt="img"></td>
				          <td><a href="<?php echo base_url('home/batal/'.$a->id);?>" class = "btn btn-default btn-sm">Delete</a>
                  <a href="<?php echo base_url('home/update/'.$a->id);?>" class = "btn btn-default btn-sm">Edit</a></td>
                </tr>
				<?php }?>
              </tbody>
            </table>
          </div>
		  </div>