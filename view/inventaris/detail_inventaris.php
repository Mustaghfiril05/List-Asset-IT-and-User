<!-- Begin Page Content -->
<div class="container-fluid" style="height:661px;">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> </h1>
    <div class="table-responsive" style="height:45rem; width: 74rem!important; overflow-x:hidden;" >
    <table class="table table-bordered" id="mytable">
        <tbody>

            <tr>
                <td  class='text-center'>
                 <b style="color:black;">Form</b>
                </td>
                <td  class='text-center'>
                    <b style="color:black;">Keterangan</b>
                </td>
            </tr>
                <tr>
                    <td>
                        Company
                    </td>
                    <td>
                        <?= $inventaris['company']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Pengguna Device
                    </td>
                    <td>
                        <?= $inventaris['pengguna_device']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Hostname Device
                    </td>
                    <td>
                        <?= $inventaris['hostname_device']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        LAN IP
                    </td>
                    <td>
                        <?= $inventaris['lan_ip']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Wireless IP
                    </td>
                    <td>
                        <?= $inventaris['wireless_ip']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        LAN MAC Address
                    </td>
                    <td>
                      <?= $inventaris['lan_mac_address']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Wireless MAC Address
                    </td>
                    <td>
                        <?= $inventaris['wireless_mac_address']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Serial Number
                    </td>
                    <td>
                        <?= $inventaris['serial_number']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Device
                    </td>
                    <td>
                        <?= $inventaris['device']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Device Merk
                    </td>
                    <td>
                        <?= $inventaris['merk_device']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Product Type
                    </td>
                    <td>
                        <?= $inventaris['product_tipe']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        RAM
                    </td>
                    <td>
                        <?= $inventaris['ram']; ?>
                    </td>
                </tr>


                <tr>
                    <td>
                        HardDisk
                    </td>
                    <td> 
                    <p class="uppercase"><?= $inventaris['harddisk']; ?></p> 
                    </td>
                </tr>

                <tr>
                    <td>
                        Processor
                    </td>
                    <td>
                        <?= strtoupper($inventaris['processor']); ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        VGA
                    </td>
                    <td>
                        <?= $inventaris['vga']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Lokasi
                    </td>
                    <td>
                        <?= $inventaris['lokasi']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Departement
                    </td>
                    <td>
                       <?= $inventaris['department']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Jenis Antivirus
                    </td>
                    <td>
                        <?= $inventaris['jenis_antivirus']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Expired
                    </td>
                    <td>
                       <?= $inventaris['expired']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Office
                    </td>
                    <td>
                        <?= $inventaris['office']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Account ID 365
                    </td>
                    <td>
                        <?= $inventaris['account365']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Sage
                    </td>
                    <td>
                        <?= $inventaris['sage']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Ms.Visio 
                    </td>
                    <td>
                        <?= $inventaris['visio']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        MS.Project
                    </td>
                    <td>
                        <?= $inventaris['ms_project']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Autocad LT
                    </td>
                    <td>
                        <?= $inventaris['autocad_lt']; ?>
                    </td>
                </tr>


                <tr>
                    <td>
                        Windows
                    </td>
                    <td>
                       <?= $inventaris['windows']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        VNC Password
                    </td>
                    <td>
                        <?= $inventaris['vnc_password']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Password RDP
                    </td>
                    <td>
                        <?= $inventaris['password_rdp']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Full Computer Name
                    </td>
                    <td>
                        <?= $inventaris['full_computer_name']; ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Is Active
                    </td>
                    <td>
                        <?= $inventaris['is_active']; ?>
                    </td>
                </tr>

               
        </tbody>
         
    </table>
    </div>
    <div class="form-group row justify-content-end">
        <div class="col-sm-12">
            <a class="btn btn-success btn-sm" href="<?= base_url('inventaris/')?>">Kembali</a>
            <a class="btn btn-success btn-sm" href="<?= base_url('daily_routine/')?>">List Daily Report</a>
        </div>
    </div>
    
    
</div>
</div>