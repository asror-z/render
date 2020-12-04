<?php

?>
   <div class="container d-md-none">
      <div class="row">
          <div class="col-lg-6 sidefirst">
             <h1 class="sell">Start Selling</h1>
             <p class="write"></p>
             <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it </p>
              <button class="btn btn-dark start">get started buy products</button>
          </div>
          <div class="col-lg-6 ">
          <div class="side">
             <!-- <img src="https://png.pngtree.com/thumb_back/fh260/background/20190221/ourmid/pngtree-blockchain-big-data-mobile-phone-technology-image_11331.jpg" alt="">-->
          </div>
          </div>
      </div>
   </div>

<script>
    autoWrite(".write", {
        strings: [
            " On RedTag",
            " On Amazon",
            " On Google",
            " On Market Place"
        ],
        speed: 60,
        breakTime: 1000,
        loop: true
    })
    async function autoWrite(selector, options){
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }

        const div = document.querySelector(selector)

        // Options
        const speed = options.speed ?? 100
        const strings_arr = options.strings ?? []
        const loop = options.loop ?? false
        const breakTime = options.breakTime ?? 500


        // Styling & Cursor
        const height = window.getComputedStyle(div).getPropertyValue("font-size") ?? "1rem"
        const cursorColor = `solid 2px  ${window.getComputedStyle(div).getPropertyValue("color")}` ?? "solid 3px #1d1d1d"

        div.style.width = "fit-content"
        div.style.height = height
        div.style.borderRight = cursorColor
        div.style.paddingRight = ".4rem"
        div.style.height = "50px"


        // Cursor blink
        setInterval(async () => {
            div.style.borderRight = "none"
            await sleep(speed * 2)
            div.style.borderRight = cursorColor 
        }, 400)


        do{
            for(let sentence of strings_arr){
                if(typeof(sentence) === "string"){

                    const length = sentence.length
                    let count = 0
                    while(count < length){
                        div.textContent = sentence.slice(0, count + 1)
                        count++
                        await sleep(speed)
                    }

                    await sleep(breakTime)

                    while(count > 0){
                        div.textContent = sentence.slice(0, count - 1)
                        count--
                        await sleep(speed)
                    }

                } else {
                    alert("YOU MUST PUT ONLY STRING ELEMENTS IN THE ARRAY")
                    return
                }
            }
        } while(loop)

    }
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ribeye&display=swap');
    .write{
    font-size:50px;
    color: black;
    line-height: 1;
    white-space: nowrap;
    border-bottom:5px solid  #00c851;
    font-weight:600;
    z-index: 999999;
    }
    .start{
    box-shadow: 2px 3px 9px black;
    }
    .sell{
     font-size:50px;
     font-family: 'Ribeye', cursive;
    }
    .sidefirst{
    border-right:1px solid lightgray ;
    }

</style>

  

