<?php
include("folderScan.php");
?>
<!-- Modal -->
<div class="modal fade font"  id="myModalUpload" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title mx-auto text-center">Upload file</h4>
			</div>
			<div class="modal-body">
<form id="contact_form_upload" action="../../../Php_droperino/fileBrowser/modalAction/fileUpload.php" method="post" enctype="multipart/form-data">
                <div class="mx-auto col-12 spacer">
                    <div class="input-group">
                        <label class="input-group-btn no-margin">
                    <span class="btn btn-primary">
                        Upload<input type="file" name="fileToUpload" id="fileToUpload" style="display: none;">
                    </span>
                        </label>
                        <input type="text" class="form-control" placeholder="No file uploaded" name="fileToUpload" readonly>
                    </div>
                </div>

                <!-- upload location -->
              <label class="col-12 text-center" for="uploadid">Folder save to:</label>
                    <select class="form-control mx-auto col-6" id="uploadid" name="uploadId" >
                        <option value="" disabled selected>Select folder</option>
                        <?php
                         $folderList = scannedArray();
                        foreach($folderList as $folderNames) { ?>
                        <option value="<?php echo $folderNames; ?>"><?php echo $folderNames; ?></option>
                            <?php
                        } ?>
                    </select>
    <input type="submit" name="submit">
</form>

			</div>
			<div class="modal-footer">
                <button type="button" id="submitFormUpload" class="btn btn-success" data-dismiss="modal">Upload</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

