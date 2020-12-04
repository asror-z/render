/**
 *
 * Author:  Tursunaliyev Abdulloh
 *
 */


$(document).ready(function () {

    /* constants */

    var fill = $('.fill')
    var empties = $('.empty')
    var menuButton = $('.menu-button')
    
    fill.on('dragstart', function () {

        $(this).addClass('hold')
        setTimeout(function () {
            $(this).addClass('invisible')
        }, 0)
        
    })

    fill.on('dragend', function () {
        $(this).addClass('fill')
    })
    

    /* menu open event */

    menuButton.on('click', function () {
        
       let parent = $(this).parent()
       let mainParent = $(parent).parent()
       let canvas = $('.canvas')
       let forWidgets = $('.forWidgets')

       $(mainParent).toggleClass('menu-opened')

       if ($(mainParent).hasClass('menu-opened')){

           canvas.css('width', '80%')

           $.ajax({
                url: '/core/grapes/widgets.aspx',
                method: 'GET',
                success: function (response) {

                    forWidgets.append(response)

                    let fills = $(document).find('.fill')
                    
                    for (var widgets of fills) {
                        $(widgets).on('dragstart', function () {
                            $(this).addClass('hold')
                            setTimeout(function () {
                                $(this).addClass('invisible')
                            }, 0)

                            fill = $(this)
                        })

                        $(widgets).on('dragend', function () {
                          
                        })
                    }

                }
           })
           
       }else {

            canvas.css('width', '95%')

            forWidgets.html('')
       }

    })



    setInterval( () => {
        let dragElem = $(document).find('.dropped')
        
        if (dragElem) {
            
            for (var elems of dragElem) {
                
                let elements = $(elems).children()

                $(elements).addClass('test')

                if ($(elements).hasClass('test')){

                    $(this).on('dragstart', () => {
                        fill = $(elements).html()
                    })

                }
            
            }

        }

    }, 1000)



    for (var empty of empties) {

        $(empty).on('dragover', function (e) {

            e.preventDefault();

        })

        $(empty).on('dragenter', function () {

            $(this).addClass('hovered')

        })

        $(empty).on('dragleave', function () {

            $(this).addClass('empty')
            $(this).removeClass('hovered')

        })

        $(empty).on('drop', function () {
            
            if ($(fill).hasClass('test')) {
               
              $(this).append(fill)
            }

            for (var datas of fill){

                if ($(datas).hasClass('widgets')) {

                    let file = 'getWidget'
                    let widgetName = $(datas).attr('data-widget')

                    $.ajax({
                        url: '/core/grape/' + file + '.aspx?param=' + widgetName,
                        method: 'GET',
                        success: (response) => {
                            if (response) {
                                fill = response
                            }

                            $(this).addClass('dropped')
                            $(this).removeClass('hovered')
                            $(this).append(fill)

                        }
                    })

                }

            }

        })

    }


    
})

