/**
 *
 * Author:  Zayniddinov Fozil
 *
 */

 const menu = document.querySelector('.menu-button');
 // menu.classList.add('menu-open--icon')
$(document).ready(function () {

    var fill = $('.fill');
    var empties = $('.empty');

    console.log(fill)

    fill.on('dragstart', function () {

        $(this).addClass('hold')
        setTimeout(function () {
            $(this).addClass('invisible')
        }, 0)

    })

    fill.on('dragend', function () {
        $(this).addClass('fill')
    })

    for (var empty of empties) {
    
        $(empty).on('dragover', function (e) {
        
            e.preventDefault();
            
        })

        $(empty).on('dragenter', function () {

            console.log('dragEnter')
            $(this).addClass('hovered')
            
        })

        $(empty).on('dragleave', function () {
        
            console.log('dragleave')
            $(this).addClass('empty')
            $(this).removeClass('hovered')
            
        })

        $(empty).on('drop', function () {
            
            $(this).addClass('empty')
            $(this).removeClass('hovered')
            $(this).append(fill)
            
        })

    }


    let menuBtn = document.querySelector('.menu-open');
    let menuBar = document.querySelector('.menu')
    menuBtn.addEventListener('click', ()=> {
        menuBar.classList.toggle('menu-scale');
    })
    document.querySelector('.btn').addEventListener('click', ()=>{
        document.querySelector('.box').style.resize = "both";
    });
})
