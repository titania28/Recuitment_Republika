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
 <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Edit Berita</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data"  action="<?php echo site_url(). '/home/update/'.$data->id; ?>" method="POST" >
                           <ul>
                             <li class="text-info">Title :</li>
                             <li><input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $data->title;?>"></input>
                            </li>
                           </ul> 
                           <ul>
                             <li class="text-info">Content :</li>
                             <li><textarea type="text" id="content" name="content" required="required" class="form-control col-md-7 col-xs-12"><?= $content ?></textarea>
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
                             <span class="help-block">Pilih Kembali</span>
                           </ul>

                          <ul>
                          <li class="text-info">Gambar : </li>
                          <li>
                                   <img src="<?php echo base_url();?>foto/<?php echo $data->image;?>" width="70" height="70" alt="img">
                                 </li>
                                 </ul>
                                
                           <input type="submit" value="SUBMIT" name="submit" align="center" class="btn btn-theme03">
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->