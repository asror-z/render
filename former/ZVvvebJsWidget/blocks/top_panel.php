<div id="top-panel">
  <img src="/render/former/ZVvvebJsWidget/assets/img/logo.png" alt="Vvveb" class="float-left" id="logo">


  <div class="btn-group float-left" role="group">
    <button class="btn btn-light" title="Toggle file manager" id="toggle-file-manager-btn"
            data-vvveb-action="toggleFileManager" data-toggle="button" aria-pressed="false">
      <img src="/render/former/ZVvvebJsWidget/assets/libs/builder/icons/file-manager-layout.svg" width="20px"
           height="20px">
    </button>

    <button class="btn btn-light" title="Toggle left column" id="toggle-left-column-btn"
            data-vvveb-action="toggleLeftColumn" data-toggle="button" aria-pressed="false">
      <img src="/render/former/ZVvvebJsWidget/assets/libs/builder/icons/left-column-layout.svg" width="20px"
           height="20px">
    </button>

    <button class="btn btn-light" title="Toggle right column" id="toggle-right-column-btn"
            data-vvveb-action="toggleRightColumn" data-toggle="button" aria-pressed="false">
      <img src="/render/former/ZVvvebJsWidget/assets/libs/builder/icons/right-column-layout.svg" width="20px"
           height="20px">
    </button>
  </div>

  <div class="btn-group mr-3" role="group">
    <button class="btn btn-light" title="Undo (Ctrl/Cmd + Z)" id="undo-btn" data-vvveb-action="undo"
            data-vvveb-shortcut="ctrl+z">
      <i class="la la-undo"></i>
    </button>

    <button class="btn btn-light" title="Redo (Ctrl/Cmd + Shift + Z)" id="redo-btn" data-vvveb-action="redo"
            data-vvveb-shortcut="ctrl+shift+z">
      <i class="la la-undo la-flip-horizontal"></i>
    </button>
  </div>


  <div class="btn-group mr-3" role="group">
    <button class="btn btn-light" title="Designer Mode (Free component dragging)" id="designer-mode-btn"
            data-toggle="button" aria-pressed="false" data-vvveb-action="setDesignerMode">
      <i class="la la-hand-grab-o"></i>
    </button>

    <button class="btn btn-light" title="Preview" id="preview-btn" type="button" data-toggle="button"
            aria-pressed="false" data-vvveb-action="preview">
      <i class="la la-eye"></i>
    </button>

    <button class="btn btn-light" title="Fullscreen (F11)" id="fullscreen-btn" data-toggle="button"
            aria-pressed="false" data-vvveb-action="fullscreen">
      <i class="la la-arrows"></i>
    </button>

    <button class="btn btn-light" title="Download" id="download-btn" data-vvveb-action="download"
            data-download="index.html">
      <i class="la la-download"></i>
    </button>

  </div>


  <div class="btn-group mr-3 float-right" role="group">
    <button class="btn btn-primary btn-icon" title="Export (Ctrl + E)" id="save-btn" data-vvveb-action="saveAjax"
            data-vvveb-url="/admin/?module=editor/editor&action=save" data-v-vvveb-shortcut="ctrl+e">
      <i class="la la-save"></i> <span data-v-gettext>Save page</span>
    </button>
  </div>

  <div class="btn-group float-right mr-3 responsive-btns" role="group">
    <button id="mobile-view" data-view="mobile" class="btn btn-light" title="Mobile view"
            data-vvveb-action="viewport">
      <i class="la la-mobile-phone"></i>
    </button>

    <button id="tablet-view" data-view="tablet" class="btn btn-light" title="Tablet view"
            data-vvveb-action="viewport">
      <i class="la la-tablet"></i>
    </button>

    <button id="desktop-view" data-view="" class="btn btn-light" title="Desktop view" data-vvveb-action="viewport">
      <i class="la la-laptop"></i>
    </button>

  </div>

</div>
