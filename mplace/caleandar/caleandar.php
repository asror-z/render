<style>
   
    ul {
        list-style-type: none;
    }
    .right {
        text-align: right;
    }
    .center {
        text-align: center;
    }
    .pointer {
        cursor: pointer;
    }
    .group:after {
        content: "";
        display: table;
        clear: both;
    }
    .calendar {
        position: relative;
        max-width: 20em;
        min-height: 15em;
        margin: .5em auto;
        overflow: hidden;
        color: #333;
        background: #fff;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }

    /*Styles for dropdown*/
    .calendar-ympicker{
        position: absolute;
        max-width: 19.5em; /*stop more years causing overflow*/
        min-height: 15em;
        padding: .5em .5em 1em;
        transform: translateY(-100%); /*Start offscreen*/
        transition: transform ease-in-out 0.2s;
        background: rgb(51, 51, 61,.9900);
        z-index: 2;
    }
    .calendar-ympicker-years li ,.calendar-ympicker-months li {
        color: #fff!important;
    }

    .calendar-ympicker-header div{
        display: inline-block;
        color:#fff;
        cursor: pointer;
    }
    .calendar-ympicker .close{
        color: #fff;
        text-align: right;
        border: 1px transparent solid;
    }

    .calendar-ympicker .close:hover {
        color: #37f;
    }

    .calendar-ympicker li{
        display: inline-block;
        line-height: 2em;
        border: 1px transparent solid;
        text-align: center;
        cursor: pointer;
    }
    .calendar-ympicker li:hover{
        border-color: #37f;
        color: #37f;
    }
    .calendar-ympicker-months{
        border-bottom: 1px solid #444;
    }
    .calendar-ympicker-months li{
        width: 30%;
    }
    .calendar-ympicker-years{
        overflow-x: scroll;
        white-space: nowrap;
        padding: 0.5em 0;
    }
    .calendar-ympicker-years li{
        width: 25%;
    }
    /*Years scroll bar*/
    .calendar-ympicker-years::-webkit-scrollbar-thumb:horizontal:hover {
        background:#37f;
    }
    .calendar-ympicker-years::-webkit-scrollbar {
        height: 8px;
    }
    .calendar-ympicker-years::-webkit-scrollbar-track {
        background-color: #555;
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }
    .calendar-ympicker-years::-webkit-scrollbar-thumb {
        background-color: #aaa;
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }

    /*Styles for main part of calander*/
    .calendar-header {
        padding: .5em .5em 0 .5em;
        margin-bottom: .3em;
        color: #37f;
    }
    .calendar-header .arrow{
        position: absolute;
        width: 10%;
        top: 8px;
    }
    .calendar-header .addmonth{
        right: 0.5em;
        text-align: right;
    }
    .calendar-header .arrow span{
        display: inline-block;
        transition: transform ease-in-out 0.2s;
    }
    .calendar-header .monthname:hover ~ .addmonth span{
        transform: rotateZ(90deg);
    }
    .calendar-header .monthname:hover ~ .minusmonth span{
        transform: rotateZ(-90deg);
    }

    .calendar-days{
        padding: 0 .5em; /*Right and Left*/
        color: #666;
    }

    /*Dates*/
    .calendar-body{
        padding: 0 .5em .5em .5em;
    }
    .calendar-body li, .calendar-days li{
        float: left;
        width: -webkit-calc(100%/7);
        padding: .25em 0;
        border: 1px transparent solid;
        text-align: center;
        cursor: pointer;
    }
    .calendar-body li:hover {
        border: 1px solid #37f;             
        color: #37f;
    }
    .calendar li.active{
        background-color: #37f;
        color: #fff!important;
    }
    .calendar-body .today{
        border: 1px solid #37f;
    }
    .calendar-body li.noclick{
        cursor: default;
    }
</style>


<div class="calendar">
    <div class="group calendar-ympicker">
        <div class="calendar-ympicker-header">
            <div style="font-size:small;" class="today">Today</div>
            <div style="float:right;width:20%;text-align:right;" class="close"><i class="fas fa-angle-up"></i></div>
        </div>
        <ul style="clear:both;" class="center calendar-ympicker-months">
            <li>Jan</li><li>Feb</li><li>Mar</li><li>Apr</li><li>May</li><li>Jun</li>
            <li>Jul</li><li>Aug</li><li>Oct</li><li>Sep</li><li>Nov</li><li>Dec</li>
        </ul>
        <ul class="center calendar-ympicker-years">
        </ul>
    </div>

    <div class="group calendar-header">
        <p class="pointer center monthname">&nbsp;</p>
        <p class="pointer arrow minusmonth"><i class="fas fa-angle-left"></i></p>
        <p class="pointer arrow addmonth"><i class="fas fa-angle-right"></i></p>
    </div>

    <ul class="group calendar-days">
        <li>Mo</li><li>Tu</li><li>We</li><li>Th</li><li>Fr</li><li>Sa</li><li>Su</li>
    </ul>
    <ul class="group calendar-body"><!-- Dates go in here --></ul>
</div>


<script>
    var d = new Date();

    var Calendar = {
        themonth : d.getMonth(), // The number of the month 0-11
        theyear : d.getFullYear(), // This year
        today : [d.getFullYear(),d.getMonth(),d.getDate()], // adds today style
        selectedDate : null, // set to today in init()
        years : [], // populated with last 10 years in init()
        months : ['January','February','March','April','May','June','July','August','September','October','November','December'],

        init: function(){
            this.selectedDate = this.today
            // Populate the list of years in the month/year pulldown
            var year = this.theyear;
            for (var i=0; i<10; i++) {
                this.years.push(year--);
            }

            this.bindUIActions();
            this.render();
        },

        bindUIActions: function() {
            // Create Years list and add to ympicker
            for (var i=0;i<this.years.length;i++)
                $('<li>'+this.years[i]+'</li>').appendTo('.calendar-ympicker-years');
            this.selectMonth(); this.selectYear(); // Add active class to current month n year

            // Slide down year month picker
            $('.monthname').click(function(){
                $('.calendar-ympicker').css('transform','translateY(0)');
            });

            // Close year month picker without action
            $('.close').click(function(){
                $('.calendar-ympicker').css('transform','translateY(-100%)');
            });

            // Move calander to today
            $('.today').click(function(){
                Calendar.themonth = d.getMonth();
                Calendar.theyear = d.getFullYear();
                Calendar.selectMonth(); Calendar.selectYear();
                Calendar.selectedDate = Calendar.today;
                Calendar.render();
                $('.calendar-ympicker').css('transform','translateY(-100%)');
            });

            // Click handlers for ympicker list items
            $('.calendar-ympicker-months li').click(function(){
                Calendar.themonth = $('.calendar-ympicker-months li').index($(this));
                Calendar.selectMonth();
                Calendar.render();
                $('.calendar-ympicker').css('transform','translateY(-100%)');
            });
            $('.calendar-ympicker-years li').click(function(){
                Calendar.theyear = parseInt($(this).text());
                Calendar.selectYear();
                Calendar.render();
                $('.calendar-ympicker').css('transform','translateY(-100%)');
            });

            // Move the calendar pages
            $('.minusmonth').click(function(){
                Calendar.themonth += -1;
                Calendar.changeMonth();
            });
            $('.addmonth').click(function(){
                Calendar.themonth += 1;
                Calendar.changeMonth();
            });
        },

        // Adds class="active" to the selected month/year
        selectMonth : function(){
            $('.calendar-ympicker-months li').removeClass('active');
            $('.calendar-ympicker-months li:nth-child('+(this.themonth+1)+')').addClass('active');
        },
        selectYear : function(){
            $('.calendar-ympicker-years li').removeClass('active');
            $('.calendar-ympicker-years li:nth-child('+(this.years.indexOf(this.theyear)+1)+')').addClass('active');
        },

        // Makes sure that month rolls over years correctly
        changeMonth: function(){
            if(this.themonth == 12){
                this.themonth = 0;
                this.theyear++;
                this.selectYear();
            }
            else if(this.themonth == -1){
                this.themonth = 11;
                this.theyear--;
                this.selectYear();
            }
            this.selectMonth();
            this.render();
        },

        // Helper functions for time calculations
        TimeCalc : {
            firstDay : function(month,year) {
                var fday = new Date(year,month,1).getDay(); // Mon 1 ... Sat 6, Sun 0
                if (fday === 0) fday = 7;
                return fday -1; // Mon 0 ... Sat 5, Sun 6
            },
            numDays : function(month,year) {
                return new Date(year,month+1,0).getDate(); // Day 0 is the last day in the previous month
            }
        },

        render : function(){
            var days = this.TimeCalc.numDays(this.themonth, this.theyear), // get number of days in the month
                fDay = this.TimeCalc.firstDay(this.themonth, this.theyear), // find what day of the week the 1st lands on
                daysHTML = '', i;

            $('.calendar p.monthname').text(this.months[this.themonth]+'  '+this.theyear); // add month name and year to calendar
            for (i=0; i<fDay; i++) { // place the first day of the month in the correct position
                daysHTML += '<li class="noclick">&nbsp;</li>';
            }
            // write out the days
            for (i=1; i<=days; i++) {
                if(this.today[0] == this.selectedDate[0] &&
                    this.today[1] == this.selectedDate[1] &&
                    this.today[2] == this.selectedDate[2] &&
                    this.today[0] == this.theyear &&
                    this.today[1] == this.themonth &&
                    this.today[2] == i)
                    daysHTML += '<li class="active today">'+i+'</li>';
                else if(this.today[0] == this.theyear &&
                    this.today[1] == this.themonth &&
                    this.today[2] == i)
                    daysHTML += '<li class="today">'+i+'</li>';
                else if(this.selectedDate[0] == this.theyear &&
                    this.selectedDate[1] == this.themonth &&
                    this.selectedDate[2] == i)
                    daysHTML += '<li class="active">'+i+'</li>';
                else
                    daysHTML += '<li>'+i+'</li>';

                $('.calendar-body').html(daysHTML); // Only one append call
            }

            var childes = $('.calendar-body').children();

            for (var i = 0; i < childes.length; i++) {


                    $(childes[5]).css('color', 'red');
                    $(childes[6]).css('color', 'red');
                    $(childes[12]).css('color', 'red');
                    $(childes[13]).css('color', 'red');
                    $(childes[19]).css('color', 'red');
                    $(childes[20]).css('color', 'red');
                    $(childes[26]).css('color', 'red');
                    $(childes[27]).css('color', 'red');
                    $(childes[33]).css('color', 'red');
                    $(childes[34]).css('color', 'red');





            }


            // Adds active class to date when clicked
            $('.calendar-body li').click(function(){ // toggle selected dates
                if(!$(this).hasClass('noclick')){
                    $('.calendar-body li').removeClass('active');
                    $(this).addClass('active');
                    Calendar.selectedDate = [Calendar.theyear, Calendar.themonth, $(this).text()]; // save date for reselecting
                }
            });
        }
    };

    Calendar.init();

</script>
