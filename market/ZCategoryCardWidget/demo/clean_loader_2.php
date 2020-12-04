
    <style>
        .loader_page {
            border: 7px solid #f3f3f3;
            border-radius: 50%;
            border-top: 7px solid blue;
            border-bottom: 7px solid blue;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>




<div class="loader_page"></div>


