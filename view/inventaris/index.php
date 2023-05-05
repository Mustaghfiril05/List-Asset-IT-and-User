<!-- Begin Page Content -->
<div class="container-fluid" style="background-color: white; height: 800px;">
<ol class="breadcrumb" style="background-color: #3a3a3a;"> 
            <li class="breadcrumb-item">
              <a href="" style="color: white;">Inventaris IT </a>
            </li>
            <li class="breadcrumb-item active" style="color: white;">Overview</li>
          </ol>
<!-- Page Heading -->
<!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->

  <?php if(validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
      <?= validation_errors(); ?>
    </div>
       <?php endif; ?>

       <style>
        .card {
    flex: 1 1 auto;
    padding: 1.25rem;
    border-radius: 2rem;
    background-color: #ffffff;
}
       </style>
       <?= $this->session->flashdata('message'); ?>
       <h6 class="btn btn-primary mb-3" data-toggle="modal" data-target="#newInventarisModal">Add Inventories</h6>
<div class="card shadow mb-4">
<div class="card-header py-1" style="background-color:#000000;">
</div>
<div class="card-body" style="height:37rem; width:auto;">
<div class="table-responsive" style="height:35rem;">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="50%">
                    <thead class="thead">
                    <tr >
                              <th scope="col" class='text-center' style="color:black; font-size: 14px; width:10px;">Pengguna Device</th>
                              <th scope="col" class='text-center' width="50%" style="color:black; font-size: 14px;">Company</th>
                              <th scope="col" class='text-center' style="color:black; font-size: 14px;">Department</th>
                              <th scope="col" class='text-center' style="color:black; font-size: 14px;">Hostname Device</th>
                              <th scope="col" class='text-center' style="color:black; font-size: 14px;">LAN/IP</th>
                              <!-- <th scope="col" class='text-center' style="color:black; font-size: 14px;">WAN/IP</th> -->
                              <th scope="col" class='text-center' style="color:black; font-size: 14px;">Device</th>
                              <th scope="col" class='text-center' style="color:black; font-size: 14px;">Serial Number</th>
                              <th scope="col" class='text-center' width="50%" style="color:black; font-size: 14px;">Action</th>
                        </tr>
                    </thead>
          <tbody>
              <?php foreach ($inventaris as $inv) : ?>
              <tr>
                            <td class='text-center' style="font-size:14px;">
                                <a class="badge badge-danger" href="<?= base_url('inventaris/edit_inventaris/') . $inv['id']; ?>"><?= $inv['pengguna_device']; ?></i></a>
                            </td>
                            <td class='text-center' style="font-size:14px;"><?= $inv['company']; ?></td>
                            <td class='text-center' style="font-size:14px;"><?= $inv['department']; ?></td>
                            <td class='text-center' style="font-size:14px;"><?= $inv['hostname_device']; ?></td>
                            <td class='text-center' style="font-size:14px;"><?= $inv['lan_ip']; ?></td>
                            <!-- <td class='text-center' style="font-size:14px;"><?= $inv['wireless_ip']; ?></td> -->
                            <td class='text-center' style="font-size:14px;"><?= $inv['device']; ?></td>
                            <td class='text-center' style="font-size:14px;"><?= $inv['serial_number']; ?></td>
                            <td class='text-center' style="font-size:14px;">
                                <a class="badge badge-success" href="<?= base_url('inventaris/hapus_inventaris/') . $inv['id']; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Dengan ID. <?= $inv['id']; ?> ?');"><i class="fas fa-trash"></i></a>
                                <a class="badge badge-info" href="<?= base_url('inventaris/detail_inventaris/') . $inv['id']; ?>"><i class="fas fa-eye"></i></a>
                            </td>

                        </tr>
          <?php endforeach; ?>
          </tbody>
      </table>	
   </div>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="newInventarisModal" tabindex="-1" role="dialog" aria-labelledby="newInventarisModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="newInventarisModalLabel">Add New Inventories</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<form action="<?= base_url('inventaris/index'); ?>" method="post">
<div class="modal-body">
            <div class="form-group">
                <select name="company" id="company" class="form-control">
                    <option value="">.:: select company ::.</option>
                        <?php foreach ($company as $lk) : ?>
                    <option value="<?= $lk['company']; ?>"><?= $lk['company']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="pengguna_device" name="pengguna_device" placeholder=".:: pengguna device ::.">   
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="hostname_device" name="hostname_device" placeholder=".:: hostname device ::.">   
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="lan_ip" name="lan_ip" placeholder=".:: lan ip ::." data-inputmask="'alias': 'ip'" data-mask>   
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="wireless_ip" name="wireless_ip" placeholder=".:: wireless ip ::." data-inputmask="'alias': 'ip'" data-mask>    
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="lan_mac_address" name="lan_mac_address" placeholder=".:: lan mac address ::." data-inputmask='"mask":"[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}"' data-mask>
            </div>

            <div class="form-group">
            <input type="text" class="form-control" id="wireless_mac_address" name="wireless_mac_address" placeholder=".:: wireless mac address ::." data-inputmask='"mask":"[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}"' data-mask>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="serial_number" name="serial_number" placeholder=".:: serial number ::.">   
            </div>

            <div class="form-group">
                <select name="device" id="device" class="form-control">
                    <option value="">.:: select device ::.</option>
                        <?php foreach ($device as $lk) : ?>
                    <option value="<?= $lk['device']; ?>"><?= $lk['device']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="merk_device" name="merk_device" placeholder=".:: device merk ::.">   
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="product_tipe" name="product_tipe" placeholder=".:: product type ::.">   
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="ram" name="ram" placeholder=".:: RAM ::.">   
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="harddisk" name="harddisk" placeholder=" .:: Harddisk ::.">   
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="processor" name="processor" style="text-transform:uppercase" placeholder=".:: processor ::.">   
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="vga" name="vga" placeholder=".:: VGA ::.">   
            </div>
                
           <div class="form-group">
                <select name="lokasi" id="lokasi" class="form-control">
                    <option value="">.:: select lokasi ::.</option>
                        <?php foreach ($lokasi as $lk) : ?>
                    <option value="<?= $lk['lokasi']; ?>"><?= $lk['lokasi']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

           <div class="form-group">
                <select name="department" id="department" class="form-control">
                    <option value="">.:: select department ::.</option>
                        <?php foreach ($departement as $dp) : ?>
                    <option value="<?= $dp['jenis_departement']; ?>"><?= $dp['jenis_departement']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

            
            <div class="form-group">
                <select name="jenis_antivirus" id="jenis_antivirus" class="form-control">
                    <option value="">.:: select antivirus ::.</option>
                        <?php foreach ($antivirus as $at) : ?>
                    <option value="<?= $at['antivirus']; ?>"><?= $at['antivirus']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="expired" name="expired" data-inputmask-alias="datetime" placeholder=".:: expired ::." data-inputmask-inputformat="mm/dd/yyyy" data-mask > 
            </div>

            <div class="form-group">
                <select name="office" id="office" class="form-control">
                    <option value="">.:: select office ::.</option>
                        <?php foreach ($office as $of) : ?>
                    <option value="<?= $of['ms_office']; ?>"><?= $of['ms_office']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <select name="account365" id="account365" class="form-control">
                    <option value="">.:: select account id 365 ::.</option>
                        <?php foreach ($account365 as $of) : ?>
                    <option value="<?= $of['account365']; ?>"><?= $of['account365']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

             <div class="form-group">
                <select name="sage" id="sage" class="form-control">
                    <option value="">.:: select sage ::.</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="form-group">
                <select name="visio" id="visio" class="form-control">
                    <option value="">.:: select visio ::.</option>
                        <?php foreach ($visio as $of) : ?>
                    <option value="<?= $of['visio']; ?>"><?= $of['visio']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <select name="autocad_lt" id="autocad_lt" class="form-control">
                    <option value="">.:: select autocad lt ::.</option>
                        <?php foreach ($autocad_lt as $of) : ?>
                    <option value="<?= $of['autocad_lt']; ?>"><?= $of['autocad_lt']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <select name="ms_project" id="ms_project" class="form-control">
                    <option value="">.:: select ms.project ::.</option>
                        <?php foreach ($ms_project as $of) : ?>
                    <option value="<?= $of['ms_project']; ?>"><?= $of['ms_project']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

              <div class="form-group">
                <select name="windows" id="windows" class="form-control">
                    <option value="">.:: select windows ::.</option>
                        <?php foreach ($windows as $wd) : ?>
                    <option value="<?= $wd['windows']; ?>"><?= $wd['windows']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="vnc_password" name="vnc_password" placeholder=".:: VNC password ::.">   
            </div>
                
            <div class="form-group">
                <input type="text" class="form-control" id="password_rdp" name="password_rdp" placeholder=".:: password RDP ::.">   
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="full_computer_name" name="full_computer_name" placeholder=".:: full computer name ::.">   
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                    <label class="form-check-label" for="is_active">Active?</label>
                </div>
            </div>

</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
 <input type="submit" class="btn btn-primary btn-sm" value="save" name="save">
</div>
</form>
</div>
</div>
</div>
</div>