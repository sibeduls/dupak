            <div class="row">
            <?php echo back_button() ?>

                <div class="col-md-8 col-md-offset-2">
                   
                    <div class="account-box">
                         
                        <div>
                        </div>
                        
                        <form method="post" action="<?php echo base_url('backend/user/update') ?>" enctype="multipart/form-data">
                            <?php foreach ($karyawan as $row) { 


                            }?>
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label for="nik">NIP</label>
                                <input type="hidden" name="id_karyawan" value="<?php echo $row->id_karyawan; ?>" class="form-control">
                                
                                <input type="text" name="nip" value="<?php echo $row->nip; ?>" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" value="<?php echo $row->nik; ?>" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?php echo $row->nama_lengkap; ?>"  class="form-control">
                                 
                            </div>
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="<?php echo $row->tempat_lahir; ?>" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label>Tanggal lahir</label>
                                <input type="date" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir; ?>" class="form-control" style="line-height: 16px;">
                                
                            </div>
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label>Alamat</label>
                                <input type="text" name="alamat" value="<?php echo $row->alamat; ?>" class="form-control">
                               
                                 
                            </div>
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label>Email</label>
                                <input type="text" name="email" value="<?php echo $row->email; ?>" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label>No telepon</label>
                                <input type="text" name="no_telepon" value="<?php echo $row->no_telp; ?>" class="form-control">
                                
                            </div>
                 

                            <div class="form-group <?php echo form_error('fungsional') ? 'has-error' : null; ?>">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label>Fungsional</label>
                                <select name="fungsional" class="form-control" onchange="get_jenjang(this.value)" required="required">
                                <option value="">-- Pilih --</option>
                                 <?php foreach ($fungsional as  $k => $val) { 
                                        if($val->id_tipefungsional == $row->id_tipefungsional){
                                            $selected = 'selected="selected"';
                                        }else{
                                            $selected = '';
                                        }
                                     ?>
                                    <option value="<?php echo $val->id_tipefungsional; ?>" <?php echo $selected ?>> <?php echo $val->tipe_fungsional; ?> </option>
                                    <?php } ?>
                                </select>
                                <span style="color: red;"><?php echo form_error('fungsional'); ?></span>
                            </div>

                            <div class="form-group <?php echo form_error('jenjang') ? 'has-error' : null; ?>">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label for="jenjang">Jabatan</label>
                                <select name="id_jenjang" class="form-control" id="jenjang" required="required" onchange="get_golongan(this.value)">
                                </select>
                                <span style="color: red;"><?php echo form_error('jenjang'); ?></span>
                            </div>

                            
                            <div class="form-group <?php echo form_error('golongan') ? 'has-error' : null; ?>">
                                <!-- <a href="#" class="pull-right label-forgot">Forgot email?</a> -->
                                <label for="jenjang">Golongan</label>
                                <select name="id_golongan" class="form-control" id="golongan" required="required">
                                </select>
                                <span style="color: red;"><?php echo form_error('golongan'); ?></span>
                            </div>
                        
                          
                             <hr>

                           <input type="submit" class="btn btn btn-primary pull-right" value="Simpan">
                        </form> 

                        <br />
                         <br />
                </div>

                
            </div>
        </div>
        <script>   
        var base_url = '<?php echo base_url() ?>';
        let dropdown_golongan = $("#golongan");
        // dropdown_golongan.empty();
        // dropdown_golongan.append("<option select='true' value=''  disabled'> Pilih Jenjang Dahulu </option>");
        // dropdown_golongan.prop('selectedIndex',0);

        let dropdown_jenjang = $("#jenjang");

        get_golongan(<?php echo $karyawan[0]->id_jenjang ?>);
        get_jenjang(<?php echo $karyawan[0]->id_tipefungsional ?>);
        var id_jenjang = '<?php echo $karyawan[0]->id_jenjang ?>';
        var id_golongan = '<?php echo $karyawan[0]->id_golongan ?>';

        ///$("#golongan").val(id_golongan);
            //                            $("#jenjang").val(id_jenjang);

        // $('#golongan option[value="<?php echo $row->id_golongan ?>"]').attr('selected','selected');
        // $('#jenjang option[value=<?php echo $row->id_jenjang ?>]').attr('selected','selected');
  // dropdown_golongan.val(<?php echo $row->id_golongan ?>);
     //   dropdown_jenjang.val(<?php echo $row->id_jenjang ?>);
        // dropdown_jenjang.empty();
        // dropdown_jenjang.append("<option select='true' value=''  disabled'> Pilih Tipe Fungsional Dahulu </option>");
        // dropdown_jenjang.prop('selectedIndex',0);

            function get_jenjang(a){
               // alert(a);
                if(a == ''){
                    dropdown_jenjang.empty();
                    dropdown_jenjang.append("<option select='true' value='' disabled'> Pilih Tipe Fungsional Dahulu </option>");
                    dropdown_jenjang.prop('selectedIndex',0);
                    dropdown_golongan.empty();
                    dropdown_golongan.append("<option select='true'  value=''  disabled'> Pilih Jenjang Dahulu </option>");
                    dropdown_golongan.prop('selectedIndex',0);
                }else{
                  //  alert(a);
                    $.ajax({
                        type:"POST",
                        data:"id_tipefungsional="+a,
                        dataType:"json",
                        url:base_url+"ajax/get_jenjang",
                        success:function(dt){
                            console.log(dt);
                            if(dt.status == 'TRUE'){
                               // dropdown_jenjang.append($('<option></option>').attr('value', entry.abbreviation).text(entry.name));
                            $.each(dt.data, function (key, entry) {
                                if(entry.id_jenjang == id_jenjang){
                                    dropdown_jenjang.append($('<option></option>').attr('value', entry.id_jenjang).attr('selected','selected').text(entry.nama_jenjang));

                                }else{
                                dropdown_jenjang.append($('<option></option>').attr('value', entry.id_jenjang).text(entry.nama_jenjang));
                                }
                                    });   
                            }
                            


                        }
                    })
                }
                
            }



            function get_golongan(a){
               // alert(a);
                if(a == ''){
                    dropdown_golongan.empty();
                    dropdown_golongan.append("<option select='true'  value='' disabled'> Pilih Jenjang Dahulu </option>");
                    dropdown_golongan.prop('selectedIndex',0);
                }else{
                    $.ajax({
                        type:"POST",
                        data:"id_golongan="+a,
                        dataType:"json",
                        url:base_url+"ajax/get_golongan",
                        success:function(dt){
                            console.log(dt);
                            if(dt.status == 'TRUE'){
                                dropdown_golongan.empty();
                    //dropdown_golongan.append("<option select='true' value=''  disabled'> Pilih Golongan </option>");
                   
                            // dropdown.append($('<option></option>').attr('value', entry.abbreviation).text(entry.name));
                            $.each(dt.data, function (key, entry) {
                                if(entry.id_golongan == id_golongan){
                                    dropdown_golongan.append($('<option></option>').attr('value', entry.id_golongan).attr('selected','selected').text(entry.golongan+" - "+entry.nama_golongan));

                                }else{
                        dropdown_golongan.append($('<option></option>').attr('value', entry.id_golongan).text(entry.golongan+" - "+entry.nama_golongan));
                            }
                            });
                            }


                        }
                    })
                }
                
            }

            </script>