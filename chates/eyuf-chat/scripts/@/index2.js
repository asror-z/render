
//start:TursunaliyevAbdulloh
$(document).ready(function () {
        $('.chat-header__name').on('click', function() {
            console.log('123');
            Swal.fire({
                html:
                    `
                    <div class="p-3">
                    <div class="card testimonial-card mt-2">

  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white">
    <img src="https://i.stack.imgur.com/gBMMe.png?s=328&g=1" class="rounded-circle"
      alt="woman avatar">
  </div>

  <!-- Content -->
  <div class="card-body">
    <!-- Name -->
    <h4 class="card-title">Anna Doe</h4>
    <hr>
    <!-- Quotation -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center"> ОТМ:  <span>TUIT</span></li>
        <li class="list-group-item d-flex justify-content-between align-items-center"> Mutaxassisligi:  <span>Kompyuter Injiner</span> </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">таълим дастури:  <span>Sirtqi</span> </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">илмий-тадқиқот: <span>Doktorantura</span> </li>
    </ul>
  </div>
  <div class="card-footer">
       <div class="d-flex">
            <a href="#" class="btn btn-sm btn-primary">dobavit v druzya</a>
        </div>
    </div>
</div>
</div>
<!-- Card -->`,
                showCloseButton: true,
                showConfirmButton: false,
                showCancelButton: false,
                focusConfirm: false,
            })
        })
})

//start:TursunaliyevAbdulloh


