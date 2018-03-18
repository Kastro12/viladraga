

<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Insert new image</h4>
      </div>
      <div class="modal-body">
        
        <div class="container-fluid">
    

      <br/>
      <form method="POST" name="img_form">
      <label class="col-form-label">Img url and name</label>
      <input type="text" class="form-control" placeholder="Image name" name="img_name" id="img_name" />
      <br/><br/>

      <label class="col-form-label">Category</label>
      <select name="category" id="category" class="form-control">
        <option value="ap">Apartment</option>
        <option value="vila">Vila</option>
        <option value="trsteno">Trsteno</option>
        <option value="jaz">Jaz</option>
        <option value="ploce">Ploce</option>
      </select>
      <!--<input type="text" class="form-control" placeholder="Image name" name="category" id="category" /> -->
      <br/><br/>

      <label class="col-form-label">Title</label>
      <input type="text" class="form-control" placeholder="Image name" name="title" id="title" />
      <br/><br/>           

    </div>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" name="close" id="close">Close</button>
        <button type="button" class="btn btn-success" id="save" name="save">Save</button>
      </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
