$(document).ready(function(){
    $(document).on('click','.open-modal-button',function(e){
        e.preventDefault();
        let modalIds = $(this).attr('data-modal-id');
        $('.modals-block[data-ids="' + modalIds + '"] .modals-block-list').addClass('opacity-0');
        $('.modals-block[data-ids="' + modalIds + '"]').removeClass('hidden').append('<div class="modal-loader"></div>');
        setTimeout(function(){
            $('.modals-block[data-ids="' + modalIds + '"] .modals-block-list').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                prevArrow: '<div class="modal-slick-arrow modal-slick-arrow-prev"></div>',
                nextArrow: '<div class="modal-slick-arrow modal-slick-arrow-next"></div>'
            })
        }, 200);
        setTimeout(function(){
            $('.modals-block[data-ids="' + modalIds + '"] .modals-block-list').removeClass('opacity-0');
            $('.modal-loader').remove();
        }, 300)
    })
    $(document).on('click','.modal-close',function(){
        $(this).closest('.modals-block').addClass('hidden');
    })
})