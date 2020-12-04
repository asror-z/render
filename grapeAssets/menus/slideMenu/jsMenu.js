$(document).ready(function(){
    var menu = $('#slide-menu-burger');
    var menuButton = $('#slide-menu-button');
    var journal = $('#first-slide-link');
    var services = $('#second-slide-link');
    var about = $('#third-slide-link');
    var contact = $('#fourth-slide-link');

//Look at this mess, I'll have to refactor it
    menu.on('click',() => {
        menuButton.toggleClass('active');
        if(menuButton.hasClass('active')){
            journal.animate({'left':'110px','opacity':'1','z-index':'8'},500);
            services.animate({'left':'210px','opacity':'1','z-index':'6'},500);
            about.animate({'left':'310px','opacity':'1','z-index':'4'},500);
            contact.animate({'left':'410px','opacity':'1','z-index':'2'},500);
        }
        else {
            journal.animate({'left':'0','opacity':'0'},500);
            services.animate({'left':'0','opacity':'0'},500);
            about.animate({'left':'0','opacity':'0'},500);
            contact.animate({'left':'0','opacity':'0'},500);
        }
    });
})

