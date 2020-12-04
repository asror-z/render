
         <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
             <a class="navbar-brand" href="#">Админ</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     
                     <li class="nav-item dropdown ml-3">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Dropdown
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="#">Action</a>
                             <a class="dropdown-item" href="#">Another action</a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="#">Something else here</a>
                         </div>
                     </li>

                     <li class="nav-item dropdown ml-3">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Dropdown
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="#">Action</a>
                             <a class="dropdown-item" href="#">Another action</a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="#">Something else here</a>
                         </div>
                     </li>

                     <li class="nav-item dropdown ml-3">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Dropdown
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="#">Action</a>
                             <a class="dropdown-item" href="#">Another action</a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="#">Something else here</a>
                         </div>
                     </li>

                     <li class="nav-item dropdown ml-3">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Dropdown
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="#">Action</a>
                             <a class="dropdown-item" href="#">Another action</a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="#">Something else here</a>
                         </div>
                     </li>

                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                 </form>
             </div>
         </nav>

         <ul class="nav nav-tabs mt-5">
             <li class="nav-item">
                 <a class="nav-link active" href="#">All Extensions</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Custom Extensions</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">DAHDI Extensions</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">IAX2 Extensions</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">SIP [Chan_sip] Extensions</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link disabled" href="#">Disabled</a>
             </li>
         </ul>

         <script>
             const dropdown = $('.dropdown-toggle');
             const dropdownMenu = $('.dropdown-menu');

             $( dropdown ).on("mouseenter", function (event) {
                    e.target.nextElementSibling.classList.add("show");
                    e.target.parentElement.classList.add("show");
                 
              });

             $( dropdownMenu ).on("mouseenter", function (event) {
                 e.target.classList.add("show");
                 e.target.parentElement.classList.add("show");
             });

             $( dropdown ).on("mouseleave", function (event) {
                    e.target.nextElementSibling.classList.remove("show");
                    e.target.parentElement.classList.remove("show");
                 
                 });
             $( dropdownMenu ).on("mouseleave", function (event) {
                    e.target.classList.remove("show");
                    e.target.parentElement.classList.remove("show");
                 
                 });

                 
         </script>

         <style>
             .dropdown-toggle::after {
                 content: none;
             }
             /*.dropdown-toggle:hover + .{
                background-color: red;
             }*/
         </style>

         
