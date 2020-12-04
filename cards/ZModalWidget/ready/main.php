<?php

$this->fileJs('https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js');
$this->fileCss('https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css');

?>
<button type="button" class="btn btn-outline-secondary d-flex justify-content-end btn-sm" data-toggle="modal" data-target="#exampleModal">
    <span>Очистить корзину <i class="fa fa-trash"></i></span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header py-0">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <?=Azl.'Удалить все продукты из корзины ?'?>
            </div>
            <div class="modal-footer py-0">
                <button type="button" class="btn btn-outline-primary btn-md" data-dismiss="modal"><?=Azl.'Отмена'?></button>
                <button type="button" class="btn btn-outline-danger btn-md" id="deleteBtn"><?=Azl.'Удалить'?></button>
            </div>
        </div>
    </div>
</div>




<script>

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })

    $('#deleteBtn').click(function () {
        $.ajax({
            method:'GET',
            url:'/api/shop/market/deleteAllFromCart.aspx',
            success:function (e) {
                if(e){
                    $('.close').click();
                    $.toast({
                        text : "<span class='p-5'><?=Azl.'Корзина очищена'?></span>",
                        showHideTransition : 'slide',
                        bgColor : 'limegreen',
                        textColor : 'white',
                        allowToastClose : false,
                        hideAfter : 2000,
                        stack : 5,
                        textAlign : 'left',
                        position : 'top-right'
                    })
                    setTimeout(function () {
                        document.location.reload(true);
                    },2000)
                }
            },
            error:function (error) {
                console.log('asdasdasdas')
            }
        })
    })

</script>
