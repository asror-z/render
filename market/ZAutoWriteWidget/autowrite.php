<?php

if (!isset($withMenu)) {
    $withMenu = false;
}

?>

<?php
if ($withMenu == true):
    ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 sidefirst">

        <div class="d-flex my-2">
          <h1 class="sell">Вместе с <h1 class="sellGreen">MarketPlace</h1></h1>
        </div>
        <p class="write"></p>
        <p class="mt-4"></p>
      </div>
      <div class="col-lg-6 maining">

        <div class="side">
          <img src="/render/asrorz/images/mainBg.png" width="500" class="img-phone pl-5 pt-4" alt="">
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<? if ($withMenu == false): ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 sidefirst">

        <div class="d-flex">
          <h1 class="sell">Вместе с <h1 class="sellGreen">MarketPlace</h1></h1>
        </div>
        <p class="write"></p>
        <p class="mt-4"></p>
      </div>
      <div class="col-lg-6 maining">

        <div class="side">
          <img src="/render/asrorz/images/mainBg.png" class="img-phone" alt="">
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>


<script>
autoWrite(".write", {
  strings: [
    " Быстро",
    " Качественно",
    " Удобно",
  ],
  speed: 60,
  breakTime: 1000,
  loop: true
})

async function autoWrite(selector, options) {
  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

  const div = document.querySelector(selector)

  // Options
  const speed = options.speed || 100;
  const strings_arr = options.strings || [];
  const loop = options.loop || false;
  const breakTime = options.breakTime || 500;


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


  do {
    for (let sentence of strings_arr) {
      if (typeof (sentence) === "string") {

        const length = sentence.length
        let count = 0
        while (count < length) {
          div.textContent = sentence.slice(0, count + 1)
          count++
          await sleep(speed)
        }

        await sleep(breakTime)

        while (count > 0) {
          div.textContent = sentence.slice(0, count - 1)
          count--
          await sleep(speed)
        }

      } else {
        alert("YOU MUST PUT ONLY STRING ELEMENTS IN THE ARRAY")
        return
      }
    }
  } while (loop)

}
</script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Marck+Script&display=swap');

  .write {
    font-size: 40px;
    color: black;
    line-height: 1;
    white-space: nowrap;
    border-bottom: 5px solid #00c851;
    font-weight: 600;
    z-index: 999999;
  }

  .start {
    box-shadow: 2px 3px 9px black;
    z-index: 1;
  }

  .sell {
    color: black;
    font-size: 40px;
    font-weight: bold;
    z-index: 1;
  }

  .sellGreen {
    font-size: 40px;
    color: limegreen;
    margin-left: 15px;
    font-family: "Marck Script", cursive;
    z-index: 1;
  }

  .sidefirst {
    margin-top: 130px;
    position: relative;
    z-index: 1;
  }

  .img-phone {
    z-index: 2;
    margin-top: 50px;

  }

  .ellipce {
    position: absolute;
    top: -80px;
    right: 100px;
    z-index: 0;
  }

  .ellipce-2 {
    position: absolute;
    top: -100px;
    right: 200px;
    z-index: 0;
  }

  .side {
    z-index: 1;
  }

  .maining {
    position: relative;
    z-index: 1;
  }

</style>

  

