<?php

/**
 *
 *
 * Author: SherzodMangliyev
 *
 */

use zetsoft\system\kernels\ZView;

/** @var ZView $this */

?>

<?
/* Assets and 3rd party libraries */
$this->require('/render/former/ZVvvebJsWidget/blocks/assets.php');
/* ----------------------------- */

/* Main JS file  */
$this->fileJs('/render/former/ZVvvebJsWidget/assets/main.js');
/* ------------ */
?>

<div id="vvveb-builder">

    <?
    /* Top Panel */
    echo $this->require('/render/former/ZVvvebJsWidget/blocks/top_panel.php');
    /* -------- */

    /* Left Panel */
    echo $this->require('/render/former/ZVvvebJsWidget/blocks/left_panel.php');
    /* ------- */

    /* Canvas */
    echo $this->require('/render/former/ZVvvebJsWidget/blocks/canvas.php');
    /* ------- */

    /* Right Panel */
    echo $this->require('/render/former/ZVvvebJsWidget/blocks/right_panel.php');
    /* ----------- */

    /* Bottom Panel */
    /*echo $this->require('/render/former/ZVvvebJsWidget/blocks/bottom_panel.php');*/
    /* ----------- */


    /* Templates */

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_textinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_textareainput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_checkboxinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_radioinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_radiobuttoninput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_toggle.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_header.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_select.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_listinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_grid.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_rangeinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_imageinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_colorinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_boostrap_color_picker_input.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_numberinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_button.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_cssunitinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_filemanager_folder.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_filemanager_page.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_filemanager_component.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_sectioninput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_property.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_autocompletelist.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_input_tagsinput.php');

    echo $this->require('/render/former/ZVvvebJsWidget/blocks/vvveb_section.php');

    /* End Templates */


    /* Export html modal */
    echo $this->require('/render/former/ZVvvebJsWidget/blocks/textarea_modal.php');
    /* ----------------- */


    /* Message modal */
    echo $this->require('/render/former/ZVvvebJsWidget/blocks/message_modal.php');
    /* ------------- */


    /* New page modal */
    echo $this->require('/render/former/ZVvvebJsWidget/blocks/new_page_modal.php');
    /* ------------- */

    ?>

</div>

