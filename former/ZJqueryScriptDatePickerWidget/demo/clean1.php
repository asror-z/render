
<link rel="stylesheet" href="https://rawcdn.githack.com/qiuyaofan/datepicker/af09df99da5fcc03adb2d55c99a1aa73e7145dec/css/datepicker.css">

</head>
<body>
<div class="p20 container">
    <h1>Versatile Date/Time/Month/Year Picker Examples</h1>
    <div class="mt40">
        <div>Time Picker</div>
        <div class="c-datepicker-date-editor c-datepicker-single-editor J-datepicker-time mt10">
            <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
            <input type="text" autocomplete="off" name="" placeholder="Select" class=" c-datepicker-data-input only-time"
                   value="">
        </div>
    </div>
    <div class="mt40">
        <div>Time Range Picker</div>
        <div class="c-datepicker-date-editor c-datepicker-single-editor J-datepicker-time-range mt10">
            <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
            <input placeholder="Start" name="" class="c-datepicker-data-input only-time" value="">
            <span class="c-datepicker-range-separator">-</span>
            <input placeholder="End" name="" class="c-datepicker-data-input only-time" value="">
        </div>
    </div>
    <div class="mt40">
        <div>Date Picker</span></div>
        <div class="c-datepicker-date-editor c-datepicker-single-editor J-datepicker-day mt10">
            <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
            <input type="text" autocomplete="off" name="" placeholder="Select" class=" c-datepicker-data-input only-date" value="">
        </div>
    </div>
    <div class="mt40">
        <div>Date Range Picker</div>
        <div class="c-datepicker-date-editor  J-datepicker-range-day mt10">
            <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
            <input placeholder="Start" name="" class="c-datepicker-data-input only-date" value="">
            <span class="c-datepicker-range-separator">-</span>
            <input placeholder="End" name="" class="c-datepicker-data-input only-date" value="">
        </div>
    </div>

    <div class="mt40">
        <div>With Predefined Date Ranges</div>
        <div class="c-datepicker-date-editor J-datepicker-range-day mt10">
            <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
            <input placeholder="Start" name="" class="c-datepicker-data-input only-date" value="">
            <span class="c-datepicker-range-separator">-</span>
            <input placeholder="End" name="" class="c-datepicker-data-input only-date" value="">
        </div>
    </div>

    <div class="mt40">
        <div>With Time Picker</span></div>
        <div class="c-datepicker-date-editor c-datepicker-single-editor J-datepicker mt10">
            <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
            <input type="text" autocomplete="off" name="" placeholder="Select" class=" c-datepicker-data-input">
        </div>
    </div>
    <div class="mt40">
        <div>With Time Range Picker</span></div>
        <div class="c-datepicker-date-editor J-datepicker-range mt10">
            <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
            <input placeholder="Start" name="" class="c-datepicker-data-input" value="2018-01-01 04:00:00">
            <span class="c-datepicker-range-separator">-</span>
            <input placeholder="End" name="" class="c-datepicker-data-input" value="2018-03-01 04:00:00">
        </div>
    </div>

    <div class="mt40">
        <div>Month Picker</span></div>
        <div class="c-datepicker-date-editor c-datepicker-single-editor J-yearMonthPicker-single mt10">
            <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
            <input type="text" autocomplete="off" name="" placeholder="Select" class=" c-datepicker-data-input" value="">
        </div>
    </div>

    <div class="mt40">
        <div>Year Picker</div>
        <div class="c-datepicker-date-editor c-datepicker-single-editor J-yearPicker-single mt10">
            <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
            <input type="text" autocomplete="off" name="" placeholder="Select" class=" c-datepicker-data-input" value="">
        </div>
    </div>


</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

<script src="https://rawcdn.githack.com/qiuyaofan/datepicker/af09df99da5fcc03adb2d55c99a1aa73e7145dec/js/datepicker.all.min.js"></script>


