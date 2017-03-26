var globalScrollLockTimer;
var sectionCount;
var mode, modeTmp;
var lockTime = 1500;

$(document).ready(function(){
    
    sectionCount = $('section').length;
    $('section').first().addClass('active').addClass('trigger');
    $('body').addClass($('section.active').attr('id')).addClass('active lock-scroll');
    $('.page-background.bg-primary').addClass($('section.active').attr('id')).addClass('active');
    globalScrollLockTimer = setTimeout(function(){$('body').removeClass('lock-scroll');}, lockTime);
    setNav();
    form();
    setAnimateText();
    
    if($('html').hasClass('no-csstransitions')){
        lockTime = 0;
    }

    $(window).on('resize', function(){
        switch(parseInt($('body').css('min-width'))){
            case 1300:
              //desktop-big
              modeTmp = 'desktop-big';
              break;
            case 760:
              //desktop
              modeTmp = 'desktop';
              break;
            default:
              //mobile
              modeTmp = 'mobile';
              break;
        }
        if(mode!=modeTmp){
            mode = modeTmp;
            $(window).trigger('modeChange');
            setTimeout( texts, 100);
        }
        setBackground();
    }).resize();
    
    $('body').on('mousewheel', function(event) {
        if($('body').hasClass('lock-scroll')) return; 
        clearTimeout(globalScrollLockTimer);
        $('body').addClass('lock-scroll');
        
        var activeSection = $('section.active');
        var index = activeSection.index();
        
        if(event.deltaY==-1 && index!=0){
            goToSection = activeSection.prev('section');
            showPrevious(activeSection, goToSection, lockTime);
        }else if(event.deltaY==1 && (index+1)!=sectionCount){
            goToSection = activeSection.next('section');
            showNext(activeSection, goToSection, lockTime);
        }else{
            globalScrollLockTimer = setTimeout(function(){$('body').removeClass('lock-scroll');});
        }
    });
    
    $('body').swipe({
        swipeUp: function(event, direction, distance, duration, fingerCount) {   
            event.stopPropagation();
            if(!$('#section-1').hasClass('active')){
                if($('body').hasClass('lock-scroll')) return; 
                clearTimeout(globalScrollLockTimer);
                $('body').addClass('lock-scroll');
                
                var activeSection = $('section.active');
                var index = activeSection.index();
                goToSection = activeSection.prev('section');
                showPrevious(activeSection, goToSection, lockTime);
            }
        },
        swipeDown: function(event, direction, distance, duration, fingerCount) {
            event.stopPropagation();
            if(!$('#section-7').hasClass('active')){
                if($('body').hasClass('lock-scroll')) return; 
                clearTimeout(globalScrollLockTimer);
                $('body').addClass('lock-scroll');
                
                var activeSection = $('section.active');
                var index = activeSection.index();
                goToSection = activeSection.next('section');
                showNext(activeSection, goToSection, lockTime);
            }
        },
        fallbackToMouseEvents: true
    });
    
    $('#nav a').on('click', function(e){
       e.preventDefault();
       var goToSection = $($(this).attr('href')); 
       var goToIndex = goToSection.index(); 
       var activeSection = $('section.active');
       var index = activeSection.index();
       
       if(goToIndex > index){
           showNext(activeSection, goToSection, lockTime);
       }else if(goToIndex < index){
           showPrevious(activeSection, goToSection, lockTime);
       }else{
           return false;
       }
    });
    
    $('.btn-scroll').on('click', function(e){
       e.preventDefault();
       var activeSection = $('section.active');
       var goToSection = activeSection.next('section');
       showNext(activeSection, goToSection, 2000);
    });
});

function texts(){
    if(mode!='mobile'){
        $('h1').fitText(5.25);
        $('h1 > span').fitText(2.35);
        $('p, ul').fitText(7.5);
        $('form').fitText(2.4);
    }else{
        $('h1').fitText(2.2);
        $('h1 > span').fitText(1.1);
        $('p, ul').fitText(2.4);
        $('form').fitText(2);
    }
}

function setAnimateText(){
    split('h1 > span');
    $('h1 b').each(function(){
        if($(this).text()==" "){
            $(this).html('&nbsp;');   
        }
    });
    animateText($('section.active'));
}

function animateText(activeSection) {
    setTimeout( function(){ $('section').not(activeSection).find('h1 b').removeClass('trigger'); }, 1000);
    $('h1 b', activeSection).each(function(index){
        var _this = $(this);
        setTimeout( function(){
            _this.addClass('trigger');
        }, index*100); 
    });
}

