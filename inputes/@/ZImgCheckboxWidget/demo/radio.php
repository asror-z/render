
    <script src="https://cdn.jsdelivr.net/npm/imgcheckbox@0.5.3/jquery.imgcheckbox.min.js"></script>
    <script>

        $( document ).ready(function() {

            $("div label img").imgCheckbox({
                graySelected: true, //Boolean
                scaleSelected: true, //Boolean
                fixedImageSize: false, //Boolean / String
                scaleCheckMark: true, //Boolean
                fadeCheckMark: false,  //Boolean
                checkMarkSize: "20px", //Boolean or string
                checkMarkPosition: "top-left", //String
                addToForm: false, //Boolean / jQuery
                preselect: [],  //[Integer] / Boolean
                radio: true, //Boolean
                canDeselect: false, //	Boolean
                styles: {
                    "span.imgCheckbox img": {
                        "border-radius": "6px"
                    },
                    "span.imgCheckbox.imgChked img": {
                        "transform": "scale(0.95)",
                    },
                    "span.imgCheckbox": {
                        "border": "none",
                    }
                },
                //onclick: {onclick},
                // styles: {styles},  //Object

                onload: function(){
                    // Do something fantastic!
                },
                onclick: function (event){
                    var isChecked = el.hasClass("imgChked"),
                        imgEl = el.children()[0];  // the img element

                    console.log(imgEl.name + " is now " + (isChecked? "checked": "not-checked") + "!");
                }
            });

            //$.select()
            //$.deselect()
           // You can have multiple sets of imgCheckboxes with different parameters.
           //
           // $("img.checkableGroup1").imgCheckbox();
           // $("img.checkableGroup2").imgCheckbox({ "graySelected": false })
        });

    </script>

    <div class="d-flex list-unstyled">
        <input type="checkbox" id="cb1" />
            <label for="cb1"><img src="https://picsum.photos/seed/1/100" /></label>
        
        <input type="checkbox" id="cb2" />
            <label for="cb2"><img src="https://picsum.photos/seed/2/100" /></label>
        
        <input type="checkbox" id="cb3" />
            <label for="cb3"><img src="https://picsum.photos/seed/3/100" /></label>
        
        <input type="checkbox" id="cb4" />
            <label for="cb4"><img src="https://picsum.photos/seed/4/100" /></label>
        
    </div>
     


