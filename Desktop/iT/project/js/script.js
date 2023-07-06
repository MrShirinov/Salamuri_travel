$(document).ready(function(){
    $('.carousel_inner').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 1200,
        adaptiveHeight: false, // автоматическая установка высоты по дефолту картинки
        prevArrow: '<button type="button" class="slick-prev"><img src="img/icons/Group20.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="img/icons/right.svg"></button>',
        responsive: [ //адаптация под мобильное устройство
            {
                breakpoint: 992, // с какого момента начнется адаптация
                setting: {
                    dots: true,
                    arrows: false // выключение стрелок
                }
            }
        ],
});
    $('ul.services_tabs').on('click', 'li:not(.services_tab_active)', function () {
        $(this)
            .addClass('services_tab_active').siblings().removeClass('services_tab_active')
            .closest('div.container').find('div.services_content').removeClass('services_content_active').eq($(this).index()).addClass('services_content_active');
    });

    // function toggleSlide(item) {
    //     $item(item).each(function(i){
    //         $(this).on('click', function(e){
    //             e.preventDefault();
    //             $('.box_item').eq(i).toggleClass('box_item_content_active');
    //             $('.catalog_item_list').eq(i).toggleClass('catalog_item_list_active');
    //         })
    //     })
    // }
    // toggleSlide('.catalog-item_link');

});








// function toggleSlide(item) {
//     $(item).each(function (i) {
//         $(this).on('click', function (e) {
//             e.preventDefault();
//             $('.services_item_content').eq(i).toggleClass('services_item_content_active');
//             $('.services_item_content1').eq(i).toggleClass('services_item_content1_active');
//         })
//     })
// }