<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use zetsoft\widgets\former\ZGrapesJsWidgetAbdulloh_Otabek;
use zetsoft\models\page\PageAction;
use zetsoft\models\core\CoreInput;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\former\ZGrapesJsWidgetAbdulloh;
use zetsoft\widgets\former\ZGrapesJsWidgetAbdulloh2;
use zetsoft\widgets\navigat\ZButtonWidget;

/** @var ZView $this */

$action->icon =false;
$this->grape=true;


if (!empty($this->httpGet('widget'))) {
    echo $this->viewAsset(Root . '/webhtm/ALL/core/widget/widget2.php');
    die;
}

//$name = PageAction::findOne($this->httpGet('key'))->name;
//$path = Root . '/webhtm/' . $name . '.php';
$path = Root . '/webhtm/ALL/core/widget/class.php';
$path = str_replace('\\', '/', $path);

$page = $this->renderAjaxFile($path);
$test = $this->viewAsset($path);


echo ZAjaxWidget::widget([
    'config' => [
        'func' => 'ajaxGrapes',
        'dataType' => 'html',
    ],
    'event' => [
        'click' => <<<JS
       function (event) {
        var pcontent = $('.gjs-frame')[0].contentWindow.document.documentElement.outerHTML;
        
        var responseDom = $.parseHTML(pcontent, document, true);  
        
        var content = '';
        responseDom.forEach(function(value) {
            if ($(value).attr('id') === 'wrapper')
               content += value.innerHTML;
        });
        
        
        $.ajax({
        
            method: 'post',
            url: '/core/widget/save.aspx?file={$path}',
            data: {
                'pcontent': content,
                'actionId': {$this->httpGet('key')}
            },
            success: function() {
                Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Saving to file',
            html: 'File Save in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            onBeforeOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {
                    if (Swal.getContent()) {
                        Swal.getContent().querySelector('b')
                            .textContent = Swal.getTimerLeft()
                    }
                }, 100)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.timer
            ) {
                console.log('File Succesfilly saved') // eslint-disable-line
            }
        })
            }
        });
          
        }
JS
    ]

]);



ZGrapesJsWidgetAbdulloh2::begin([

        'config' => [
            'autoAdd' => '1',
            'dropzone' => '0',
            'file' => $path,
            'categories' => [
                'inputes'
            ],
        ],
        'event' => [
            'component:add' => <<<JS
       function (event) {
       let className = e.attributes.name;
       
            if (className.includes('zetsoft')) {
            
            $.ajax({      
            type: "GET",
            url: '',
            data: {
                widget: className
            },
                success: function(response) {
                   var responseDom = $.parseHTML(response, document, true);
                   var links = [];
                   var scripts = [];
                   
                   $(responseDom).each(function(i , el) {var src = $(el).attr("src");
                       var href = $(el).attr("href");
                       
                       if (src)
                           scripts.push(src);
                       
                       if (href)
                           links.push(href);
                   });
                     
                   links.forEach(function(v) {
                   
                       var link = document.createElement("link");
                       link.href = v;
                       link.rel = "stylesheet";
                       
                       editor.Canvas.getDocument().head.append(link);
                   
                   });
                     
                   scripts.forEach(function(v) {
                   
                       var script = document.createElement("script");
                       script.src = v;
                       script.type = "text/javascript";
                        
                       editor.Canvas.getDocument().head.append(script);
                   
                   });
                }    
            });
            
            
       
        $.ajax({      
            type: "GET",
            url: '/core/widget/widget2.aspx?widget=' + className,
            success: function(response) {
                
                  var responseDom = $.parseHTML(response, document, true);
                  var content = '';   
                  $(responseDom).each(function(i , el) {
                     
                     if (el.localName === 'script')
                        if (!el.hasAttribute('src'))
                            e.set('script', el.innerHTML);
                     
                     if (el.localName === 'link')
                        response = response.replace(el.innerHTML, ' ');
                        
                  });    
                    
                  console.log(response);
                  
                  e.set('content', response);
                      
            },
         });
            
            
            
            }
        
       }
JS,
            'component:selected' => <<<JS
   function (event) {
   
            $(this).parent().trigger("change"); 
   
            let className = e.attributes.name;
            
            let splitedClassName=className.split('/');
            
            console.log(splitedClassName[splitedClassName.length-1]);
            
            console.log('component:selected');
            
            $(".gjs-traits-label").html('');
            
            $(".fa-cog").click();
            
            if (splitedClassName.includes('zetsoft')) {
                ajaxGrapes('/core/widget/option.aspx?className=' + splitedClassName[splitedClassName.length-1]);
            }
            
            $('#sendOptions').click(function() {
                
                $.ajax({      
                    type: "GET",
                    url: '/core/widget/widget2.aspx?' + $('#activeForm').serialize() + '&widget=' + className,
                    success: function(response) {
                        var responseDom = $.parseHTML(response, document, true);
                        $(responseDom).each(function(i , el) {
                         
                         if (el.localName === 'script')
                            if (!el.hasAttribute('src'))
                                e.set('script', el.innerHTML);
                         
                         if (el.localName === 'link')
                            response = response.replace(el.innerHTML, ' ');
                            
                        });    
                    
                      console.log(response);
                      e.set('content', response);
                  
                    },
                 });
                 
                 
               $(document).on('change', '#activeForm', function() {
                    
                    $(this).click();
               });
            });
            
            }
JS,

        ]]
);

echo $page;

ZGrapesJsWidgetAbdulloh2::end();


?>

    <script>


    </script>


<?php
