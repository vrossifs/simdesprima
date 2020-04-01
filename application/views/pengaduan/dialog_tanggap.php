<div class="modal-header">
    <h4 class="modal-title">Tanggap Aduan</h4>
    <style>
        .receive {
            border: 0.5px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 7.5px;
            margin: 10px;
        }

        .send {
            border-color: #ccc;
            background-color: #AFE1FF;
        }
    </style>
</div>
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/c_lamas/kirim_tanggapan/');?>">
    <div class="modal-body">
        <div style="height: 300px; overflow-y: scroll;">
            <?php foreach($percakapan as $key){ 
                if ($key['operator'] == 1) { ?>
                    <div class="receive send">
                        <p><b><?php echo $key['Nama'];?> (Admin)</b></p>
                        <p><?php echo $key['Komentar'];?></p>
                    </div>
                <?php } else { ?>
                    <div class="receive">
                        <p><b><?php echo $key['Nama'];?></b></p>
                        <p><?php echo $key['Komentar'];?></p>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        </br>
        <div class="form-group">
            <input type="hidden" name="kode_aduan" value="<?php echo $this->session->userdata('sessionID');?>">
            <label class="col-md-3 control-label">Tanggapan</label>
            <div class="col-md-8">
                <textarea name="tanggapan" class="form-control" placeholder="Tanggapan" rows="5" required></textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-sm btn-danger" style="width: 100px">Reset</button>
        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-sm btn-success" style="width: 100px">Submit</button>
    </div>
</form>