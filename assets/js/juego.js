    /*
	------------------------------------------------------------------
		Fullpage Setup
	------------------------------------------------------------------
    */
   if ($.isFunction($.fn.fullpage)) {
    // safe to use the function
    $('#fullpage').fullpage({
        licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
        //Navigation
        //verticalCentered:false,
        menu: '#menu',
        lockAnchors: false,
        anchors: [
            'kit',
            'seleccion'
        ],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: [
            'Kit',
            'Selección'
        ],
        showActiveTooltip: false,
        slidesNavigation: true,
        slidesNavPosition: 'bottom',
        //Scrolling
        responsiveWidth: 768,
        //css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
        easing: 'easeInOutCubic',
        //easingcss3: 'ease',
        fadingEffect: true,

        //Design
        controlArrows: true,
        responsiveSlides: true,
        parallax: true,
        parallaxOptions: {
            type: 'reveal',
            percentage: 62,
            property: 'translate'
        },

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.bk-slide',

        lazyLoading: true
    });
}

/* 
------------------------------------------------------------------
    selección de items
------------------------------------------------------------------
*/


$('#mobileSelector a').on('click', function (e) {

    e.preventDefault();
    var title = $(this).data('title'),
        text = $(this).data('text'),
        yo = $(this);

    console.log(text)

    $('#kit-modal').find('.modal-title').text(title);
    $('#kit-modal').find('.modal-text').text(text);

    if (!$(this).hasClass('active')) {
        console.log('isActive')
        $('#kit-modal').modal('show');
    } else {
        $(this).removeClass('active');
        iterateActives();
    }

    $('#kit-agregar').on('click', function () {
        yo.addClass('active');

    });

});

$('.btn-add-kit').on('click', function (e) {

    e.preventDefault();
    var title = $(this).find('.kit-title').text(),
        text = $(this).data('text'),
        yo = $(this);

    $('#kit-modal').find('.modal-title').text(title);
    $('#kit-modal').find('.modal-text').text(text);

    if (!$(this).hasClass('active')) {
        console.log('isActive')
        $('#kit-modal').modal('show');
    } else {
        $(this).removeClass('active');
        iterateActives();
    }

    $('#kit-agregar').on('click', function () {
        yo.addClass('active');

    });

});


$('#kit-modal').on('hidden.bs.modal', function (e) {
    iterateActives();
})

function iterateActives() {
    $('#kit-vacio').attr('src', data.templateUrl + '/assets/img/loader.gif');
    var y = $('.btn.active'),
        arrKits = [],
        arr = [];
    $.each(y, function () {
        var img = $(this).data('img'),
            kit = $(this).data('title');
        arrKits.push(kit);
        arr.push(img);
    });

    console.log(arrKits);
    if (arr.length != 0) {
        var x = $('#kit-vacio').attr('src', data.templateUrl + '/assets/img/kit-' + arr.join("") + '.png');
        $('#btnListo').removeClass('disabled');
    } else {
        $('#kit-vacio').attr('src', data.templateUrl + '/assets/img/kit-vacio.png');
        $('#btnListo').addClass('disabled');
    }
}


$('#btnListo').on('click', function (e) {
    e.preventDefault();
    $('#stepSelection').addClass('d-none');

    $('#stepForm').removeClass('d-none');

    var z = $('.btn-add-kit.active');
    $.each(z, function () {
        var kit = $(this).find('.kit-data').data('title');
        $('.kit-result--txt').append('<li><small class="mr-2 kit-text-red">- ' + kit + '</small></li>')
    });
});