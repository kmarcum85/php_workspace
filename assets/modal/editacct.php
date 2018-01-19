<html !DOCTYPE>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Modal -->
        <div id="acctEdit" class="modal fade" role="dialog">
            <div class="modal-dialog">
            
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Account</h4>
                    </div>
                    <div class="modal-body">
                        <form action="modifyacct.php" method="post">
                            Account ID:<br>
                            <input disabled="true" name="row_Id" id="acctId"><br>
                            Account Name:<br>
                            <input type="text" name="edit_Name" id="editName"><br>
                            Account Type:<br>
                            <input type="text" name="edit_Type" id="editType"><br><br>
                            <button type="submit" class="btn btn-default">Save</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
        //triggered when modal is about to be shown
        $('#acctEdit').on('show.bs.modal', function(e) {
        
            //get data attribute of the clicked element
            var rowId = $(e.relatedTarget).data('row-id');
            var nameEdit = $(e.relatedTarget).data('name-edit');
            var typeEdit = $(e.relatedTarget).data('type-edit');
        
            //populate the textbox
            $(e.currentTarget).find('input[name="row_Id"]').val(rowId);
            $(e.currentTarget).find('input[name="edit_Name"]').val(nameEdit);
            $(e.currentTarget).find('input[name="edit_Type"]').val(typeEdit);
        });
        </script>
    </body>
</html>