<script src="js/datepicker.en.js"></script>
<script type="text/javascript">

    $(function(){
        $('.J-datepicker-time').datePicker({
            format: 'HH:mm:ss',
            min: '04:23:11',
            language: 'en'
        });
        $('.J-datepicker-time-range').datePicker({
            format: 'HH:mm:ss',
            isRange: true,
            min: '04:23:11',
            max: '20:59:59',
            language: 'en'
        });
        var DATAPICKERAPI = {
            activeMonthRange: function () {
                return {
                    begin: moment().set({ 'date': 1, 'hour': 0, 'minute': 0, 'second': 0 }).format('YYYY-MM-DD HH:mm:ss'),
                    end: moment().set({ 'hour': 23, 'minute': 59, 'second': 59 }).format('YYYY-MM-DD HH:mm:ss')
                }
            },
            shortcutMonth: function () {
                var nowDay = moment().get('date');
                var prevMonthFirstDay = moment().subtract(1, 'months').set({ 'date': 1 });
                var prevMonthDay = moment().diff(prevMonthFirstDay, 'days');
                return {
                    now: '-' + nowDay + ',0',
                    prev: '-' + prevMonthDay + ',-' + nowDay
                }
            },
            shortcutPrevHours: function (hour) {
                var nowDay = moment().get('date');
                var prevHours = moment().subtract(hour, 'hours');
                var prevDate=prevHours.get('date')- nowDay;
                var nowTime=moment().format('HH:mm:ss');
                var prevTime = prevHours.format('HH:mm:ss');
                return {
                    day: prevDate + ',0',
                    time: prevTime+',' + nowTime,
                    name: 'Nearly '+ hour+' Hours'
                }
            },
            rangeMonthShortcutOption1: function () {
                var result = DATAPICKERAPI.shortcutMonth();
                var resultTime= DATAPICKERAPI.shortcutPrevHours(18);
                return [{
                    name: 'Yesterday',
                    day: '-1,-1',
                    time: '00:00:00,23:59:59'
                }, {
                    name: 'This Month',
                    day: result.now,
                    time: '00:00:00,'
                }, {
                    name: 'Lasy Month',
                    day: result.prev,
                    time: '00:00:00,23:59:59'
                }, {
                    name: resultTime.name,
                    day: resultTime.day,
                    time: resultTime.time
                }];
            },
            rangeShortcutOption1: [{
                name: 'Last week',
                day: '-7,0'
            }, {
                name: 'Last Month',
                day: '-30,0'
            }, {
                name: 'Last Three Months',
                day: '-90, 0'
            }],
            singleShortcutOptions1: [{
                name: 'Today',
                day: '0',
                time: '00:00:00'
            }, {
                name: 'Yesterday',
                day: '-1',
                time: '00:00:00'
            }, {
                name: 'One Week Ago',
                day: '-7'
            }]
        };
        $('.J-datepicker').datePicker({
            hasShortcut:true,
            language: 'en',
            min:'2018-01-01 04:00:00',
            max:'2029-10-29 20:59:59',
            shortcutOptions:[{
                name: 'Today',
                day: '0'
            }, {
                name: 'Yesterday',
                day: '-1',
                time: '00:00:00'
            }, {
                name: 'One Week Ago',
                day: '-7'
            }],
            hide:function(){
                console.info(this)
            }
        });


        $('.J-datepicker-day').datePicker({
            hasShortcut: true,
            language: 'en',
            shortcutOptions: [{
                name: 'Today',
                day: '0'
            }, {
                name: 'Yesterday',
                day: '-1'
            }, {
                name: 'One week ago',
                day: '-7'
            }]
        });


        $('.J-datepicker-range-day').datePicker({
            hasShortcut: true,
            language: 'en',
            format: 'YYYY-MM-DD',
            isRange: true,
            shortcutOptions: DATAPICKERAPI.rangeShortcutOption1
        });


        $('.J-datepickerTime-single').datePicker({
            format: 'YYYY-MM-DD HH:mm',
            language: 'en',
        });


        $('.J-datepickerTime-range').datePicker({
            format: 'YYYY-MM-DD HH:mm',
            isRange: true,
            language: 'en'
        });


        $('.J-datepicker-range').datePicker({
            hasShortcut: true,
            language: 'en',
            min: '2018-01-01 06:00:00',
            max: '2029-04-29 20:59:59',
            isRange: true,
            shortcutOptions: [{
                name: 'Yesterday',
                day: '-1,-1',
                time: '00:00:00,23:59:59'
            },{
                name: 'Last Week',
                day: '-7,0',
                time:'00:00:00,'
            }, {
                name: 'Last Month',
                day: '-30,0',
                time: '00:00:00,'
            }, {
                name: 'Last Three Months',
                day: '-90, 0',
                time: '00:00:00,'
            }],
            hide: function (type) {
                console.info(this.$input.eq(0).val(), this.$input.eq(1).val());
                console.info('Type:',type)
            }
        });
        $('.J-datepicker-range-betweenMonth').datePicker({
            isRange: true,
            between:'month',
            language: 'en',
            hasShortcut: true,
            shortcutOptions: DATAPICKERAPI.rangeMonthShortcutOption1()
        });


        $('.J-datepicker-range-between30').datePicker({
            isRange: true,
            language: 'en',
            between: 30
        });

        $('.J-yearMonthPicker-single').datePicker({
            format: 'YYYY-MM',
            language: 'en',
            min: '2018-01',
            max: '2029-04',
            hide: function (type) {
                console.info(this.$input.eq(0).val());
            }
        });

        $('.J-yearPicker-single').datePicker({
            format: 'YYYY',
            language: 'en',
            min: '2018',
            max: '2029'
        });


    });
</script>
</body>