function setBackground(){
    var winW = $(window).width();
    var winH = $(window).height();
    $('.background').each(function(){
        var bgW = $(this).data('width');
        var bgH = $(this).data('height');
        if(mode=='desktop-big'){
            var bgW = 1132;
            var bgH = 800;
        }
        bgProp = bgW/bgH;
        newHeight = bgH;
        newWidth = bgW;
        if(winH <= bgH){
            newHeight = winH;
            newWidth = bgProp*winH;
        }
        if(winW <= bgW){
            newWidth = winW;
            newHeight = winW/bgProp;
        }
        $(this).css({ height: newHeight, marginTop: -newHeight/2, width: newWidth, marginLeft: -newWidth/2 });
        if(mode!='mobile'){
            $(this).closest('.container').css({ height: newHeight, marginTop: -newHeight/2, width: newWidth, marginLeft: -newWidth/2 });
        }
    });
}

function setNav(){
    var activeId = $('section.active').attr('id');
    $('#nav li').removeClass('active');
    $('#nav a[href="#'+activeId+'"]').closest('li').addClass('active');
}

function setGradientBg(goToSection){
    $('.page-background.bg-secondary').addClass(goToSection.attr('id')).addClass('active');
    $('.no-csstransitions .page-background.bg-secondary').animate({ opacity: 1 }, 1000);
    setTimeout(function(){
        $('.page-background.bg-primary').removeAttr('class').addClass('page-background bg-primary active').addClass(goToSection.attr('id'));
        $('.page-background.bg-secondary').removeAttr('class').addClass('page-background bg-secondary');
        $('.no-csstransitions .page-background.bg-secondary').css({ opacity: 0 });
    }, 1000);
}

function showNext(activeSection, goToSection, lockTime){
    var sectionHeight = activeSection.height();
    var delay, delayTransition = 0;
    var animationTime = 1000;
    if(activeSection.index()==0 && (mode=='desktop' || mode=='desktop-big') && !$('html').hasClass('no-csstransitions')){
        delay = 500;
        delayTransition = 1000;
        animationTime = 0;
        activeSection.addClass('transition');
    }
    setTimeout( function(){
        activeSection.stop(1,0).animate({ top: sectionHeight }, animationTime, function(){
            activeSection.removeClass('trigger');
        }).removeClass('active');
        goToSection.css({ top: -sectionHeight });
        goToSection.stop(1,0).animate({ top: '0' }, animationTime, function(){
            globalScrollLockTimer = setTimeout(function(){$('body').removeClass('lock-scroll');}, lockTime);
            goToSection.addClass('trigger');
            setTimeout( function(){
                activeSection.removeClass('transition');
            }, delayTransition);
        }).addClass('active');
        $('body').removeClass(activeSection.attr('id'));
        $('body').addClass(goToSection.attr('id'));
        setGradientBg(goToSection);
        animateText(goToSection);
        setNav();
    }, delay);
}

function showPrevious(activeSection, goToSection, lockTime){
    var sectionHeight = activeSection.height();
    activeSection.stop(1,0).animate({ top: -sectionHeight }, 1000, function(){
        activeSection.removeClass('trigger');
    }).removeClass('active');
    goToSection.css({ top: '100%' });
    goToSection.stop(1,0).animate({ top: '0' }, 1000, function(){
        globalScrollLockTimer = setTimeout(function(){$('body').removeClass('lock-scroll');}, lockTime);
        goToSection.addClass('trigger');
    }).addClass('active');
    $('body').removeClass(activeSection.attr('id'));
    $('body').addClass(goToSection.attr('id'));
    setGradientBg(goToSection);
    animateText(goToSection);
    setNav();
}

function form(){
    $('input, textarea').placeholder();
    var theForm = document.getElementById( 'form' );

    new stepsForm( theForm, {
        onSubmit : function( form ) {
            classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );
            var url = "mail.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $("#form").serialize(),
                success: function(data)
                {
                    if(data){
                    	$(theForm).closest('section').addClass('send');
                        $(theForm).find('.final-message').addClass('thx').html('Message bien reçu! Notre tour de contrôle reviendra vers vous très prochainement.');
                        $(theForm).find('input, textarea').blur();
                    }
                }
            });
        }
    } );
}

var split = function(elem){
    $.each($(elem).contents(), function(){
        if($(this).children().length) {
            split($(this));
        }
        else {
            if(!this.tagName) {
                $(this).replaceWith( '<b>'+this.textContent.split('').join('</b><b>')+'</b>' );
            }
            else if($(this).text().length) {
                $(this).html( '<b>'+this.textContent.split('').join('</b><b>')+'</b>' );
            }
        }
    });
};
