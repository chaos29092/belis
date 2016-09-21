$(document).ready(function(){
	//订阅
	$('#newsletter').submit(function(){
		if(global_obj.check_form($(this).find('*[notnull]'), $(this).find('*[format]'))){return false;}
		$(this).find('input[type=submit]').attr('disabled', 'disabled');
		
		$.post('/init.html', 'typ=newsletter&'+$(this).serialize(), function(data){
			if(data.status==1){
				global_obj.win_alert('Added to subscribe successful!', function(){
					$('#newsletter input[name=Email]').val('');
				});
			}else{
				global_obj.win_alert('"'+data.Email+'" This mailbox already exists subscription!');
			}
		}, 'json');
		
		$(this).find('input[type=submit]').removeAttr('disabled');
		return false;
	});
	
	$('#sitenav form.search').submit(function(){if(global_obj.check_form($(this).find('*[notnull]'), $(this).find('*[format]'))){return false;}});
	
	$('#lib_down_list').delegate('li a', 'click', function(){window.location.href='/init.html?typ=download&DId='+$(this).attr('l');});


	$(".prod_info_pdf").click(function(){//PDF打印
		$("#export_pdf").attr("src", "http://pdfmyurl.com?url="+window.location.href.replace(/^http[s]?:\/\//, ""));	
	});
	$('.add_to_inquiry').click(function(){	//加入询盘篮
		$.post('/init.html', 'typ=add_to_bags&ProId='+$(this).attr('data'), function(data){
			if(data.inq_type){
				window.location.href="/inquiry.html";
			}else{
				inquiry_tips();	
			}
		},'json');
		$('.isincart').addClass('on');
	});
	
	//切换在询盘中的状态
	$('.isincart').click(function(){
		var btn = $(this);
		if(btn.hasClass('on')){
			$.post('/init.html', 'typ=delete_from_bags&ProId='+$(this).attr('data'), function(data){
				btn.removeClass('on');
			},'json');
		} else {
			$.post('/init.html', 'typ=add_to_bags&ProId='+$(this).attr('data'), function(data){
				btn.addClass('on');
			});
		}
	});
	
	function inquiry_tips(){
		global_obj.div_mask();
		$('body').prepend('<div id="global_win_alert"><div id="alert_img"></div><div id="alert_tips">'+lang_obj.global.already+'</div>'+'<div class="clear"></div><div id="alert_bottom"><a href="javascript:void(0);" id="alert_continue">'+lang_obj.global.continue+'</a><a href="/inquiry.html" id="alert_inquery">'+lang_obj.global.inquery+'</a></div></div>');
		$('#global_win_alert').css({
			position:'fixed',
			left:$(window).width()/2-240,
			top:'30%',
			background:'#fff',
			border:'1px solid #ccc',
			opacity:0.95,
			width:580,
			height:218,
			'z-index':100000,
			'border-radius':'8px'
		});
		$('#alert_img').css({width:'60px',height:'45px',float:'left',margin:'35px 0 0 115px'});
		$('#alert_tips').css({fontSize:'16px',width:'285px',margin:'56px 0 0 9px',float:'left'});
		$('#alert_bottom').css({background:'url(/static/images/global/sh_line.png) no-repeat left 30px',overflow:'hidden',width:'492px',margin:'0 auto',paddingTop:'30px'});
		$('#alert_continue').css({marginTop:'30px',float:'left',width:'210px',height:'43px',lineHeight:'43px',textAlign:'center',color:'#ffffff','border-radius':'5px',background:'#575757',fontSize:'18px'});
		$('#alert_inquery').css({marginTop:'30px',float:'right',width:'210px',height:'43px',lineHeight:'43px',textAlign:'center',color:'#ffffff','border-radius':'5px',background:'#a4a4a4',fontSize:'18px'});
		$('#alert_continue').click(function(){
			$('#global_win_alert').remove();	
			$('#div_mask').remove();	
		});		
	}

	$('#lib_inquire_list>ul>li .info .remove a').click(function(){
		var obj=$(this).parent().parent().parent();
		$.post('/init.html', 'typ=delete_from_bags&ProId='+$(this).attr('data'), function(data){
			if(data.status==1){
				global_obj.win_alert('Successful!', function(){obj.remove();});
			}else if(data.status==-1){
				global_obj.win_alert('Error!');
			}
		},'json');
	});
	$('#lib_inquire_list form[name=inquiry]').submit(function(){//产品询盘提交处理
		if(global_obj.check_form($(this).find('*[notnull]'))){return false;}
		var e=$(this).find('input[name=Email]');
		e.removeAttr('style');
		if(e.val()!='' && (/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/.test(e.val())===false)){
			e.css('border', '1px solid red');
			e.focus();
			global_obj.win_alert(lang_obj.format.email);
			return false;
		}
		$(this).find('input:submit').attr('disabled', 'disabled');
		
		$.post('/init.html', 'typ=inquiry&'+$(this).serialize(), function(data){
			if(data.status==1){
				global_obj.win_alert(data.msg, function(){window.location.href='/';});
			}else{
				global_obj.win_alert(data.msg);
			}
		},'json');
		
		$(this).find('input:submit').removeAttr('disabled');
		return false;
	});
	
	//产品列表页 删除询盘的功能
	$(".plist").delegate('.del_inquiry','click',function(){
		var ProId = $(this).attr('ProId');
		$.post('/init.html', 'typ=delete_from_bags&ProId='+ProId, function(data){
			location.reload();
		},'json');		
	});
	
	
	$(function(){
	$('#lib_feedback_form form[name=feedback]').submit(function(){//在线留言提交处理
		if(global_obj.check_form($(this).find('*[notnull]'))){return false;}
		var e=$(this).find('input[name=Email]');
		var float=$(this).find('input[name=float]');
		e.removeAttr('style');
		if(e.val()!='' && (/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/.test(e.val())===false)){
			e.css('border', '1px solid red');
			e.focus();
			global_obj.win_alert(lang_obj.format.email);
			return false;
		}
		$(this).find('input:submit').attr('disabled', 'disabled');
		
		$.post('/init.html', 'typ=feedback&'+$(this).serialize(), function(data){
			$('#lib_feedback_form form[name=feedback] input:submit').removeAttr('disabled');
			global_obj.win_alert(data.msg);
			if(data.status==1){
				$('#lib_feedback_form .input').val('');
				$('#lib_feedback_form textarea').val('');
				$('#lib_feedback_form .rows span img').click();
			}else if(data.status==-1){
				$('#lib_feedback_form input[name=VCode]').css('border', '1px solid red').val('').focus().siblings('img').click();
			}else if(data.status==-2){
				
			}
		},'json');
		return false;
	});
});
});


