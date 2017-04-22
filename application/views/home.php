<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3>Daftar Berita</h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                             <div class="form-group">
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" placeholder="Masukkan Kata Kunci">
                              </div>
                              <button type="button" class="btn btn-primary">Search</button>
                          </div>
                             <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Title</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Content</th>
                                  <th><i class="fa fa-bookmark"></i> Kategori</th>
                                  <th><i class=" fa fa-edit"></i> Image </th>
                                  <th><i class=" fa fa-bookmark"></i> Reporter </th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                               <?php foreach($news as $a) { ?>
                              <tr>
                                  <td><?php echo $a->title;?></td>
                                   <td><?php echo $a->content;?></td>
                                  <td><?php echo $a->kategori;?></td>
                                  <td><img src="<?php echo base_url();?>foto/<?php echo $a->image;?>" width="70" height="70" alt="img"></td>
                                  <td></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

      </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->