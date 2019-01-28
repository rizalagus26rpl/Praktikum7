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
                    <li>
                        <a href="<?=base_url('index.php/pelanggan/daftarpelanggan')?>">
                            <i class="material-icons">assignment</i>
                            <span>FORM DATA PEMBELI</span>
                        </a>
                    </li>
                    <li class="active">
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
    <h2>Data Pelanggan</h2>
</div>
<!-- Basic Table -->
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
            <div class="body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NAMA PEMBELI</th>
                            <th>ALAMAT</th>
                            <th>NO HP</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            foreach ($AllDataPelanggan as $pelanggan) {
                                $i++;
                                echo "<tr>
                                        <th scope='row'>$i</th>
                                        <td>$pelanggan->nama_pembeli</td>
                                        <td>$pelanggan->alamat</td>
                                        <td>$pelanggan->no_telp</td>
                                        <td>$pelanggan->username</td>
                                        <td>$pelanggan->password</td>
                                        <td>
                                            <button class='btn btn-success waves-effect' type='button' data-toggle='modal' data-target='#defaultModal".$i."'>Edit</button>
                                            <a class='btn btn-danger waves-effect' href='".base_url('index.php/Pelanggan/HapusDataPelanggan/'.$pelanggan->id_pembeli.'')."'>Delete</a>
                                        </td>
                                    </tr>
                                    
                                    <div class='modal fade' id='defaultModal".$i."' tabindex='-1' role='dialog'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h4 class='modal-title' id='defaultModalLabel'>Edit Pelanggan</h4>
                                                </div>
                                                <div class='modal-body'>
                                                    <form id='form_validation' method='POST' action='".base_url('index.php/Pelanggan/SendUpdateDataPelanggan')."'>
                                                        <input type='text' style='display:none' name='ID' value='".$pelanggan->id_pembeli."'>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <input type='text' class='form-control' name='NamaPelanggan' value='".$pelanggan->nama_pembeli."'>
                                                                <label class='form-label'>Nama Pelanggan</label>
                                                            </div>
                                                        </div>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <input type='text' class='form-control' name='NoTelp' value='".$pelanggan->no_telp."'>
                                                                <label class='form-label'>No Telphon</label>
                                                            </div>
                                                        </div>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <input type='text' class='form-control' name='Username' value='".$pelanggan->username."'>
                                                                <label class='form-label'>Username</label>
                                                            </div>
                                                        </div>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <input type='password' class='form-control' name='Password' value='".$pelanggan->password."'>
                                                                <label class='form-label'>Password</label>
                                                            </div>
                                                        </div>
                                                        <div class='form-group form-float'>
                                                            <div class='form-line'>
                                                                <textarea name='Alamat' cols='30' rows='5' class='form-control no-resize'>".$pelanggan->alamat."</textarea>
                                                                <label class='form-label'>Description</label>
                                                            </div>
                                                        </div>
                                                        <button class='btn btn-primary waves-effect' type='submit'>SAVE CHANGES</button>
                                                    </form>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-danger waves-effect' data-dismiss='modal'>CLOSE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Table -->