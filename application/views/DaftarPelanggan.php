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
                            <li><a href="<?=base_url('index.php/user/Logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
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
                    <li>
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
                    <li class="active">
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


<div class="container-fluid">
<div class="block-header">
    <h2>
        DAFTAR PELANGGAN
    </h2>
</div>
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <?php 
                    $notifikasi = $this->session->flashdata('notif');
                    if($notifikasi != null){
                        echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
                    }
                ?>
            </div>
            <div class="body">
                <form id="form_validation" method="POST" action="<?php echo base_url('index.php/pelanggan/SendDataPelanggan')?>">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="NamaPelanggan">
                            <label class="form-label">Nama Pelanggan</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="NoTelp">
                            <label class="form-label">No Telphon</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="Username">
                            <label class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" class="form-control" name="Password">
                            <label class="form-label">Password</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea name="Alamat" cols="30" rows="5" class="form-control no-resize"></textarea>
                            <label class="form-label">Alamat</label>
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>


        </div>
    </div>
</div>
<!-- #END# Basic Validation -->
</div>
