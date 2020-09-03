function filterTiles(category) {
    $('.product-tile').each(function (index) {

        //show tiles which match the category
        //show all tiles if no filter is selected
        if ($(this).data("category") === category || category == "all products") {
            $(this).css('display', 'inline-block');
        }
        else {
            $(this).css('display', 'none');
        }

    });

}



$(document).ready(function(){

    //filter dropdown selection
    $('.product-filter-dropdown-menu a').on('click', function () {

        $('.product-filter-button-text').html(this.innerHTML);

        filterTiles(this.innerHTML.toLowerCase());

    });

    //filter dropdown button
    $('.product-filter-button').on('click', function () {

        $('.product-filter-option').each(function (index) {

            if (this.innerHTML.toLowerCase() === $('.product-filter-button-text').html().toLowerCase()) {
                this.style.display = "none";
            }
            else {
                this.style.display = "list-item";
            }

        });

        $('.product-filter-button-text').html();

    });



    $('#form2-2i-email').focusin(function () {
        $('.mbr-subscribe').css('border-color', 'rgba(255,255,255,0.9');
    });

    $('#form2-2i-email').focusout(function () {
        $('.mbr-subscribe').css('border-color', 'rgba(255,255,255,0.2');
    });


    $.each($('*'), function () {
        if ($(this).width() > $('body').width()) {
            console.log("Wide Element: ", $(this), "Width: ", $(this).width());
        }
    });








    $.extend($.easing, {
        easeInOutCubic : function(x, t, b, c, d){
            if ((t/=d/2) < 1) return c/2*t*t*t + b;
            return c/2*((t-=2)*t*t + 2) + b;
        }
    });

    $.fn.outerFind = function(selector){
        return this.find(selector).addBack(selector);
    };

    (function($,sr){
        // debouncing function from John Hann
        // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
        var debounce = function (func, threshold, execAsap) {
            var timeout;

            return function debounced () {
                var obj = this, args = arguments;
                function delayed () {
                    if (!execAsap) func.apply(obj, args);
                    timeout = null;
                };

                if (timeout) clearTimeout(timeout);
                else if (execAsap) func.apply(obj, args);

                timeout = setTimeout(delayed, threshold || 100);
            };
        }
        // smartresize
        jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

    })(jQuery,'smartresize');

    (function(){

        var scrollbarWidth = 0, originalMargin, touchHandler = function(event){
            event.preventDefault();
        };

        function getScrollbarWidth(){
            if (scrollbarWidth) return scrollbarWidth;
            var scrollDiv = document.createElement('div');
            $.each({
                top : '-9999px',
                width  : '50px',
                height : '50px',
                overflow : 'scroll',
                position : 'absolute'
            }, function(property, value){
                scrollDiv.style[property] = value;
            });
            $('body').append(scrollDiv);
            scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
            $('body')[0].removeChild(scrollDiv);
            return scrollbarWidth;
        }

    })();

    $.isMobile = function(type){
        var reg = [];
        var any = {
            blackberry : 'BlackBerry',
            android : 'Android',
            windows : 'IEMobile',
            opera : 'Opera Mini',
            ios : 'iPhone|iPad|iPod'
        };
        type = 'undefined' == $.type(type) ? '*' : type.toLowerCase();
        if ('*' == type) reg = $.map(any, function(v){ return v; });
        else if (type in any) reg.push(any[type]);
        return !!(reg.length && navigator.userAgent.match(new RegExp(reg.join('|'), 'i')));
    };

    var isSupportViewportUnits = (function(){
        // modernizr implementation
        var $elem = $('<div style="height: 50vh; position: absolute; top: -1000px; left: -1000px;">').appendTo('body');
        var elem = $elem[0];
        var height = parseInt(window.innerHeight / 2, 10);
        var compStyle = parseInt((window.getComputedStyle ? getComputedStyle(elem, null) : elem.currentStyle)['height'], 10);
        $elem.remove();
        return compStyle == height;
    }());

    $(function(){

        $('html').addClass($.isMobile() ? 'mobile' : 'desktop');


        // .mbr-section--16by9 (16 by 9 blocks autoheight)
        function calculate16by9(){
            $(this).css('height', $(this).parent().width() * 9 / 16);
        }
        $(window).smartresize(function(){
            $('.mbr-section--16by9').each(calculate16by9);
        });
        $(document).on('add.cards change.cards', function(event){
            var enabled = $(event.target).outerFind('.mbr-section--16by9');
            if (enabled.length){
                enabled
                    .attr('data-16by9', 'true')
                    .each(calculate16by9);
            } else {
                $(event.target).outerFind('[data-16by9]')
                    .css('height', '')
                    .removeAttr('data-16by9');
            }
        });


        // .mbr-parallax-background
        if ($.fn.jarallax && !$.isMobile()) {
            $(document).on('destroy.parallax', function(event) {
                $(event.target).outerFind('.mbr-parallax-background')
                    .jarallax('destroy')
                    .css('position', '');
            });
            $(document).on('add.cards change.cards', function(event) {
                $(event.target).outerFind('.mbr-parallax-background')
                    .jarallax({
                        speed: 0.6
                    })
                    .css('position', 'relative');
            });

            if ($('html').hasClass('is-builder')) {
                $(document).on('add.cards', function(event) {
                    setTimeout(function() {
                        $(window).trigger('update.parallax');
                    }, 0);
                });
            }

            $(window).on('update.parallax', function(event) {
                var $jarallax = $('.mbr-parallax-background');

                $jarallax.jarallax('coverImage');
                $jarallax.jarallax('clipContainer');
                $jarallax.jarallax('onScroll');
            });
        }

        // .mbr-social-likes
        if ($.fn.socialLikes){
            $(document).on('add.cards', function(event){
                $(event.target).outerFind('.mbr-social-likes:not(.mbr-added)').on('counter.social-likes', function(event, service, counter){
                    if (counter > 999) $('.social-likes__counter', event.target).html(Math.floor(counter / 1000) + 'k');
                }).socialLikes({initHtml : false});
            });
        }


        // embedded videos
        $(window).smartresize(function(){
            $('.mbr-embedded-video').each(function(){
                $(this).height(
                    $(this).width() *
                    parseInt($(this).attr('height') || 315) /
                    parseInt($(this).attr('width') || 560)
                );
            });
        });
        $(document).on('add.cards', function(event){
            if ($('html').hasClass('mbr-site-loaded') && $(event.target).outerFind('iframe').length)
                $(window).resize();
        });

        $(document).on('add.cards', function(event){
            $(event.target).outerFind('[data-bg-video]').each(function(){
                var result, videoURL = $(this).data('bg-video'), patterns = [
                    /\?v=([^&]+)/,
                    /(?:embed|\.be)\/([-a-z0-9_]+)/i,
                    /^([-a-z0-9_]+)$/i
                ];
                for (var i = 0; i < patterns.length; i++){
                    if (result = patterns[i].exec(videoURL)){
                        var previewURL = 'http' + ('https:' == location.protocol ? 's' : '') + ':';
                        previewURL += '//img.youtube.com/vi/' + result[1] + '/maxresdefault.jpg';

                        var $img = $('<div class="mbr-background-video-preview">')
                            .hide()
                            .css({
                                backgroundSize: 'cover',
                                backgroundPosition: 'center'
                            })
                        $('> *:eq(0)', this).before($img);

                        $('<img>').on('load', function() {
                            if (120 == (this.naturalWidth || this.width)) {
                                // selection of preview in the best quality
                                var file = this.src.split('/').pop();
                                switch (file){
                                    case 'maxresdefault.jpg':
                                        this.src = this.src.replace(file, 'sddefault.jpg');
                                        break;
                                    case 'sddefault.jpg':
                                        this.src = this.src.replace(file, 'hqdefault.jpg');
                                        break;
                                }
                            } else {
                                $img.css('background-image', 'url("' + this.src + '")')
                                    .show();
                            }
                        }).attr('src', previewURL)

                        if ($.fn.YTPlayer && !$.isMobile()){
                            var params = eval('(' + ($(this).data('bg-video-params') || '{}') + ')');
                            $('> *:eq(1)', this).before('<div class="mbr-background-video"></div>').prev()
                                .YTPlayer($.extend({
                                    videoURL : result[1],
                                    containment : 'self',
                                    showControls : false,
                                    mute : true
                                }, params));
                        }
                        break;
                    }
                }
            });
        });

        // init
        $('body > *:not(style, script)').trigger('add.cards');
        $('html').addClass('mbr-site-loaded');
        $(window).resize().scroll();



        // init the same height columns
        $('.cols-same-height .mbr-figure').each(function() {
            var $imageCont = $(this)
            var $img = $imageCont.children('img')
            var $cont = $imageCont.parent()
            var imgW = $img[0].width
            var imgH = $img[0].height

            function setNewSize() {
                $img.css({
                    width: '',
                    maxWidth: '',
                    marginLeft: ''
                })

                if(imgH && imgW) {
                    var aspectRatio = imgH / imgW

                    $imageCont.addClass({
                        position: 'absolute',
                        top: 0,
                        left: 0,
                        right: 0,
                        bottom: 0
                    })

                    // change image size
                    var contAspectRatio = $cont.height() / $cont.width()
                    if(contAspectRatio > aspectRatio) {
                        var percent = 100 * (contAspectRatio - aspectRatio) / aspectRatio;
                        $img.css({
                            width: percent + 100 + '%',
                            maxWidth: percent + 100 + '%',
                            marginLeft: (- percent / 2) + '%'
                        })
                    }
                }
            }

            $img.one('load', function() {
                imgW = $img[0].width
                imgH = $img[0].height
                setNewSize()
            })

            $(window).on('resize', setNewSize)
            setNewSize()
        })

    });


    if (!$('html').hasClass('is-builder')) {
        $(document).ready(function() {
            //disable animation on scroll on mobiles
            if ($.isMobile()) {
                return;
              //enable animation on scroll
            } else if ($('input[name=animation]').length) {
                $('input[name=animation]').remove();

                var $animatedElements = $('p, h1, h2, h3, h4, h5, a, button, small, img, li, blockquote, .mbr-author-name, em, label, input, textarea, .input-group, .iconbox, .btn-social, .mbr-figure, .mbr-map, .mbr-testimonial .card-block, .mbr-price-value, .mbr-price-figure, .dataTable, .dataTables_info').not(function() {
                    return $(this).parents().is('.navbar, .mbr-arrow, footer, .iconbox, .mbr-slider, .mbr-gallery, .mbr-testimonial .card-block, #cookiesdirective, .mbr-wowslider, .accordion, .tab-content, .engine, .extFooter1, #scrollToTop, .mbr-footer');
                }).addClass('hidden animated');

                function getElementOffset(element) {
                    var top = 0
                    do {
                        top += element.offsetTop  || 0;
                        element = element.offsetParent;
                    } while(element);

                    return top;
                };

                function checkIfInView() {
                    var window_height = window.innerHeight;
                    var window_top_position = document.documentElement.scrollTop || document.body.scrollTop;
                    var window_bottom_position = window_top_position + window_height - 50;

                    $.each($animatedElements, function() {
                        var $element = $(this);
                        var element = $element[0];
                        var element_height = element.offsetHeight;
                        var element_top_position = getElementOffset(element);
                        var element_bottom_position = (element_top_position + element_height);

                        // check to see if this current element is within viewport
                        if ((element_bottom_position >= window_top_position) &&
                            (element_top_position <= window_bottom_position) &&
                            ($element.hasClass('hidden'))) {

                            if ($element.hasClass('no-anim'))
                            {
                                $element.removeClass('hidden');
                            }
                            else if ($element.hasClass('product-body-image-left'))
                            {
                                $element.removeClass('hidden').addClass('fadeInLeft')
                                .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                                    $element.removeClass('animated fadeInLeft');
                                });
                            }
                            else if ($element.hasClass('product-body-image-right'))
                            {
                                $element.removeClass('hidden').addClass('fadeInRight')
                                .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                                    $element.removeClass('animated fadeInRight');
                                });
                            }
                            else if ($element.hasClass('product-body-image-right') == false && $element.hasClass('product-body-image-left') == false)
                            {
                                $element.removeClass('hidden').addClass('fadeInUp')
                                .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                                    $element.removeClass('animated fadeInUp');
                                });
                            }
                            else {
                                $element.removeClass('hidden');
                            }


                            
                        }
                    });
                }

                var $window = $(window);

                $window.on('scroll resize', checkIfInView);
                $window.trigger('scroll');
            }
        });

        if ($('.navbar').length) {
            $(".nav-dropdown").swipe({
                swipeLeft:function(event, direction, distance, duration, fingerCount) {
                    $('.navbar-close').click();
                }
            });
        }
    }

    // Scroll to Top Button
    $(document).ready(function() {
    if ($('.mbr-arrow-up').length) {
        var $scroller = $('#scrollToTop'),
            $main = $('body,html'),
            $window = $(window);
        $scroller.css('display', 'none');
        $window.scroll(function () {
        if ($(this).scrollTop() > 0) {
            $scroller.fadeIn();
        } else {
            $scroller.fadeOut();
        }
        });
        $scroller.click(function() {
            $main.animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    }
    });

    // Fix menu for Opera Mini and Android Browsers < 4.4v
    if(navigator.userAgent.match(/(Opera Mini)|(534\.30)|(534\.13)|(530\.17)|(533\.1)/i )){ 
        if($('nav.navbar').length){
            var color = $('nav.navbar .nav-link').css('color') || '#c8c8c8';
            $('.navbar-toggler .hamburger-icon').remove();
            $('.navbar-toggler:eq(0)').addClass('collapsed').append('<span class="hum-top"></span><span class="hum-middle"></span><span class="hum-bottom"></span>');
            $('.navbar-toggler span').not('.close-icon').css('background-color', color);
        }
    }    

});