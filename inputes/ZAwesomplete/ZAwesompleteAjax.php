<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/awesomplete@1.1.5/awesomplete.css">
    <script src="https://cdn.jsdelivr.net/npm/awesomplete@1.1.5/awesomplete.min.js"></script>
    <title>Document</title>
</head>
<body>


<section id="ajax-example">
    <input type="text" id="input">
</section>
    <!--<input type="text" class="awesomplete" id="ajax-example">-->
    <script>

        function fetchSuggestions(query, cb) {
            $.ajax({
                type: 'GET',
                url: `https://nominatim.openstreetmap.org/search?q=${query}&format=json`,
                success: function (response) {
                    var suggestions = response.map(function (i) {
                        return i.display_name;
                    });

                    cb(suggestions);
                },

            })
        }

        const input = document.getElementById('input');
        const awesomplete = new Awesomplete(input);
        input.addEventListener('keyup', function (e) {
            const query = e.target.value;

            if (query.length < 3) {
                return;
            }

            fetchSuggestions(query, function (suggestions) {
                awesomplete.list = suggestions;

                var mark = document.querySelector('li[role=option]');

                if(mark){
                    mark.addEventListener('click', function (e) {
                        event.preventDefault();
                        let currentText = e.target.innerText;
                        console.log(event.target.innerText);
                    })
                }
            });
        });
    </script>



</body>

