<!-- Begin Page Content -->
<div class="container-fluid" style="height:661px;">

<!-- Page Heading -->
<br>
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="table-responsive" style="height:550px; width: 74rem!important; overflow-x:hidden;" >
<div class="row">
  <div class="col-lg-10">
      <?= form_open_multipart('inventaris/edit_inventaris'); ?>
      <input type="hidden" class="form-control" id="id" name="id" value="<?= $inventaris['id']; ?>">

            <div class="form-group row">
                <label for="company" class="col-sm-3 col-form-label">company</label>
                  <div class="col-sm-8">
                  <select name="company" id="company" class="form-control">
                    <?php foreach ($company as $c) : ?>
                      <?php if( $c['company'] == $inventaris['company'] ) : ?>
                        <option value="<?= $c['company']; ?>" selected><?= $c['company']; ?></option>
                      <?php else : ?>
                        <option value="<?= $c['company']; ?>" ><?= $c['company']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
            </div>

          <div class="form-group row">
              <label for="pengguna_device" class="col-sm-3 col-form-label">Pengguna Device</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="pengguna_device" name="pengguna_device" value="<?= $inventaris['pengguna_device']; ?>">
              </div>
          </div>

          <div class="form-group row">
              <label for="hostname_device" class="col-sm-3 col-form-label">Hostname Device</label>
              <div class="col-sm-8">
                <input type="hostname_device" class="form-control" id="hostname_device" name="hostname_device" value="<?= $inventaris['hostname_device']; ?>">
              </div>
          </div>

          <div class="form-group row">
              <label for="lan_ip" class="col-sm-3 col-form-label">LAN IP</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="lan_ip" name="lan_ip" value="<?= $inventaris['lan_ip']; ?>" data-inputmask="'alias': 'ip'" data-mask>  
                <?= form_error('lan_ip','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="wireless_ip" class="col-sm-3 col-form-label">Wireless Ip</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="wireless_ip" name="wireless_ip" value="<?= $inventaris['wireless_ip']; ?>" data-inputmask="'alias': 'ip'" data-mask> 
                <?= form_error('wireless_ip','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="lan_mac_address" class="col-sm-3 col-form-label">LAN MAC Address </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="lan_mac_address" name="lan_mac_address" value="<?= $inventaris['lan_mac_address']; ?>" data-inputmask='"mask":"[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}"' data-mask>
                <?= form_error('lan_mac_address','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="wireless_mac_address" class="col-sm-3 col-form-label">Wireless MAC Address</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="wireless_mac_address" name="wireless_mac_address" value="<?= $inventaris['wireless_mac_address']; ?>" data-inputmask='"mask":"[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}:[A|9]{2}"' data-mask>
                <?= form_error('wireless_mac_address','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="serial_number" class="col-sm-3 col-form-label">Serial Number</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="serial_number" name="serial_number" value="<?= $inventaris['serial_number']; ?>">
                <?= form_error('serial_number','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
                <label for="device" class="col-sm-3 col-form-label">Device</label>
                  <div class="col-sm-8">
                  <select name="device" id="device" class="form-control">
                    <?php foreach ($device as $of) : ?>
                      <?php if( $of['device'] == $inventaris['device'] ) : ?>
                        <option value="<?= $of['device']; ?>" selected><?= $of['device']; ?></option>
                      <?php else : ?>
                        <option value="<?= $of['device']; ?>" ><?= $of['device']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
          </div>

          <div class="form-group row">
              <label for="merk_device" class="col-sm-3 col-form-label">Device Merk</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="merk_device" name="merk_device" value="<?= $inventaris['merk_device']; ?>">
                <?= form_error('merk_device','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="product_tipe" class="col-sm-3 col-form-label">Product Type</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="product_tipe" name="product_tipe" value="<?= $inventaris['product_tipe']; ?>">
                <?= form_error('product_tipe','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>
          
          <div class="form-group row">
              <label for="ram" class="col-sm-3 col-form-label">RAM</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="ram" name="ram"  value="<?= $inventaris['ram']; ?>">
                <?= form_error('ram','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="harddisk" class="col-sm-3 col-form-label">HardDisk</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="harddisk" name="harddisk" value="<?= $inventaris['harddisk']; ?>">
                <?= form_error('harddisk','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="processor" class="col-sm-3 col-form-label">Processor</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="processor" name="processor" size="20" maxlength="20" style="text-transform:uppercase" value="<?= $inventaris['processor']; ?>">
                <?= form_error('processor','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="vga" class="col-sm-3 col-form-label">VGA</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="vga" name="vga" value="<?= $inventaris['vga']; ?>">
                <?= form_error('vga','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

                <div class="form-group row">
                <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                  <div class="col-sm-8">
                  <select name="lokasi" id="lokasi" class="form-control">
                    <?php foreach ($lokasi as $lk) : ?>
                      <?php if( $lk['lokasi'] == $inventaris['lokasi'] ) : ?>
                        <option value="<?= $lk['lokasi']; ?>" selected><?= $lk['lokasi']; ?></option>
                      <?php else : ?>
                        <option value="<?= $lk['lokasi']; ?>" ><?= $lk['lokasi']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                </div>

                <div class="form-group row">
                <label for="department" class="col-sm-3 col-form-label">Department</label>
                  <div class="col-sm-8">
                  <select name="department" id="department" class="form-control">
                    <?php foreach ($departement as $dp) : ?>
                      <?php if( $dp['jenis_departement'] == $inventaris['department'] ) : ?>
                        <option value="<?= $dp['jenis_departement']; ?>" selected><?= $dp['jenis_departement']; ?></option>
                      <?php else : ?>
                        <option value="<?= $dp['jenis_departement']; ?>" ><?= $dp['jenis_departement']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                </div>

                <div class="form-group row">
                <label for="antivirus" class="col-sm-3 col-form-label">Antivirus</label>
                  <div class="col-sm-8">
                  <select name="jenis_antivirus" id="jenis_antivirus" class="form-control">
                    <?php foreach ($antivirus as $at) : ?>
                      <?php if( $at['antivirus'] == $inventaris['jenis_antivirus'] ) : ?>
                        <option value="<?= $at['antivirus']; ?>" selected><?= $at['antivirus']; ?></option>
                      <?php else : ?>
                        <option value="<?= $at['antivirus']; ?>" ><?= $at['antivirus']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                </div>

          <div class="form-group row">
              <label for="expired" class="col-sm-3 col-form-label">Expired</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="expired" name="expired" value="<?= $inventaris['expired']; ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask >
                <?= form_error('expired','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
                <label for="office" class="col-sm-3 col-form-label">MS Office</label>
                  <div class="col-sm-8">
                  <select name="office" id="office" class="form-control">
                    <?php foreach ($office as $of) : ?>
                      <?php if( $of['ms_office'] == $inventaris['office'] ) : ?>
                        <option value="<?= $of['ms_office']; ?>" selected><?= $of['ms_office']; ?></option>
                      <?php else : ?>
                        <option value="<?= $of['ms_office']; ?>" ><?= $of['ms_office']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
          </div>

          <div class="form-group row">
                <label for="account365" class="col-sm-3 col-form-label">MS Account ID 365</label>
                  <div class="col-sm-8">
                  <select name="account365" id="account365" class="form-control">
                    <?php foreach ($account365 as $of) : ?>
                      <?php if( $of['account365'] == $inventaris['account365'] ) : ?>
                        <option value="<?= $of['account365']; ?>" selected><?= $of['account365']; ?></option>
                      <?php else : ?>
                        <option value="<?= $of['account365']; ?>" ><?= $of['account365']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
          </div>

          <div class="form-group row">
              <label for="sage" class="col-sm-3 col-form-label">Sage</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="sage" name="sage" value="<?= $inventaris['sage']; ?>">
                <?= form_error('sage','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <!-- <div class="form-group row">
              <label for="sage" class="col-sm-3 col-form-label">Sage</label>
              <div class="col-sm-8">
              <select name="sage" id="sage" class="form-control" value="<?= $inventaris['sage']; ?>">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
              </select>
              </div>
          </div> -->

          <div class="form-group row">
                <label for="visio" class="col-sm-3 col-form-label">Ms. Visio</label>
                  <div class="col-sm-8">
                  <select name="visio" id="visio" class="form-control">
                    <?php foreach ($visio as $vs) : ?>
                      <?php if( $vs['visio'] == $inventaris['visio'] ) : ?>
                        <option value="<?= $vs['visio']; ?>" selected><?= $vs['visio']; ?></option>
                      <?php else : ?>
                        <option value="<?= $vs['visio']; ?>" ><?= $vs['visio']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
          </div>

          <div class="form-group row">
                <label for="ms_project" class="col-sm-3 col-form-label">Ms. Project</label>
                  <div class="col-sm-8">
                  <select name="ms_project" id="ms_project" class="form-control">
                    <?php foreach ($ms_project as $mp) : ?>
                      <?php if( $mp['ms_project'] == $inventaris['ms_project'] ) : ?>
                        <option value="<?= $mp['ms_project']; ?>" selected><?= $mp['ms_project']; ?></option>
                      <?php else : ?>
                        <option value="<?= $mp['ms_project']; ?>" ><?= $mp['ms_project']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
          </div>

          <div class="form-group row">
                <label for="autocad_lt" class="col-sm-3 col-form-label">Autocad Lt</label>
                  <div class="col-sm-8">
                  <select name="autocad_lt" id="autocad_lt" class="form-control">
                    <?php foreach ($autocad_lt as $al) : ?>
                      <?php if( $al['autocad_lt'] == $inventaris['autocad_lt'] ) : ?>
                        <option value="<?= $al['autocad_lt']; ?>" selected><?= $al['autocad_lt']; ?></option>
                      <?php else : ?>
                        <option value="<?= $al['autocad_lt']; ?>" ><?= $al['autocad_lt']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
          </div>

          <div class="form-group row">
                <label for="windows" class="col-sm-3 col-form-label">Windows</label>
                  <div class="col-sm-8">
                  <select name="windows" id="windows" class="form-control">
                    <?php foreach ($windows as $wd) : ?>
                      <?php if( $wd['windows'] == $inventaris['windows'] ) : ?>
                        <option value="<?= $wd['windows']; ?>" selected><?= $wd['windows']; ?></option>
                      <?php else : ?>
                        <option value="<?= $wd['windows']; ?>" ><?= $wd['windows']; ?></option>
                      <?php endif ; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                </div>

          <div class="form-group row">
              <label for="vnc_password" class="col-sm-3 col-form-label">VNC Password</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="vnc_password" name="vnc_password" value="<?= $inventaris['vnc_password']; ?>">
                <?= form_error('vnc_password','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="password_rdp" class="col-sm-3 col-form-label">Password RDP </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="password_rdp" name="password_rdp" value="<?= $inventaris['password_rdp']; ?>">
                <?= form_error('password_rdp','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
              <label for="full_computer_name" class="col-sm-3 col-form-label">Full Computer Name </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="full_computer_name" name="full_computer_name" value="<?= $inventaris['full_computer_name']; ?>">
                <?= form_error('full_computer_name','<small class="text-danger pl-3">','</small>'); ?>
              </div>
          </div>

          <div class="form-group row">
            <label for="is_active" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $inventaris['is_active']; ?>">
                     <?= form_error('is_active','<small class="text-danger pl-3">','</small>'); ?>
            </div>
          </div>

          <div class="form-group row justify-content-end">
              <div class="col-sm-9">
                  <button type="submit" class="btn btn-success btn-sm">Save</button>
                  <button class="btn btn-success btn-sm" href="<?= base_url('inventaris/')?>">Batal</button>
              </div>
          </div>
      </form>

 

  </div>
</div>
</div>











</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->