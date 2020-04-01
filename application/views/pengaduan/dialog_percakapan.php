<div class="modal-header">
    <h4 class="modal-title">Riwayat Percakapan</h4>
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
<div class="modal-body">
    <div style="height: 400px; overflow-y: scroll;">
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
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
</div>