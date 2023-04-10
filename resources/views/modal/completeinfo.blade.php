<form action="" method="POST" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalCompleteInfo" role="dialog">
        <div class="modal modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">{{__('Complete Your Information')}}</h2>
                </div>
                <div class="modal-body" class="d-flex flex-column gap-1">
                    <div id="address">
                        <p>Address:</p>
                        <input type="text" name="inAddr" id="" class="form-control">
                    </div>
                    <div id="phoneNum">
                        <p>Phone Number:</p>
                        <input type="text" name="inPNum" id="" class="form-control">
                    </div>
                    <input type="button" class="button" value="Save Information">
                </div>
            </div>
        </div>
    </div>
</form>