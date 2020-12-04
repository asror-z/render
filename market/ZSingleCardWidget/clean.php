<?php

use zetsoft\widgets\inptest\ZRatyStarWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\market\ZZoomWpWidget; ?>

<style>
    .ddd{
        width: 30px!important;
        height: 10px!important;
    }
</style>

<div class="container card h-auto">


   <div class="pt-4 pb-4 pl-5 pr-5">
       <div class="d-flex">


           <div>
               <?php
               echo ZZoomWpWidget::widget();
               ?>
           </div>
           <div class="pl-5 w-100">
               <div class="d-flex">
                   <h1>Title Product</h1>
                   <span class="pt-4 ml-4 black-50">3559 sht. v nalichie</span>
               </div>
               <table class="table">

                   <tr>
                       <th>
                           <?php
                           echo ZKStarRatingWidget::widget([
                               'name' =>'name',
                               'config' => [
                                   'show' => false,
                                   'class'=> 'ddd',
                               ]
                           ]);
                           ?>
                       </th>
                       <td class="fz-14 font-weight-bold">optom i raznitsa</td>
                       <td><a class="text-success fz-30 "><i class="fa fa-heart" style="font-size: 36px"></i></a></td>
                       <td> <a class="text-success fz-30"><i class="fa fa-chart-bar" style="font-size: 36px"></i></a></td>
                   </tr>

               </table>
           </div>


       </div>

       <div class="text-center">
           <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item">
                   <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                      aria-selected="true">Home</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                      aria-selected="false">Profile</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                      aria-selected="false">Contact</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" id="quation-tab" data-toggle="tab" href="#quation" role="tab" aria-controls="quation"
                      aria-selected="false">quation</a>
               </li>
           </ul>
           <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Raw denim you
                   probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                   cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
                   keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
                   placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                   qui.</div>
               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie
                   locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit,
                   blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
                   Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum
                   PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS
                   salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit,
                   sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                   stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
               <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
                   wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
                   lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                   locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify
                   squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                   etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog
                   stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
                   <div class="tab-pane fade" id="quation" role="tabpanel" aria-labelledby="quation-tab">Etsy mixtape
                   wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
                   lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                   locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify
                   squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                   etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog
                   stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
           </div>
       </div>
   </div>
    
</div>
