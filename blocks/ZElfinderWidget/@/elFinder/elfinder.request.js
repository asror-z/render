(function(){
    var jqver = '3.1.1',
        uiver = '1.12.1',
        // elFinder options (REQUIRED)
        // Documentation for client options:
        // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
        opts = {
            url : 'https://hypweb.net/elFinder-nightly/demo/2.1/php-jsb/basic.php' // connector URL (REQUIRED
        },
        // Start elFinder (REQUIRED)
        start = function(elFinder) {
            // load jQueryUI CSS
            elFinder.prototype.loadCss('//cdnjs.cloudflare.com/ajax/libs/jqueryui/'+uiver+'/themes/smoothness/jquery-ui.css');
            $(function() {
                // Make elFinder (REQUIRED)
                var fm = $('#elfinder').elfinder(opts).elfinder('instance');
                fm.bind('request.open request.tree', function(e) {
                    var dfrd = $.Deferred(),
                        cmd = e.type.substr(8),
                        opts = e.data.opts;
                    fm.confirm({
                        title : 'Command cancel test',
                        text  : 'Do you want to continue?',
                        accept: {
                            label    : 'btnYes',
                            callback : function() {
                                dfrd.resolve();
                            }
                        },
                        cancel: {
                            label    : 'btnNo',
                            callback : function() {
                                dfrd.reject();
                                if (cmd === 'tree') {
                                    setTimeout(function() {
                                        // restore arrow state
                                        $('#' + fm.navHash2Id(opts.target))
                                            .removeClass('elfinder-subtree-loaded')
                                            .addClass(fm.res('class', 'navcollapse'));
                                    }, 10);
                                }
                            }
                        }
                    });
                    e.data.result = dfrd;
                });
            });
        },
        // JavaScript loader (REQUIRED)
        load = function() {
            require([ 'elfinder' ],
                start,
                function(error) {
                    alert(error.message);
                }
            );
        },
        // is IE8? for determine the jQuery version to use (optional)
        ie8 = (typeof window.addEventListener === 'undefined' && typeof document.getElementsByClassName === 'undefined');

    // config of RequireJS (REQUIRED)
    require.config({
        baseUrl : '//studio-42.github.io/elFinder/demo/js',
        paths : {
            'jquery'   : '//cdnjs.cloudflare.com/ajax/libs/jquery/'+(ie8? '1.12.4' : jqver)+'/jquery.min',
            'jquery-ui': '//cdnjs.cloudflare.com/ajax/libs/jqueryui/'+uiver+'/jquery-ui.min',
            'elfinder' : 'elfinder.min'
        },
        waitSeconds : 10 // optional
    });
    // load JavaScripts (REQUIRED)
    load();
