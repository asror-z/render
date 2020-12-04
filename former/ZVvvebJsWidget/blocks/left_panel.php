<div id="left-panel">

  <div id="filemanager">
    <div class="header">
      <a href="#" class="text-secondary">Pages</a>

      <div class="btn-group responsive-btns mr-4 float-right" role="group">
        <button class="btn btn-link btn-sm" title="New file" id="new-file-btn" data-vvveb-action="newPage"
                data-vvveb-shortcut="">
          <i class="la la-file"></i> <small>New page</small>
        </button>

        <!--  &ensp;
                          <button class="btn btn-link text-dark p-0"  title="Delete file" id="delete-file-btn" data-vvveb-action="deletePage" data-vvveb-shortcut="">
                              <i class="la la-trash"></i> <small>Delete</small>
                          </button> -->
      </div>

    </div>

    <div class="tree">
      <ol>
      </ol>
    </div>
  </div>


  <div class="drag-elements">

    <div class="header">
      <ul class="nav nav-tabs  nav-fill" id="elements-tabs" role="tablist">
        <li class="nav-item component-tab">
          <a class="nav-link active" id="components-tab" data-toggle="tab" href="#components" role="tab"
             aria-controls="components" aria-selected="true" title="Components"><img
              src="/render/former/ZVvvebJsWidget/assets/libs/builder/icons/product.svg" height="23">
            <div><small>Components</small></div>
          </a>
        </li>
        <!-- li class="nav-item blocks-tab">
                        <a class="nav-link" id="blocks-tab" data-toggle="tab" href="#blocks" role="tab" aria-controls="blocks" aria-selected="false" title="Sections"><img src="libs/builder/icons/list_group.svg" width="24" height="23"> <div><small>Sections</small></div></a>
                      </li -->
        <li class="nav-item blocks-tab">
          <a class="nav-link" id="blocks-tab" data-toggle="tab" href="#blocks" role="tab" aria-controls="blocks"
             aria-selected="false" title="Blocks"><img
              src="/render/former/ZVvvebJsWidget/assets/libs/builder/icons/list_group.svg" height="23">
            <div><small>Sections</small></div>
          </a>
        </li>
        <li class="nav-item component-properties-tab" style="display:none">
          <a class="nav-link" id="properties-tab" data-toggle="tab" href="#properties" role="tab"
             aria-controls="blocks" aria-selected="false" title="Properties"><img
              src="/render/former/ZVvvebJsWidget/assets/libs/builder/icons/filters.svg"
              height="23">
            <div><small>Properties</small></div>
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="components" role="tabpanel" aria-labelledby="components-tab">

          <div class="search">
            <input class="form-control form-control-sm component-search" placeholder="Search components" type="text"
                   data-vvveb-action="componentSearch" data-vvveb-on="keyup">
            <button class="clear-backspace" data-vvveb-action="clearComponentSearch">
              <i class="la la-close"></i>
            </button>
          </div>

          <div class="drag-elements-sidepane sidepane">
            <div>

              <ul class="components-list clearfix" data-type="leftpanel">
              </ul>

            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="blocks" role="tabpanel" aria-labelledby="blocks-tab">


          <ul class="nav nav-tabs nav-fill sections-tabs" id="properties-tabs" role="tablist">
            <li class="nav-item content-tab">
              <a class="nav-link active" data-toggle="tab" href="#sections-new-tab" role="tab"
                 aria-controls="components" aria-selected="true">
                <i class="la la-plus"></i>
                <div><span>Add section</span></div>
              </a>
            </li>
            <li class="nav-item style-tab">
              <a class="nav-link" data-toggle="tab" href="#sections-list" role="tab" aria-controls="blocks"
                 aria-selected="false">
                <i class="la la-bars"></i>
                <div><span>Page Sections</span></div>
              </a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade show active" id="sections-new-tab" data-section="content" role="tabpanel"
                 aria-labelledby="content-tab">


              <div class="search">
                <input class="form-control form-control-sm block-search" placeholder="Search sections" type="text"
                       data-vvveb-action="blockSearch" data-vvveb-on="keyup">
                <button class="clear-backspace" data-vvveb-action="clearBlockSearch">
                  <i class="la la-close"></i>
                </button>
              </div>


              <div class="drag-elements-sidepane sidepane">
                <div>

                  <ul class="components-list clearfix" data-type="leftpanel">
                  </ul>

                </div>
              </div>

            </div>

            <div class="tab-pane fade show" id="sections-list" data-section="style" role="tabpanel"
                 aria-labelledby="style-tab">

              <div class="sections">

                <div class="section-item">
                  <div class="handle"></div>
                  <div>

                    <div class="name">Top header
                      <div class="type">header</div>
                    </div>

                  </div>
                  <div class="buttons">
                    <a class="delete-btn" href="" title="Remove element"><i class="la la-trash text-danger"></i></a>
                    <a class="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
                    <a class="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
                    <a class="properties-btn" href="" title="Properties"><i class="la la-cog"></i></a>
                  </div>
                </div>
                <div class="section-item">
                  <div class="handle"></div>
                  <div>

                    <div class="name">Welcome area
                      <div class="type">section</div>
                    </div>

                  </div>
                  <div class="buttons">
                    <a class="delete-btn" href="" title="Remove element"><i class="la la-trash text-danger"></i></a>
                    <a class="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
                    <a class="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
                    <a class="properties-btn" href="" title="Properties"><i class="la la-cog"></i></a>
                  </div>
                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="tab-pane fade" id="properties" role="tabpanel" aria-labelledby="blocks-tab">
          <div class="component-properties-sidepane">
            <div>
              <div class="component-properties">
                <ul class="nav nav-tabs nav-fill" id="properties-tabs" role="tablist">
                  <li class="nav-item content-tab">
                    <a class="nav-link active" data-toggle="tab" href="#content-left-panel-tab" role="tab"
                       aria-controls="components" aria-selected="true">
                      <i class="la la-lg la-cube"></i>
                      <div><span>Content</span></div>
                    </a>
                  </li>
                  <li class="nav-item style-tab">
                    <a class="nav-link" data-toggle="tab" href="#style-left-panel-tab" role="tab"
                       aria-controls="blocks" aria-selected="false">
                      <i class="la la-lg la-image"></i>
                      <div><span>Style</span></div>
                    </a>
                  </li>
                  <li class="nav-item advanced-tab">
                    <a class="nav-link" data-toggle="tab" href="#advanced-left-panel-tab" role="tab"
                       aria-controls="blocks" aria-selected="false">
                      <i class="la la-lg la-cog"></i>
                      <div><span>Advanced</span></div>
                    </a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div class="tab-pane fade show active" id="content-left-panel-tab" data-section="content"
                       role="tabpanel" aria-labelledby="content-tab">
                    <div class="mt-4 text-center">Click on an element to edit.</div>
                  </div>

                  <div class="tab-pane fade show" id="style-left-panel-tab" data-section="style" role="tabpanel"
                       aria-labelledby="style-tab">
                  </div>

                  <div class="tab-pane fade show" id="advanced-left-panel-tab" data-section="advanced" role="tabpanel"
                       aria-labelledby="advanced-tab">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>