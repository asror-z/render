
    <script src="https://cdn.jsdelivr.net/npm/imgcheckbox@0.5.3/jquery.imgcheckbox.min.js"></script>
    <script>

        $( document ).ready(function() {

            $("img").imgCheckbox({

                //checkMarkImage: {url}, //url
                graySelected: false, //Boolean
                scaleSelected: true, //Boolean
                fixedImageSize: false, //Boolean / String
                scaleCheckMark: true, //Boolean
                fadeCheckMark: false,  //Boolean
                checkMarkSize: "20px", //Boolean or string
                checkMarkPosition: "top-left", //String
                addToForm: false, //Boolean / jQuery
                preselect: [1,2],  //[Integer] / Boolean
                radio: false, //Boolean
                canDeselect: true, //	Boolean
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


    


         <img src='/render/inputes/ZImageCheckboxWidget/demo/demo_files/image1.jpg' class='checkable'>
         <img src='/render/inputes/ZImageCheckboxWidget/demo/demo_files/image1.jpg' class='checkable'>
         <img src='/render/inputes/ZImageCheckboxWidget/demo/demo_files/image1.jpg' class='checkable'>
     

     


