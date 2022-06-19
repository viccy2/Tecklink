$(document).ready(function () {
    const a = $('.active').length;
    const n = $('.non-active').length;

    $(a).on('click', function (){
        $(a).css({
            color: '#fff'
        })
    })

});