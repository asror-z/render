
  <?php 

    $this->registerJsFile("https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/js/plugins/jquery.js");
    $this->registerJsFile("https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/js/plugins/moment.min.js");
    $this->registerJsFile("https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/js/datepicker.all.js");
    $this->registerJsFile("https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/js/datepicker.en.js");

    $this->registerJs("

         $('#myid').datePicker({
          hasShortcut: true,
           min: '2018-01-01',
          max: '2020-06-29',
          format:'YYYY-MM-DD',
          language: 'en',
          shortcutOptions: [{
            name: 'Nowadays',
            day: '0'
          }, {
            name: 'yesterday',
            day: '-1'
          }, {
            name: 'A week ago',
            day: '-7'
          }]
        });

      ")

   ?>

  <link rel="stylesheet" href="https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/css/datepicker.css">
  <link rel="stylesheet" href="https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/css/iconfont.css">

<br>

  <div class="row">
  	<div class="col-sm-12">
  		<div class="form-group">
  			<div class="col-sm-12">
  				<label>
  					Single selection of year, month and day
  				</label> <br>
  				<div class="c-datepicker-date-editor c-datepicker-single-editor J-datepicker-day mt10" id="myid">
  				  <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
  				  <input type="text" autocomplete="off" name="" placeholder="Select date" class=" c-datepicker-data-input only-date" value="">
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

  <!-- <script src="https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/js/plugins/jquery.js"></script>
  <script src="https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/js/plugins/moment.min.js"></script>
  <script src="https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/js/datepicker.all.min.js"></script>
  <script src="https://cdn.statically.io/gh/qiuyaofan/datepicker/af09df99/js/datepicker.en.js"></script> -->
  <script type="text/javascript">
         //Year Month Day Single
        
      </script>
