
<style>
    .dropbtn {
        background-color: #4CAF50!important;
        color: white!important;
        padding: 16px!important;
        font-size: 16px!important;
        border: none!important;
    }

    .dropdown {
        position: relative!important;
        display: inline-block!important;
    }

    .dropdown-content {
        display: none!important;
        position: absolute!important;
        background-color: #f1f1f1!important;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>






<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <h5 class="text-white h4">Collapsed content</h5>
                    <span class="text-muted">Toggleable via the</span>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarToggleExternalContent"
                        aria-controls="navbarToggleExternalContent" aria-expanded="false"
                        aria-label="Toggle ">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>

<!--<||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||>-->

            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>

        </div>

    </div>
</div>

