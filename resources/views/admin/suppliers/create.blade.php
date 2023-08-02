<div class="card-header">
    <a type="button" data-bs-toggle="modal"
    data-bs-target="#createSupplier" class="btn icon icon-left btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Add Supplier</a>
</div>


<!--login form Modal -->
<div class="modal fade text-left" id="createSupplier" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Add Data Supplier</h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="#">
            <div class="modal-body">
                <label>Code :</label>
                <div class="form-group">
                    <input type="text" placeholder="BNA001" class="form-control">
                </div>
                <label>Name :</label>
                <div class="form-group">
                    <input type="text" placeholder="Ahmad Dani" class="form-control">
                </div>
                <label>Address :</label>
                <div class="form-group">
                    <textarea rows="2" placeholder="Banjarneagara kel. Krandegan rt 04/09" class="form-control"></textarea>
                </div>
                <label>Phone :</label>
                <div class="form-group">
                    <input type="text" placeholder="0897277289292" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status :</label>
                    <select class="form-control">
                        <option value="active">Active</option>
                        <option value="non-active">Non-Active</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Save</span>
                </button>
            </div>
        </form>

        </div>
    </div>
</div>

