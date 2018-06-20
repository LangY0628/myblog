$(function () {

    remove()
    removeLable()

    function remove() {
        var bodyWidth = $(window).width()
        if(bodyWidth<991){
            $('.remove').css('display','none')
        }else {
            $('.remove').css('dispalay','table-cell')
        }
        $(window).resize(function () {
            bodyWidth = $(window).width()
            if(bodyWidth<991){
                $('.remove').css('display','none')
            }else {
                $('.remove').css('display','table-cell')
            }
        })

    }
    function removeLable() {
        var bodyWidth = $(window).width()
        var $one = $('.media-span-right span:nth-child(1)')
        var $two = $('.media-span-right span:nth-child(2)')
        var $lable= $('.media-span-right').children()

        if(bodyWidth<768){
            $lable.css('display','none')
            $one.css('display','inline')
            $two.css('display','inline')
        }else {
            $lable.css('display','inline')
        }
        $('.label').each(function (index) {
            if($(this).text()==""){
                $(this).css('display','none')
            }
        })

        $(window).resize(function () {
            var bodyWidth = $(window).width()
            var $one = $('.media-span-right span:nth-child(1)')
            var $two = $('.media-span-right span:nth-child(2)')
            var $lable= $('.media-span-right').children()
            if(bodyWidth<768){
                $lable.css('display','none')
                $one.css('display','inline')
                $two.css('display','inline')
            }else {
                $lable.css('display','inline')
            }
            $('.label').each(function (index) {
                if($(this).text()==""){
                    $(this).css('display','none')
                }
            })
        })

    }
})

// $("ul li:nth-child(2)")