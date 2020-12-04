<div class="modal fade" id="new-page-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">

    <form>

      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title text-primary"><i class="la la-lg la-file"></i> New page</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><small><i class="la la-close"></i></small></span>
          </button>
        </div>

        <div class="modal-body text">
          <div class="form-group row" data-key="type">
            <label class="col-sm-3 control-label">
              Template
              <abbr class="badge badge-pill badge-secondary" title="This template will be used as a start">?</abbr>
            </label>
            <div class="col-sm-9 input">
              <div>
                <select class="form-control custom-select" name="startTemplateUrl">
                  <option value="new-page-blank-template.html">Blank Template</option>
                  <option value="/render/former/ZBootstrapModalWidget/demo/clean.html">Narrow jumbotron</option>
                  <option value="demo/album/index.html">Album</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group row" data-key="href">
            <label class="col-sm-3 control-label">Page name</label>
            <div class="col-sm-9 input">
              <div>
                <input name="title" type="text" class="form-control" placeholder="My page" required>
              </div>
            </div>
          </div>

          <div class="form-group row" data-key="href">
            <label class="col-sm-3 control-label">File name</label>
            <div class="col-sm-9 input">
              <div>
                <input name="fileName" type="text" class="form-control" placeholder="my-page.html" required>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary btn-lg" type="submit"><i class="la la-check"></i> Create page</button>
          <button class="btn btn-secondary btn-lg" type="reset" data-dismiss="modal"><i class="la la-close"></i>
            Cancel
          </button>
        </div>
      </div>

    </form>

  </div>
</div>