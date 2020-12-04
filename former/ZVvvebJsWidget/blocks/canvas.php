<div id="canvas">
  <div id="iframe-wrapper">
    <div id="iframe-layer">

      <div id="highlight-box">
        <div id="highlight-name"></div>

        <div id="section-actions">
          <a id="add-section-btn" href="" title="Add element"><i class="la la-plus"></i></a>
        </div>
      </div>

      <div id="select-box">

        <div id="wysiwyg-editor">
          <a id="bold-btn" href="" title="Bold"><i class="la la-bold"></i></a>
          <a id="italic-btn" href="" title="Italic"><i class="la la-italic"></i></a>
          <a id="underline-btn" href="" title="Underline"><i class="la la-underline"></i></a>
          <a id="strike-btn" href="" title="Strikeout">
            <del>S</del>
          </a>
          <a id="link-btn" href="" title="Create link"><i class="la la-link"></i></a>

          <div class="dropdown">
            <a class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
              <i class="la la-align-left"></i>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#"><i class="la la-lg la-align-left"></i> Align Left</a>
              <a class="dropdown-item" href="#"><i class="la la-lg la-align-center"></i> Align Center</a>
              <a class="dropdown-item" href="#"><i class="la la-lg la-align-right"></i> Align Right</a>
              <a class="dropdown-item" href="#"><i class="la la-lg la-align-justify"></i> Align Justify</a>
            </div>
          </div>

          <input name="color" type="color" pattern="#[a-f0-9]{6}" class="form-control">

          <select class="custom-select">
            <option value="">Default</option>
            <option value="Arial, Helvetica, sans-serif">Arial</option>
            <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Lucida Grande</option>
            <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif">Palatino Linotype</option>
            <option value="'Times New Roman', Times, serif">Times New Roman</option>
            <option value="Georgia, serif">Georgia, serif</option>
            <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
            <option value="'Comic Sans MS', cursive, sans-serif">Comic Sans</option>
            <option value="Verdana, Geneva, sans-serif">Verdana</option>
            <option value="Impact, Charcoal, sans-serif">Impact</option>
            <option value="'Arial Black', Gadget, sans-serif">Arial Black</option>
            <option value="'Trebuchet MS', Helvetica, sans-serif">Trebuchet</option>
            <option value="'Courier New', Courier, monospace">Courier New</option>
            <option value="'Brush Script MT', sans-serif">Brush Script</option>
          </select>
        </div>

        <div id="select-actions">
          <a id="drag-btn" href="" title="Drag element"><i class="la la-arrows"></i></a>
          <a id="parent-btn" href="" title="Select parent"><i class="la la-level-down la-rotate-180"></i></a>

          <a id="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
          <a id="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
          <a id="clone-btn" href="" title="Clone element"><i class="la la-copy"></i></a>
          <a id="delete-btn" href="" title="Remove element"><i class="la la-trash"></i></a>
        </div>
      </div>

      <!-- add section box -->
      <div id="add-section-box" class="drag-elements">

        <div class="header">
          <ul class="nav nav-tabs" id="box-elements-tabs" role="tablist">
            <li class="nav-item component-tab">
              <a class="nav-link active" id="box-components-tab" data-toggle="tab" href="#box-components" role="tab"
                 aria-controls="components" aria-selected="true"><i class="la la-lg la-cube"></i>
                <div><small>Components</small></div>
              </a>
            </li>
            <li class="nav-item blocks-tab">
              <a class="nav-link" id="box-blocks-tab" data-toggle="tab" href="#box-blocks" role="tab"
                 aria-controls="blocks" aria-selected="false"><i class="la la-lg la-image"></i>
                <div><small>Blocks</small></div>
              </a>
            </li>
            <li class="nav-item component-properties-tab" style="display:none">
              <a class="nav-link" id="box-properties-tab" data-toggle="tab" href="#box-properties" role="tab"
                 aria-controls="blocks" aria-selected="false"><i class="la la-lg la-cog"></i>
                <div><small>Properties</small></div>
              </a>
            </li>
          </ul>

          <div class="section-box-actions">

            <div id="close-section-btn" class="btn btn-light btn-sm bg-white btn-sm float-right"><i
                class="la la-close"></i></div>

            <div class="small mt-1 mr-3 float-right">

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="add-section-insert-mode-after" value="after" checked="checked"
                       name="add-section-insert-mode" class="custom-control-input">
                <label class="custom-control-label" for="add-section-insert-mode-after">After</label>
              </div>

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="add-section-insert-mode-inside" value="inside" name="add-section-insert-mode"
                       class="custom-control-input">
                <label class="custom-control-label" for="add-section-insert-mode-inside">Inside</label>
              </div>

            </div>

          </div>

          <div class="tab-content">
            <div class="tab-pane fade show active" id="box-components" role="tabpanel"
                 aria-labelledby="components-tab">

              <div class="search">
                <input class="form-control form-control-sm component-search" placeholder="Search components"
                       type="text" data-vvveb-action="addBoxComponentSearch" data-vvveb-on="keyup">
                <button class="clear-backspace" data-vvveb-action="clearComponentSearch">
                  <i class="la la-close"></i>
                </button>
              </div>

              <div>
                <div>

                  <ul class="components-list clearfix" data-type="addbox">
                  </ul>

                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="box-blocks" role="tabpanel" aria-labelledby="blocks-tab">

              <div class="search">
                <input class="form-control form-control-sm block-search" placeholder="Search blocks" type="text"
                       data-vvveb-action="addBoxBlockSearch" data-vvveb-on="keyup">
                <button class="clear-backspace" data-vvveb-action="clearBlockSearch">
                  <i class="la la-close"></i>
                </button>
              </div>

              <div>
                <div>

                  <ul class="blocks-list clearfix" data-type="addbox">
                  </ul>

                </div>
              </div>

            </div>

            <!-- div class="tab-pane fade" id="box-properties" role="tabpanel" aria-labelledby="blocks-tab">
                                      <div class="component-properties-sidepane">
                                          <div>
                                              <div class="component-properties">
                                                  <div class="mt-4 text-center">Click on an element to edit.</div>
                                              </div>
                                          </div>
                                      </div>
                                  </div -->
          </div>
        </div>

      </div>
      <!-- //add section box -->
    </div>
    <iframe src="about:none" id="iframe1"></iframe>
  </div>


</div>