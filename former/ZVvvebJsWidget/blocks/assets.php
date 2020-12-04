<?php
/*........... JS files ............... */
$this->fileJs('https://cdn.jsdelivr.net/npm/jquery.hotkeys@0.1.0/jquery.hotkeys.min.js');
$this->fileJs('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/builder.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/undo.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/inputs.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/components-bootstrap4.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/components-widgets.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/codemirror/lib/codemirror.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/codemirror/lib/xml.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/codemirror/lib/formatting.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/plugin-codemirror.js');
$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/blocks-bootstrap4.js');

/* ======= Bootstrap colorpicker //uncomment bellow scripts to enable ============ */
/*
 *
 * $this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js');
    $this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/plugin-bootstrap-colorpicker.js');
*
*/
/* ============================================================================== */


/* Components ---------------------------------------- */

$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/components-server.js');
/*$this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/newwidgets1.js');*/

/* --------------------------------------------------- */


/* __________ jszip - download page as zip ____________________ */
/*
   $this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/jszip/jszip.min.js');
   $this->fileJs('/render/former/ZVvvebJsWidget/assets/libs/builder/plugin-jszip.js');
*/
/* ____________________________________________________________ */


/* +++++++++++ autocomplete plugin used by autocomplete input +++++++++++ */
/*
  $this->fileJs('https://cdn.jsdelivr.net/npm/jquery-autocomplete-js@1.1.0/autocomplete.min.js');
*/
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


/*........... End JS files ............... */
/* ''''''''''''''''' CSS files ''''''''''''''''''''''''''''''' */

/*
 * $this->fileCss('/render/former/ZVvvebJsWidget/assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css');
 * */

$this->fileCss('/render/former/ZVvvebJsWidget/assets/libs/codemirror/lib/codemirror.css');
$this->fileCss('/render/former/ZVvvebJsWidget/assets/libs/codemirror/theme/material.css');
$this->fileCss('/render/former/ZVvvebJsWidget/assets/css/editor.css');
$this->fileCss('/render/former/ZVvvebJsWidget/assets/css/line-awesome.min.css');

/* ''''''''''''''''' End CSS files ''''''''''''''''''''''''''''''' */
?>