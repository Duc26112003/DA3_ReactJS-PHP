$(document).ready(function () {
    var autoSlideInterval;
    var slideDuration = 5000;

    function startAutoSlide() {
        autoSlideInterval = setInterval(function () {
            nextSlide();
        }, slideDuration);
    }

    function nextSlide() {
        var $activeSlide = $('.active');
        var $nextSlide = $activeSlide.next();

        if ($nextSlide.length === 0) {
            $nextSlide = $('.myslide1:first-child');
        }

        transitionSlides($activeSlide, $nextSlide, 'to-right');
    }

    function prevSlide() {
        var $activeSlide = $('.active');
        var $prevSlide = $activeSlide.prev();

        if ($prevSlide.length === 0) {
            $prevSlide = $('.myslide1:last-child');
        }

        transitionSlides($activeSlide, $prevSlide, 'to-left');
    }

    function transitionSlides($fromSlide, $toSlide, animationClass) {
        clearInterval(autoSlideInterval);

        if ($fromSlide.is($toSlide)) {
            return;
        }

        $fromSlide.addClass(animationClass).one('webkitAnimationEnd', function (event) {
            $fromSlide.removeClass(animationClass).removeClass('active');
        });

        $toSlide.addClass('active').addClass(animationClass).one('webkitAnimationEnd', function (event) {
            $toSlide.removeClass(animationClass);
        });

        updateIndicator($toSlide.index());
        startAutoSlide();
    }

    function updateIndicator(index) {
        $('.Nodeslide ul li').removeClass('active_nut');
        $('.Nodeslide ul li').eq(index).addClass('active_nut');
    }

    $('.background-112').click(function (event) {
        nextSlide();
    });

    $('.background-111').click(function (event) {
        prevSlide();
    });

    $('.Nodeslide ul li').click(function (event) {
        var clickedIndex = $(this).index();
        var activeIndex = $('.active_nut').index();

        if (clickedIndex === activeIndex) {
            return;
        }

        clearInterval(autoSlideInterval);

        var direction = clickedIndex > activeIndex ? 'to-right' : 'to-left';
        transitionSlides($('.active'), $('.myslide1').eq(clickedIndex), direction);
    });

    startAutoSlide();
});