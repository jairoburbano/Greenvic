(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width();
    if(windowSize > 1025 && $('html').hasClass('no-touch')) {
        skrollr.init({
            smoothScrolling: false,
            mobileDeceleration: 0.004
        });
    }
    function menuMobile() {
        var icon = $('.menu--icon'),
            menu = $('.header__bottom');
        icon.on('click', function() {
            menu.stop().slideToggle();
        });
    }
    function menuChildren() {
        var menu = $('.menu'),
            submenu = $('.menu-item-has-children');
        if(submenu.length) {
            menu.addClass('have-children');
        }
    }
    function buscador() {
        var input = $('.header__search .input-group input');
        input.focus(function() {
            var $this = $(this);
            $this.parents('.header__search').addClass('focusin');
        });
        input.blur(function() {
            var $this = $(this);
            $this.parents('.header__search').removeClass('focusin');
        });
    }
    function info() {
        var button = $('.btn--info');
        button.on('click', function() {
            var $this = $(this);
            $this.parents('.block--info').toggleClass('info--active');
            if ($this.parents('.block--info').hasClass('info--active')) {
                $this.find('p').html('Mostrar <br> información');
            } else {
                $this.find('p').html('Ocultar <br> información');
            }
        });
    }
    function showcase() {
        var slider = $('.showcase__media, .single__slide');
        slider.each(function() {
            var $this = $(this);
            $this.flexslider({
                animation: 'slide',
                controlNav: false,
                touch: $this.find('li').length > 1,
                controlsContainer: $this.find(".custom--controls"),
                prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
                start: function(slider) {
                    $this.find('.total-slide').text(slider.count);
                    $this.find('.current-slide').text(slider.currentSlide+1);
                },
                after: function(slider) {
                    $this.find('.current-slide').text(slider.currentSlide+1);
                }
            });
            if($this.find('.flex-disabled').length) {
                $this.addClass('one-slide');
            }
        });
    }
    function instagram() {
        var item = $('.redes__item'),
            lightbox = $('.redes__lightbox'),
            close = $('.lightbox__close'),
            body = $('body, html');
        if(windowSize > 740) {
            item.on('click', function() {
                var media = $(this).data('image'),
                    content = $(this).find('.redes__content').clone();
                lightbox.fadeIn();
                lightbox.find('.lightbox__media img').attr('src', media);
                lightbox.find('.lightbox__content').html(content);
                body.addClass('noscroll');
            });
            close.on('click', function() {
                lightbox.fadeOut(300, function() {
                    $(this).find('.lightbox__content').empty();
                    body.removeClass('noscroll');
                });
            });
        }
    }
    function team() {
        var item = $('.team--important .team__item'),
            lightbox = $('.redes__lightbox'),
            close = $('.lightbox__close'),
            body = $('body, html');
        if(item.lenght) {
            lightbox.addClass('lightbox--team');
        }
        item.each(function() {
            var content = $(this).find('.team__title').clone();
            $(this).find('.team__text').prepend(content);
        });
        item.on('click', function() {
            var content = $(this).find('.team__text').clone();
            lightbox.fadeIn();
            lightbox.find('.lightbox__media').hide();
            lightbox.find('.lightbox__content').html(content);
            body.addClass('noscroll');
        });
        close.on('click', function() {
            lightbox.fadeOut(300, function() {
                $(this).find('.lightbox__content').empty();
                body.removeClass('noscroll');
            });
        });
    }
    function packing() {
        if($('.group-one').length) {
            var height = $(window).height() / 2,
                scrollTop = $(window).scrollTop(),
                container = $('.container__info').offset().top,
                menu = $('.inside--menu'),
                anchors = $('.container__info').find('section');
            if(scrollTop > container) {
                menu.addClass('menu--fixed');
            } else {
                menu.removeClass('menu--fixed');
            }
            for (var i = 0; i < anchors.length; i++){
                if (scrollTop > $(anchors[i]).offset().top - 50 && scrollTop < $(anchors[i]).offset().top + $(anchors[i]).height() - 50) {
                    $('.inside--menu a[href="#' + $(anchors[i]).attr('id') + '"]').addClass('active');
                } else {
                    $('.inside--menu a[href="#' + $(anchors[i]).attr('id') + '"]').removeClass('active');
                }
            }
            $('.inside--menu a[href^="#"]').click(function(){
                var target = $(this).attr("href");
                $('html, body').stop().animate({
                    scrollTop:$(target).offset().top
                }, 'slow');
                return false;});
        }
    }
    function share() {
        var share = $('.share--single');
        if(share.length) {
            var scrollTop = $(window).scrollTop() + $(window).height(),
                footer = $('.footer').offset().top - 60;
            if(scrollTop > footer) {
                share.addClass('share--stop');
            } else {
                share.removeClass('share--stop');
            }
        }
    }
    function formulario() {
        var group = $('.input-group input, .input-group textarea');
        group.focus(function() {
            $(this).parents('.input-group').addClass('focusin');
        });
        group.blur(function() {
            if(!$(this).val())
                $(this).parents('.input-group').removeClass('focusin');
        });
    }
    function contacto() {
        var title = $('.accordeon__title');
        if(title.length) {
            var item = $('.accordeon__item'),
                button = $('.btn--form'),
                cancel = $('.form-cancel');
            title.on('click', function() {
                var $this = $(this);
                $this.parents('.accordeon__item').siblings().removeClass('item--open');
                $this.parents('.accordeon__item').toggleClass('item--open');
                $this.parents('.accordeon__item').find('.accordeon__content').stop().slideToggle();
                $this.parents('.accordeon__item').siblings().find('.accordeon__content').slideUp();
                if(windowSize > 740) {
                    //                    $this.parents('.accordeon__item').find('.formulario--accordeon').fadeToggle();
                    //                    $this.parents('.accordeon__item').siblings().find('.formulario--accordeon').fadeOut();
                    if($('.item--open').length) {
                        //                        $this.parents('.contact__accordeon').addClass('show-it');
                    } else {
                        //                        $this.parents('.contact__accordeon').removeClass('show-it');
                    }
                }
            });
            button.on('click', function() {
                var $this = $(this);
                if(windowSize > 740) {
                    if($('.item--open').length) {
                        $this.parents('.contact__accordeon').addClass('show-it');
                        $this.parents('.accordeon__item').find('.formulario--accordeon').delay(300).fadeIn();
                        $this.parents('.accordeon__item').siblings().find('.formulario--accordeon').fadeOut();
                    }
                } else {
                    $this.parents('.accordeon__item').find('.formulario--accordeon').stop().slideToggle();
                    $this.parents('.accordeon__item').siblings().find('.formulario--accordeon').slideUp();
                }
            });
            cancel.on('click', function() {
                var $this = $(this);
                if(windowSize > 740) {
                    $this.parents('.accordeon__item').find('.formulario--accordeon').fadeOut(300, function() {
                        $this.parents('.contact__accordeon').removeClass('show-it');
                    });
                }
            });
            item.each(function() {
                var $this = $(this),
                    contactForm = $this.find('.formulario--accordeon');
                if(windowSize < 740) {
                    $this.find('.accordeon__content').append(contactForm);
                }
            });
            var ident = $('.accordeon__item').attr('id'),
                identHash = '#'+ident,
                url = location.hash;
            $('.accordeon__item'+url).addClass('item--open');
            $('.accordeon__item'+url).find('.accordeon__content').slideDown();
        }
    }
    function parallax() {
        var container = $('.block--info');
        if(container.length) {
            container.each(function() {
                var $this = $(this);
                var containerEnd = $this.height() - $(window).height(),
                    scrollTop = $(window).scrollTop(),
                    scrollTopFinal = $this.offset().top + containerEnd,
                    scrollTopStart = $this.offset().top;
                if(scrollTop > scrollTopStart) {
                    $this.addClass('active');
                } else {
                    $this.removeClass('active');
                }
                if(scrollTop > scrollTopFinal) {
                    $this.addClass('final');
                } else {
                    $this.removeClass('final');
                }
            });
        }
    }
    function slideInfo() {
        var container = $('.block--info');
        if(windowSize < 1025) {
            var gallery = $('.info--gallery');
            gallery.each(function() {
                $(this).flexslider({
                    animation: 'slide',
                    controlNav: false,
                    directionNav: false,
                    slideshow: false
                });
            });
        }
    }
    function imageFit() {
        if ( ! Modernizr.objectfit ) {
            $('.fit--media').each(function () {
                var $container = $(this),
                    imgUrl = $container.find('img').prop('src');
                if (imgUrl) {
                    $container.css('backgroundImage', 'url(' + imgUrl + ')').addClass('compat-object-fit');
                }  
            });
        }
    }
    function popupLinks() {
        var $trigger = $('.popup');
        $trigger.on('click', function (e) {
            e.preventDefault();
            var width = 575,
                height = 400,
                left = ($window.width() - width) / 2,
                top = ($window.height() - height) / 2,
                opts = 'status=1' +
                ',width=' + width +
                ',height=' + height +
                ',top=' + top +
                ',left=' + left;

            window.open(this.href, 'compartir', opts);
        });
    }
    function extranet() {
        var button = $('.header--superior--top .btn'),
            extranet = $('.extranet'),
            close = $('.extranet__icon');
        button.on('click', function() {
            extranet.addClass('active');
        });
        close.on('click', function() {
            extranet.removeClass('active');
        });
    }
    function instafeed() {

        var feed = new Instafeed({ 
            get: 'user',
            userId: '4811745528', 
            accessToken: '4811745528.55e70bd.7931705b652f49848f827eaa628c8f22', 
            sortBy: 'most-recent', 
            limit: '4',
            template: '<div class="redes__item" data-image="{{model.images.standard_resolution.url}}"><img src="{{model.images.thumbnail.url}}"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-plus"></use></svg><div class="redes__content">{{caption}}</div><a href="{{link}}"></a></div>',
            after: function() {
                instagram();
                $('.redes__content').each(function() {
                    var texto = $(this).html();
                    newText = texto.replace(/(^|\s)(#[a-z\d-]+)/ig, "<a href='http://instagram.com/explore/tags/$2' class='hash_tag'>$2 </a>");
                    $(this).empty().html(newText);
                });
            }
        }); 
        feed.run();
    }
    menuMobile();
    menuChildren();
    info();
    showcase();
    formulario();
    contacto();
    buscador();
    slideInfo();
    team();
    imageFit();
    popupLinks();
    extranet();
        instafeed();
    $(window).scroll(function() {
        packing();
        share();
        parallax();
    });
})(jQuery);
