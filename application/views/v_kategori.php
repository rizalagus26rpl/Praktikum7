<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url()?>/assets/images/Rizal.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rizal Agus Atmaji</div>
                    <div class="email">rizal_agus_26rpl@student.smktelkom-mlg.sch.id</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="<?=base_url('index.php/user/Logut')?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?=base_url('index.php/user/home')?>">
                            <i class="material-icons">home</i>
                            <span>HOME</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?=base_url('index.php/user/data_diri')?>">
                            <i class="material-icons">person</i>
                            <span>PROFILE</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?=base_url('index.php/user/galeri')?>">
                            <i class="material-icons">photo_library</i>
                            <span>GALLERY</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?=base_url('index.php/user/event')?>">
                            <i class="material-icons">date_range</i>
                            <span>EVENT</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?=base_url('index.php/user/contact')?>">
                            <i class="material-icons">local_phone</i>
                            <span>CONTACT</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?=base_url('index.php/kategori')?>">
                            <i class="material-icons">dashboard</i>
                            <span>KATEGORI</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('index.php/barang')?>">
                            <i class="material-icons">shopping_cart</i>
                            <span>BARANG</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('index.php/pelanggan/daftarpelanggan')?>">
                            <i class="material-icons">assignment</i>
                            <span>FORM DATA PEMBELI</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('index.php/pelanggan/datapelanggan')?>">
                            <i class="material-icons">home</i>
                            <span>DATA PEMBELI</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">Admin</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>

<div class="block-header">

</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                <h1 style="text-align:left;">Kategori</h1>
                                </div>
                        </div>
                        <div class="body">
                        <div class="row">
                        <a style="margin: 35px;margin-left: 1px;" href="#tambah" class="btn btn-primary" data-toggle="modal">
                        <span class="glyphicon glyphicon-plus"></span> Tambah</a>
                            <table class="table table-hover table-striped">
                            <tr>
                                <th>NO</th><th>ID</th><th>NAMA KATEGORI</th>
                            </tr>
                            <?php
                            $no=0;
                                foreach ($data_kategori as $dt_kat) {
                                    $no++;
                                    echo '<tr>
                                         <td>'.$no.'</td>
                                         <td>'.$dt_kat->id_kategori.'</td>
                                         <td>'.$dt_kat->nama_kategori.'</td>
                                         </tr>';
                                }
                            ?>
                            
                            </table>

<?php if($this->session->flashdata('pesan')!=null): ?>
<div class="alert alert-danger">
<?= $this->session->flashdata('pesan');?></div>                
<?php endif ?>
                          </div>
                        </div>
                    </div>
                </div>


<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah Kategori</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/kategori/simpan_kategori')?>" method="post">
        Nama Kategori
        <input type="text" name="nama_kategori" class="form-control"><br>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->