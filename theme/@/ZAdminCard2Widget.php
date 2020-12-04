<?php

namespace zetsoft\widgets\themes;

use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\inputes\ZSampleWidget;

/**
 *
 * https://mdbootstrap.com/docs/jquery/components/cards/#!
 *
 * Created By: Dilshodjon Olimov
 *
 */
class ZAdminCard2Widget extends ZWidget
{

    public $config = [];
    public $_config = [
        'isHeader' => true,
        'footerBool' => true,
        'cardTitleBool' => true,
        'cardBottomBtnBool' => true,
        'title' => '',
        'type' => ZCardWidget::type['basic_new'],
        'url' => '',
        'imageAlt' => '',
        'cardTitle' => '',
        'color' => '#222',
        'cardWidth' => '100%',
        'cardHeight' => '200px',
        'cardSubtitle' => '',
        'cardDate' => '',
        'cardText' => '',
        'footerText' => '',
        'buttonText' => 'OK',
        'Url' => '#',
        'linkedinUrl' => 'https://www.linkedin.com',
        'facebookUrl' => 'https://facebook.com',
        'twitterUrl' => 'https://twitter.com',
        'googleUrl' => 'https://plus.google.com',
        'emailAddress' => 'zetsoft@gmail.com',
        'commentUrl' => '#',
        'commentCount' => 15,
        'facebookCount' => 24,
        'twitterCount' => 8,
        'mytheme' => '',
        'typeIcon' => 'fas fa-user',
        'font_size_icon' => '50',
        'card_title' => 'Admin Card',
        'price' => '40,000',
        'link_name' => 'More info',
        'link_icon' => 'fas fa-arrow-circle-right',
    ];



    public const type = [
        'basic_new' => 'basic_new',
        'simple' => 'simple',
        'basic' => 'basic',
        'wavesEffect' => 'wavesEffect',
        'cascadingWider' => 'cascadingWider',
        'cascadingNarrower' => 'cascadingNarrower',
        'cascadingRegular' => 'cascadingRegular',
        'cascadingWiderWithFooter' => 'cascadingWiderWithFooter',
        'cascadingNarrowedWithFooter' => 'cascadingNarrowedWithFooter',
        'cascadingRegularWithFooter' => 'cascadingRegularWithFooter',
        'cascadePanelOne' => 'cascadePanelOne',
        'cascadePanelTwo' => 'cascadePanelTwo',
        'cascadePanelThree' => 'cascadePanelThree',
        'reverseCascade' => 'reverseCascade',
        'flatButtons' => 'flatButtons',
        'actionButtonWithFooter' => 'actionButtonWithFooter',
        'flatButtonDark' => 'flatButtonDark',
        'testimonial' => 'testimonial',
        'imageOverlay' => 'imageOverlay',


    ];

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function asset()
    {
    }


    public function codes()
    {
        $headBool = !($this->_config['isHeader']) ? $this->jscode('d-none') : '';
        $footBool = !($this->_config['footerBool']) ? $this->jscode('d-none') : '';
        $cardTitleBool = !($this->_config['cardTitleBool']) ? $this->jscode('d-none') : '';
        $cardBottomBtnBool = !($this->_config['cardBottomBtnBool']) ? $this->jscode('d-none') : '';
        $sContent = ob_get_clean();


        
        
        $this->css = <<<CSS
             .card-body{
             padding: 0!important;
             }
             
             .ws{
                 height: 110px;
                 text-align: center;
             }
             
            .icons{
            width: 40px;
            color: #ffffff;
            position: absolute;
            left: 60%;
            }   
            
            
            .main1{
            background-color: #ffc107;
            height: 100%;
      
            } 
            
            .main2{
            background-color: #ffc107;
            height: 100%;
         /*   position: relative;*/
            }
            
            .text{
           position: absolute;
           margin-top: 20px!important;
           left: 50%;
            
            }        
            
            .admin-text{
            font-weight: bold!important;
            margin-top: 25px;
            font-size: 20px;
           
            }
              
              #icons{
              line-height: 110px!important;
              color: white;
              position:absolute;              
              left:30%;
              font-size: {$this->_config['font_size_icon']}px;
              z-index: 3; 
              }
            
            
    CSS;


        $this->htm = <<<HTML
<!--Grid row-->

 
          
        
 
        <!-- Begin Page Content -->
    <div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="row">

                <div class="col-md-3 mx-auto">
                    <div class="card">
                    <div class="card-body">
                        <div class="row ws">
                            <div class="col-md-3 main1 h-100">
                                <div>
                                    <i class="{$this->_config['typeIcon']}" id="icons"></i>
                                </div>
                            </div>
                            <div class="col-md-9 main2 >
                                <div class="text">
                                    <h6 class="admin-text   text-uppercase">{$this->_config['card_title']}</h6>
                                    <h2 class="h2 mb-0 font-weight-bold text-gray-800">$ {$this->_config['price']}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="background-color: #c39407; height: 40px">
                            <a  href="#" class="text-white mx-auto my-auto">{$this->_config['link_name']}<i class="{$this->_config['link_icon']}"></i></a>

                        </div>
                    </div>
                </div>

                </div>
                </div>


            </div>


        </div>
    </div>

</body>

</html>
        
        
        
        
        
          

  <!--Grid column-->
 <!-- <div class="col-md-6 mb-4">

    &lt;!&ndash; Card &ndash;&gt;
    <div class="card gradient-card">

        <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

          &lt;!&ndash; Content &ndash;&gt;
          <a href="#!">
            <div class="text-white d-flex h-100 mask peach-gradient-rgba">
              <div class="first-content align-self-center p-3">
                <h3 class="card-title">Traffic</h3>
                <p class="lead mb-0">Click on this card to see details</p>
              </div>
              <div class="second-content  align-self-center mx-auto text-center">
                <i class="fas fa-chart-pie fa-3x"></i>
              </div>
            </div>
          </a>

        </div>

        &lt;!&ndash; Data &ndash;&gt;
        <div class="third-content  ml-auto mr-4 mb-2">
          <p class="text-uppercase text-muted">Traffic</p>
          <h4 class="font-weight-bold float-right">20000</h4>
        </div>

        &lt;!&ndash; Content &ndash;&gt;
        <div class="card-body white animated">
          <div class="progress md-progress">
            <div class="progress-bar amber darken-3" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <p class="text-muted">Worse than last week (75%)</p>
          <h4 class="text-uppercase font-weight-bold my-4">Details</h4>
          <p class="text-muted" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vel dolores qui, necessitatibus aut eaque magni mollitia tenetur molestiae sit quae quos quaerat amet exercitationem atque animi odio.</p>
        </div>

    </div>
    &lt;!&ndash; Card &ndash;&gt;

  </div>-->
  <!--Grid column-->


</div>
<!--Grid row-->
HTML;
    }

}
