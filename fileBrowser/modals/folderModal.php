<div class="modal fade font" id="myModalFolder" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mx-auto text-center">Add folder</h4>
            </div>

            <div class="modal-body">
                <form  id="contact_form" action="../../../Php_droperino/fileBrowser/modalAction/folderCreation.php" method="post">
                    <div class="mx-auto col-12">
                        <label class="col-12 text-center" for="folderName">Folder name:</label>
                        <input class="form-control mx-auto col-6" name="folderName" id="folderName" required>
                    </div>
                </form>
        </div>
        <div class="modal-footer">
            <button type="submit" id="submitForm" class="btn btn-success" data-dismiss="modal" >Add Folder</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

    </div>
</div>
</div>