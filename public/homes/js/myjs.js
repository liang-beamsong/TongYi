$(function(){
    var winWidth;
    var winHeight;
    var nav_height = $('.index_nav').height();
    function aa() {
        winWidth = $(window).width();
        winHeight = $(window).height();
        nav_height = $('.index_nav').height();
        $('.index_nav').width(winWidth);
		var fb_mapW = $('.fb_map_div1').width();
		if(winWidth>991){
			$('.fb_map_div1').css('left',(winWidth-1200)/2);
		}
        $(window).scroll(function(){
            if($(window).scrollTop()>winHeight){
                $('#top').fadeIn();
            }else{
                $('#top').fadeOut();
            }
        })
		

        /*  hog  */ 
        // var span_height = $('.hog_youshi a.a1 .div2 span.span').height();
        // var div1_height = $('.hog_youshi a.a1 .div1').height();
        // var bdo_height = $('.hog_youshi a.a1 .div1 span.span1 bdo.bdo1').height();
        // $('.hog_youshi a.a1 .div1 span.span1').css('line-height',div1_height+'px');
        // $('.hog_youshi a.a1 .div1 span.span1 bdo.bdo1').css('padding-top',(div1_height-bdo_height)/2+'px');
        // $('.hog_youshi a.a1 .div2 span.span').css('padding-top',(div1_height-span_height)/2+'px');
        $(window).load(function(){
            $('.hog_youshi a.a1').each(function(){
                var span_height = $(this).find('.div2 span.span').height();
                var div1_height = $(this).find('.div1').height();
                var bdo_height = $(this).find('.div1 span.span1 bdo.bdo1').height();
                // $('.hog_youshi a.a1 .div1 span.span1 bdo.bdo1').css('padding-top',(div1_height-bdo_height)/2+'px');
                // $('.hog_youshi a.a1 .div2 span.span').css('padding-top',(div1_height-span_height)/2+'px');

                $(this).find('.div1 span.span1 bdo.bdo1').css('padding-top',(div1_height-bdo_height)/2+'px');
                $(this).find('.div2 span.span').css('padding-top',(div1_height-span_height)/2+'px');
            })
        
        

            var div1Height = 0;
            var span3_height = 0;
            $('.system_div1').each(function(){
                var _thisHeight = $(this).height();
                var _this_span3_Height = $(this).find('.span3').height();
                if(_this_span3_Height>span3_height){
                    span3_height = _this_span3_Height;
                    $('.jt_system .span3').height(span3_height);
                }else{
                    span3_height = span3_height;
                    $('.jt_system .span3').height(span3_height);
                }
                if(_thisHeight>div1Height){
                    div1Height = _thisHeight;
                }else{
                    div1Height = div1Height;
                }
                
            })
            $('.jt_system .div1').height(div1Height);


            if($(window).width()>991){
            	var titt = setTimeout(function(){
	                $('.body').addClass('xz');
	                $('.index_nav').width($(window).width());
	                $('.vadio').slideUp(1000);
	                $('.index_body').animate({scrollTop:0},0);  
	                $('.index_nav').animate({top:0},1000);  
	                return false; 
	            },9000)
            }

            $('.guanbi').click(function() {
                $('.body').addClass('xz');
                $('.index_nav').width($(window).width());
                $('.vadio').slideUp(1000);
                $('body,html').animate({scrollTop:0},0);  
                $('.index_nav').animate({top:0},1000);  
                clearTimeout(titt);
                return false; 
            });
        })
        
        /***********zl about*************/
        if(winWidth>991){
            $('.mod-05 .box:even').css({
                paddingRight: '146px'
            })
            $('.mod-05 .box:even .day').css({
                paddingLeft: '86px',
                background: 'url("/static/images/z_namebg1.png") left center no-repeat',
                right: '-48px'
            })
            $('.mod-05 .box:even .text').css({
                textAlign: 'right'
            })

            $('.mod-05 .box:odd').css({
                paddingLeft: '146px',
                marginLeft: '50%'
            })
            $('.mod-05 .box:odd .day').css({
                paddingRight: '86px',
                background: 'url("/static/images/z_namebg2.png") right center no-repeat',
                left: '-48px'
            })
        }

		if(winWidth>991){
			$('.navv').css('top',winHeight-nav_height+30);
		}else{
			$('.navv').css('top',winHeight-nav_height); 
		}

        /*-----换背景-----*/ 
        if(winWidth<1025){
            $('.huan_bg').each(function(){
                var data_bg = $(this).attr('data-bg');
                $(this).css({'background':'url('+data_bg+') left center no-repeat','background-size':'cover'});
            })
        }else{
            $('.huan_bg').each(function(){
                var data_bg2 = $(this).attr('data-bg2');
                $(this).css({'background':'url('+data_bg2+') center top no-repeat','background-size':'cover'});
            })
        }

    }
    aa();
    $(window).resize(function(){
        aa();
    })

    /*头部导航*/ 
    


    $('.public_ACGone').mouseenter(function(){
        if($(this).hasClass('active')){
        }else{
            $(this).find('.span1').stop().animate({'left':0,'opacity': 1},400,function(){
                $(this).css({
                    opacity: '0'
                })
                $(this).siblings('.span2').css({
                    opacity: '1',
                    right: '0'
                })
            });
        }
    })
    $('.public_ACGone').mouseleave(function(){
        if($(this).hasClass('active')){
        }else{
            $(this).find('.span2').stop().animate({'right':'-100%','opacity': 0},600,function(){
                $(this).siblings('.span1').css('left','-100%')
            });
        }
    })



    $('.vadio img.mg1').css({'height':$(window).height(),'width':$(window).width()});
    $('.youshi img').height($('.youshi>div').eq(1).find('img').height());
    $(window).resize(function(){
        $('.vadio img.mg1').css({'height':$(window).height(),'width':$(window).width()});
        $('.youshi img').height($('.youshi>div').eq(1).find('img').height());
    })


    $('.scrolltop').height($('.div_huodong .divv1').height()-11);

    $('.lijizunxun .div_left').click(function(){
        $('.guab').show();
        $(this).addClass('xz');
        $(this).parents('.lijizunxun').css({'width':448,'height':412});
        $(this).siblings('.div_right').css('visibility','visible');
    });
    $('.guab').click(function(){
        $(this).hide();
        $(this).siblings('.div_right').css('visibility','hidden');
        $('.lijizunxun .div_left').removeClass('xz');
        $(this).parents('.lijizunxun').css({'width':104,'height':101});
        $('.biaodan .div_tc').hide();
    });
	/*
    $('.biaodan .but_01').click(function(){
        $(this).siblings('.div_tc').show();
    });*/

    $('.section_06 .div_biaoti .span1').click(function(){
        $(this).addClass('xz').siblings().removeClass('xz');
        $(this).parents().siblings('.div_tu_q').find('.div1').eq($(this).index()).show();
        $(this).parents().siblings('.div_tu_q').find('.div1').eq($(this).index()).siblings().hide();
		var th_video = $(this).attr('data-video');
		$(this).siblings('.span2').attr('data-video',th_video);
		//alert(th_video)
		//$('#video').html('<video autoplay="autoplay" src='+th_video+' width="100%"  controls="controls" loop="loop" ></video>');
    });
    $('.section_06 .div_biaoti .span2').click(function(){
		var th_video = $(this).attr('data-video');
		$('#video').html('<video autoplay="autoplay" src='+th_video+' width="100%"  controls="controls" loop="loop" ></video>');
        $(this).parents().siblings('.div_video').show();
    });
    $('.div_video .mg2').click(function(){
        $('.div_video').hide();
		$('#video').html('');
    });


    $('.celan ul li.c_ewm').hover(function(){
        $(this).find('span.span1').stop(true,false).fadeToggle(700);
    })
    $('.celan ul li.c_phone').hover(function(){
        $(this).find('span.span1').stop(true,false).animate({'right':0},700);
    },function(){
        $(this).find('span.span1').stop(true,false).animate({'right':-224},700);
    })
    

    /*         hog         */
    var timmer = null;
    var a_size = $('.hog_fenjie .div_title .div_01').find('a').size();
    var i = 0;

    function timer(){
        timmer = setInterval(function(){
            if((i+1)<a_size){
                $('.hog_fenjie .div_title').siblings('.div_nr').find('.div_nr_01').eq(i).show();
                $('.hog_fenjie .div_title').siblings('.div_nr').find('.div_nr_01').eq(i).siblings().hide();
                $('.hog_fenjie .div_title .div_01 a').eq(i).addClass('xz').siblings().removeClass('xz');
                i++;
            }else{
                $('.hog_fenjie .div_title').siblings('.div_nr').find('.div_nr_01').eq(i).show();
                $('.hog_fenjie .div_title').siblings('.div_nr').find('.div_nr_01').eq(i).siblings().hide();
                $('.hog_fenjie .div_title .div_01 a').eq(i).addClass('xz').siblings().removeClass('xz');
                i=0;
            }
        },3500)
    } 
    timer();
    $('.hog_fenjie .div_title .div_01 a').hover(function(){
        i = $(this).index();
        $(this).parents('.div_title').siblings('.div_nr').find('.div_nr_01').eq(i).show();
        $(this).parents('.div_title').siblings('.div_nr').find('.div_nr_01').eq(i).siblings().hide();
        $(this).addClass('xz').siblings().removeClass('xz');
        clearInterval(timmer);
    },function(){
        timer();
    });

    if($(window).width()<=1024){
        clearInterval(timmer);
    }



    var hog_jfh = 0;
    $('.hog_fenjie .div_nr .div_nr_01').each(function(){
        if($(window).width()>767&$(window).width()<1200){
            var hog_jifenHeight = $(this).height();
            if(hog_jfh<hog_jifenHeight){
                hog_jfh = hog_jifenHeight;
            }else{
                
            }
        }
    })
    if($(window).width()>767&$(window).width()<1200){
        $('.hog_fenjie .div_nr .div_nr_01').height(hog_jfh);
    }
    





    /*          品牌活动          */ 
    $('.pp_sec_01 a.a1').hover(function(){
        $(this).find('i.i2').stop(true,false).slideToggle();
    })

//	$('.hog_time a.a1').click(function(){
//		$('.y_v_tc').show();
//		$('.y_bg_mc').show();
//	})

	$('.y_v_tc .mg2').click(function(){
		$('.y_v_tc').hide();
		$('.y_bg_mc').hide();
		$('#video').html('');
	})



    // 演出
    $('.yc_title b').mouseover(function(){
        $(this).addClass('xz').siblings().removeClass('xz');
        $(this).parents('.yc_title').siblings('.yc_mianshi').find('.divv1').eq($(this).index()).show().siblings().hide();
    })

    //返回顶部
    $("#top,.yc_top").click(function(){  
        $('body,html').animate({scrollTop:0},1000);  
        return false;  
    });


    // 2017/07/27
    // if($(window).width()<992){
    //      $('.mod-01 .map .anchor').removeClass('a-1');
    //  }else{
    //     $('.mod-01 .map .anchor').addClass('a-1');
    //  }
   
    $('.lijibaoming_l').click(function(){
    	$('.sec_mc').fadeIn();
    	$('.bm_tc').fadeIn();
    });
    $('.bm_tc .guab_g').click(function(){
    	$('.sec_mc').fadeOut();
    	$('.bm_tc').fadeOut();
    });


})
