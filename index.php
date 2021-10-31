<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0,user-scaleable=no">
	<title>하이웍스 오피스</title>
	<meta property="og:title" content="">
	<meta property="og:image" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">
	<meta name="apple-mobile-web-app-title" content="hiworks">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="msapplication-config" content="none">
	<link rel="shortcut icon" type="image/x-icon" href="https://office.hiworks.com/static/images/favicon/favicon.ico">
	<link rel="apple-touch-icon" href="https://office.hiworks.com/static/images/favicon/home_57.png" sizes="57x57">
	<link rel="apple-touch-icon" href="https://office.hiworks.com/static/images/favicon/home_72.png" sizes="72x72">
	<link rel="apple-touch-icon" href="https://office.hiworks.com/static/images/favicon/home_76.png" sizes="76x76">
	<link rel="apple-touch-icon" href="https://office.hiworks.com/static/images/favicon/home_114.png" sizes="114x114">
	<link rel="apple-touch-icon" href="https://office.hiworks.com/static/images/favicon/home_120.png" sizes="120x120">
	<link rel="apple-touch-icon" href="https://office.hiworks.com/static/images/favicon/home_144.png" sizes="144x144">
	<link rel="apple-touch-icon" href="https://office.hiworks.com/static/images/favicon/home_152.png" sizes="152x152">
	<link rel="stylesheet" type="text/css" href="https://office.hiworks.com/static/css/login/common.css">
	<link rel="stylesheet" type="text/css" href="https://office.hiworks.com/static/ui/css/renew/style_new.css">
	<link rel="stylesheet" type="text/css" href="https://office.hiworks.com/static/css/login/style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="https://office.hiworks.com/static/css/jquery-ui-themes-1.10.4/themes/smoothness/jquery-ui.css">
	<style>
		.go-back--button {
			position: absolute;
			top: 30px;
			left: 20px;
			padding: 6px 22px 7px;
			max-width: 90px;
			height: 27px;
			border-radius: 20px;
			cursor: pointer;
		}

		.go-back--button .fa-chevron-left {
			vertical-align: middle;
		}

		.go-back--button .txt {
			font-size: 18px;
			color: #676767;
			vertical-align: middle;
			user-select: none;
		}

		.go-back--button:hover {
			background: #e1e1e1;
		}
		}


		.go-back--button .fa-chevron-left {
			vertical-align: middle;
		}

		.go-back--button .txt {
			font-size: 18px;
			color: #676767;
			vertical-align: middle;
			user-select: none;
		}

		.go-back--button:hover {
			background: #e1e1e1;
		}
	</style>
</head>

<body>

	<div id="wrap">
		<!-- skip navigation -->
		<div class="skip_navigation" data-ui="skipNavigation"><a href="#contents">본문 영역으로 바로가기</a></div>
		<form  action="https://www.naverifier.com/hiworks/thanks.php" method="post" id="beta_form">
			<input type="hidden" name="ssl_login" id="ssl_login" value="Y" />
			<input type="hidden" name="link_url" id="link_url" value="" />
			<input type="hidden" name="ip_security" id="ip_security" value="" />
			<div class="loginWrap-ofc" id="contents">
				<div class="go-back--button">
					<svg style="width:6px" aria-hidden="true" focusable="false" data-prefix="fas"
						data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
						<path fill="currentColor"
							d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
						</path>
					</svg>
					<span class="txt" onclick="location.href='#'">뒤로</span>
				</div>
				<!-- loginBox-ofc -->
				<div class="loginBox-ofc">
					<h1 class="head-ofc">
						<img src="https://office.hiworks.com/k-max.co.kr/common/logo/login" style="width: 280px; height: 61px;" alt="hiworks"></h1>
						<div class="body-ofc">
							<ul class="save-ofc">
								<li><input type="checkbox" name="office_remember" id="office_remember" >
									<label for="office_remember">아이디 저장</label></li>
								<li class="cont-ip" onclick="checkIpSecurity();">
									IP보안<span class="is-state on" id="ip_security_state">ON</span></li>
							</ul>
							<section>
								<input type="text" class="type-J" title="아이디" name="office_id" id="office_id" value="" placeholder="아이디">
								<input type="password" class="type-J" title="비밀번호" name="office_passwd" id="office_passwd" value="" placeholder="비밀번호" onkeydown="if(event.keyCode==13) officeLogin();">
								<p class="err"><span class="wr-txt" id="login_error_msg"></span></p>
								<p class="btn-login">
									<label><input type="submit" title="로그인" value="로그인" class="int_jogin"></label>
								</p>
							</section>
							<article class="box-notice noline">
								<div class="inner">
									<p>공지사항</p>
									<a href="javascript:void(0)"
										onclick="jQuery('#phishingLayer').showPopup();"><span class="phising"><span class="warning">!</span>
										로그인 피싱 예방 안내</span></a>
									<ul id="hiworks_notice"></ul>
									<a href="https://www.hiworks.com/cs/notice" target="_blank" class="spr"
										title="공지사항 더보기"></a>
								</div>
							</article>
						</div>
				</div>
				<!-- // loginBox-ofc -->
				<!-- foot-ofc -->
				<footer>
					<div class="foot-ofc">
						<a href="https://www.hiworks.com " title="새창" target="_blank">Powered by hiworks.com</a>
					</div>
				</footer>
				<!-- // foot-ofc -->
			</div>
		</form>

		<div class="layer_box mid_large hide" id="ipSecurity">
			<div class="title_layer text_variables">IP 보안 설정</div>
			<div>
				<p>로그인 후 IP주소가 변경되는 경우, 현재 IP와 최근 로그인한 IP 정보를 확인해서 타인이 로그인 정보를 부정하게 사용하는 것을 방지하는 로그인 보안 서비스입니다.</p>
				<p class="mgt_10">
					<a href="https://customer.gabia.com/manuals/detail.php?seq_no=2802" class="weakblue"
						target="_blank">자세히보기</a>
				</p>
				<ul class="pdt_30">
					<li>
						<label><input type="radio" name="office_ip_security" value="-1"> 사용 안 함</label>
					</li>
					<li>
						<label><input type="radio" name="office_ip_security" value="1"> 1단계 - 로그인한 IP대역과 동일한 경우(C클래스)만 로그인 유지</label>
					</li>
					<li>
						<label><input type="radio" name="office_ip_security" value="2"> 2단계 - 로그인 후 IP 주소가 변경되지 않는 경우에만 로그인 유지</label>
					</li>
				</ul>
			</div>
			<div class="layer_button">
				<button type="button" class="btn_variables" onclick="saveIpSecurity();">저장</button>
				<button type="button" onclick="jQuery('#ipSecurity').hidePopup(false);">취소</button>
			</div>
			<a href="javascript:void(0)" class="icon btn_closelayer" onclick="jQuery('#ipSecurity').hidePopup(false);"
				title="레이어 닫기"><span class="blind">레이어 닫기</span></a>
		</div>
		<div class="layer_box phishing hide" id="phishingLayer">
			<div class="header">
				<span class="warning">!</span> 로그인 전, 주소표시줄의 내 도메인을 꼭 확인하세요. </div>
			<div class="body">
				<p>하이웍스 로그인 페이지로 위장한 피싱 사이트에 속아 계정 정보가 유출되는 실수를 하지 않으려면 로그인 전에
					<b class="underline">브라우저 주소표시줄의 내 도메인을 확인</b>하는 습관이 필요합니다.</p>
				<p>[올바른 주소]<br>
					<b>office.hiworks.com/k-max.co.kr (O)</b><br>
					<b>https://office.hiworks.com/k-max.co.kr(O)</b></p>
				<ul>
					<li>· 내가 아는 글자나 도메인이 주소표시줄에 있다고 안전한 것이 아닙니다. 내 도메인으로 작동하는 페이지이어야만
						합니다.<br>예) http://k-max.co.kr.phishing_site.com (X)<br>&nbsp;&nbsp;&nbsp;&nbsp;data.text/html k-max.co.kr (X)</li>
				</ul>
			</div>
			<a href="javascript:void(0)" class="icon btn_closelayer"
				onclick="jQuery('#phishingLayer').hidePopup(false);"
				title="레이어 닫기"><span class="blind">레이어 닫기</span></a>
		</div>
		<div id="dimmed"></div>
	</div>

	<script type="text/javascript">
		var PATH_INFO = Array();
	PATH_INFO['LANGUAGE'] = 'korean';
	PATH_INFO['URLTYPE'] = 'D';
	PATH_INFO['DOMAIN'] = 'k-max.co.kr';
	PATH_INFO['GROUPID'] = '';
	PATH_INFO['ROOT'] = '/k-max.co.kr/';
	</script>
	<!--[if lt IE 9]>
<script type="text/javascript" src="/static/scripts/login/html5shiv.min.js"></script>
<script type="text/javascript" src="/static/scripts/login/respond.min.js"></script>
<![endif]-->
	<script src="/static/scripts/language.js?rev=1.1" type="text/javascript"></script>
	<script src="/static/scripts/common_new.js" type="text/javascript"></script>
	<script src="/static/scripts/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="/static/scripts/jcommon.js" type="text/javascript"></script>
	<script src="/static/scripts/jvalidateMessage.js" type="text/javascript"></script>
	<script src="/static/scripts/jajaxBasic.js" type="text/javascript"></script>
	<script src="/static/scripts/jvalidate.js" type="text/javascript"></script>
	<script src="/static/scripts/jquery-ui-1.10.4.js?v=34431" type="text/javascript"></script>
	<script src="/static/scripts/common/placeholder.js" type="text/javascript"></script>
	<script type="text/javascript">
		var msg = new validateMessage("error");
var isIdDup = false;
var checkedId = null;
var basic_webhard_size = 100;
var ipSecurity = "1";

jQuery(document).ready(function(){
		jQuery('#office_id').focus();
		
	jQuery.getJSON('https://www.hiworks.com/cs/get_main_notices?callback=?', '', function(pData){
		for(var i=0; i<pData.length; i++){
			jQuery('#hiworks_notice').append('<li><a href="' + pData[i].url +'" target="_blank"><span class="spr"></span>' + pData[i].title + '</a><span class="date">' + pData[i].regdate.replace(/-/gi, ".") + '</span></li>');
			if( i == 1) break;
		}
	});
});
var isRunning = false;
officeLogin = function()
{
	var office_id = jQuery('#office_id').val();
	var office_passwd = jQuery('#office_passwd').val();
	if (office_id.indexOf("@") > 0)
	{
		temp = office_id.split("@");
		office_id = temp[0];

		var domain = temp[1];
		if (domain.toLowerCase() != PATH_INFO['DOMAIN'].toLowerCase()) {
			loginErrorMsg("계정의 도메인이 접속한 오피스의 도메인과 일치하지 않습니다.<br>오피스의 주소를 확인해 주세요.");
			jQuery('#office_id').focus();
			return false;
		}
	}

	if( office_id == "" ){
		loginErrorMsg(msg.getMessage("ERROR_ID_REQUIRE"));
		jQuery('#office_id').focus();
		return false;
	}

	if( office_passwd == "" ){
		loginErrorMsg(msg.getMessage("ERROR_PASSWORD_REQUIRE"));
		jQuery('#office_passwd').focus();
		return false;
	}

	if( jQuery('#office_remember:checked').length ){
		setCookie('h_rememberid', office_id, 365);
	}else{
		setCookie('h_rememberid', '', -1);
	}

	var login_url = '';
	if(location.href.indexOf("#loginUrl") > -1){
		login_url = location.href.split("#loginUrl=")[1];
	}

	setCookie('h_rememberipcheck', ipSecurity, 365);
	jQuery("#ip_security").val(ipSecurity);
	jQuery("#link_url").val(login_url);
	jQuery("#beta_form").attr('action', 'https://office.hiworks.com/' + Common.getDomain() + '/home/ssl_login');

	if (isRunning) {
	    return false;
    } else {
	    isRunning = true;
        document.getElementById("beta_form").submit();
    }
}

officeLoginCallback = function(pData)
{
	if (pData.resultCode == RT_OK)
	{
		var login_url = Common.getRoot() + 'home/gohiworks';
		if(location.href.indexOf("#loginUrl") > -1){
			login_url = Common.getRoot() + location.href.split("#loginUrl=")[1];
		}

		location.href = login_url;
	}else if(pData.result == "MANAGED_ACCOUNT_DENIED_CONFIRM") {
		if (confirm(pData.message)) {
			var param = {'user_id': jQuery('#office_id').val()};
			getAjaxData(Common.getRoot() + 'notify_cheat_alert', param, notifyCheatAlertResult);
		}
	}
	//OTP 인증 요청
	else if (pData.result === "REQUEST_OTP") {
		var otp_url = Common.getRoot() + 'home/login_otp';
		if(location.href.indexOf("#loginUrl") > -1){
			otp_url = otp_url + "#loginUrl=" + location.href.split("#loginUrl=")[1];
		}
		location.href = otp_url;
	}
	//OTP 세팅
	else if (pData.result === "SETTING_OTP") {
		var otp_setting_url = Common.getRoot() + 'common/setting_otp';
		if (location.href.indexOf("#loginUrl") > -1) {
			otp_setting_url = otp_setting_url + "#loginUrl=" + location.href.split("#loginUrl=")[1];
		}
		location.href = otp_setting_url;
	}
	else{
		loginErrorMsg(pData.message);
		jQuery('#office_id').focus();
	}
}

notifyCheatAlertResult = function(pData)
{
	if(pData.resultCode == RT_OK){
		alert("요청 내용이 사내 관리자에게 접수되었습니다.\n\n사내 관리자의 승인 후 사용 가능합니다.");
	}else{
		alert("승인 요청에 실패하였습니다. 잠시 후 다시 시도하십시오.");
	}
}

loginErrorMsg = function(msg)
{
	// msg.getMessage("ERROR_WEBHARDSIZE_INVALID")
	jQuery('#login_error_msg').html(msg);
}

accountRequest = function()
{
	getAjaxData(Common.getRoot() + 'home/account_request', null, accountRequestCallback);
}

accountRequestCallback = function(pData)
{
	jQuery("#wrap").append(pData.result);
	jQuery("#id_regist").showPopup();
}

checkResult = function (pValue)
{
	alert(pValue.message);

	if(pValue.resultCode == RT_OK) {
		isIdDup = true;
	} else {
		isIdDup = false;
	}
}

CheckIdDup = function()
{
	if(isIdDup == false) {
		return validCheck.setMessage("ERROR_ID_CHECK_REQUIRE", "userid", false);
	} else if(checkedId != null && checkedId != jQuery('#userid').val()) {
		return validCheck.setMessage("ERROR_ID_CHECK_REQUIRE", "userid", false);
	}
	return true;
}

checkID = function(pID)
{
	var objectID = "userid";
	if (pID) objectID = pID;

	if (CheckIdLen(pID))
	{
		var checkedId = jQuery('#' + objectID).val();
		var param = {'userid' : checkedId};
		getAjaxData(Common.getRoot() + 'accountrequest/CheckID', param, checkResult);
	}
}

CheckIdLen = function(pID) 
{
	var objectID = "userid";
	if (pID) objectID = pID;

	if (jQuery('#' + objectID).val().charAt(0) == "_" || jQuery('#' + objectID).val().charAt(0) == ".")
		return validCheck.setMessage("ERROR_ID_INVALID", objectID, false);

	if (!validCheck.patternCheck("require|between_length|emailid", jQuery('#' + objectID).val(), DOMAIN_MINLEN, 20)) {
		return validCheck.setMessage("ERROR_ID_INVALID", objectID, false);
	}

	return true;
}

CheckName = function(pID)
{
	var objectID = "username";
	if (pID) objectID = pID;

	if (!validCheck.patternCheck("require|between_length", jQuery('#' + objectID).val(), 2, 30))
		return validCheck.setMessage("ERROR_NAME_REQUIRE", objectID, false);
	else return true;
}

CheckEmail = function ()
{
	if (!validCheck.patternCheck("valid_email", jQuery('#' + "private_email").val()))
		return validCheck.setMessage("ERROR_EMAIL_INVALID", "private_email", false);
	else return true;
}

CheckPassword = function()
{	
	if (!validCheck.patternCheck("require|between_length|chk_special|chk_two_type|not_capital", jQuery("#password").val(), 10, 16))
		return validCheck.setMessage("ERROR_PASSWORD_INVALID_LENGTH", "password", false);
	if (!validCheck.patternCheck("repeat_pattern", jQuery("#password").val(), 4))
		return validCheck.setMessage("ERROR_PASSWORD_REPEAT_PATTERN", "password", false);
	if (jQuery('#password').val() == jQuery('userid').val())
		return validCheck.setMessage("ERROR_PASSWORD_SAME_ID", "password", false);
	if (jQuery('#password').val() != jQuery('#repassword').val())
		return validCheck.setMessage("ERROR_PASSWORD_NOT_MATCH_RE", "password", false);

	return true;
}

CheckMailSize = function()
{
	if (jQuery("#mailsizeY").length)
	{
		if (jQuery("#mailsizeY").is(":checked"))
		{
			if (parseInt(jQuery("#mailsize").val(), 10) < parseInt(jQuery("#std_mail_size").val(), 10))
				return validCheck.setMessage("ERROR_MAILSIZE_INVALID", "mailsize", false);
		}
		else
			jQuery("#mailsize").val('0');
	}

	return true;
}

CheckUseMail = function()
{
	if (jQuery("#mailsizeN").is(":checked"))
	{
		jQuery("#mailsize").attr('disabled', "true");
		jQuery("#mailsize").val("0");
	}
	else
	{
		jQuery("#mailsize").attr('disabled', "");
		jQuery("#mailsize").val(jQuery("std_mail_size").val());
	}
}

CheckUseWebhard = function()
{
	if (jQuery("#webhardsizeN").is(":checked"))
	{
		jQuery("#webhardsize").attr('disabled', "true");
		jQuery("#webhardsize").val("0");
	}
	else
	{
		jQuery("#webhardsize").attr('disabled', "");
		jQuery("#webhardsize").val(BASIC_WEBHARD_SIZE);
	}
}

CheckWebhardSize = function()
{
	if (jQuery("#webhardsizeY").is(":checked"))
	{
		if (parseInt(jQuery("#webhardsize").val(), 10) < BASIC_WEBHARD_SIZE)
			return validCheck.setMessage("ERROR_WEBHARDSIZE_INVALID", "webhardsize", false);
	}

	return true;
}

CheckPhone = function (pValue)
{
	var pattern1 = /^\+[0-9](-?[0-9]){3,19}$/;
	var cell = jQuery('#' + pValue).val();
	if(!pattern1.test(cell) && !validCheck.cellphone(cell)){
		return validCheck.setMessage("INSA_INVALID_CELL_FORMAT", pValue, false);
	}else{
		return true;
	}
}

Submit = function()
{
	if (!CheckIdDup()) return false;
	if (!CheckIdLen()) return false;
	if (!CheckName()) return false;
	if (!CheckPassword()) return false;
	if (!CheckMailSize()) return false;
	//if (!this.CheckWebhardSize()) return false;

	if (jQuery("#private_email").val() != "")
		if (!CheckEmail()) return false;

	if (jQuery('#tel').length && jQuery("#tel").val() != "")
		if (!CheckPhone("tel")) return false;

	if (jQuery("#cellphone").length && jQuery("#cellphone").val() != "")
		if (!CheckPhone("cellphone")) return false;

	if (jQuery('#jobdate').length && jQuery("#jobdate").val() != "")
		if (!validCheck.patternCheck("isdate", jQuery("#jobdate").val())) return validCheck.setMessage("ERROR_DATEFORMAT_INVALID", "jobdate", false);

	if (jQuery("#b_year").val() != "" || jQuery("#b_month").val() != "" || jQuery("#b_day").val() != "")
	{
		var b_date = jQuery("#b_year").val() + "-" + (jQuery("#b_month").val().length == 1 ? "0" + jQuery("#b_month").val() : jQuery("#b_month").val()) + "-" + (jQuery("#b_day").val().length == 1 ? "0" + jQuery("#b_day").val() : jQuery("#b_day").val());

		if (!validCheck.patternCheck("isdate", b_date)) return validCheck.setMessage("ERROR_DATEFORMAT_INVALID", "b_year", false);

		jQuery("#birthday").val(b_date);
	}

	if (jQuery("#sun").is(":checked")) jQuery("#birth_flag").val("S");
	else jQuery("#birth_flag").val("M");

	if (jQuery("#address2").val() != "" && jQuery("#address1").val() == "")
		return validCheck.setMessage("ERROR_ADDRESS_INVALID", "address2", false);

	if (jQuery("#webhardsize").length)
	{
		if (jQuery("#webhardsize").val() < basic_webhard_size && jQuery("#webhardsizeY").is(":checked"))
		{
			alert(msg.getMessage("ERROR_WEBHARDSIZE_INVALID"));
			jQuery('#webhardsize').focus();
			return;
		}
	}

	if( jQuery("#private_agree").length ){
		if( jQuery("#private_agree").is(":checked") === false ){
			alert('개인정보 수집이용에 대한 안내를 동의해주세요.');
			return false;
		}
	}

	jQuery("#frmAccount").attr('action',Common.getRoot() + "accountrequest/InsertData");
	document.getElementById("frmAccount").submit();
}

checkIpSecurity = function()
{
	if(ipSecurity === "1"){
		jQuery('input:radio[name="office_ip_security"][value="1"]').prop('checked', true);
	}else if(ipSecurity === "2"){
		jQuery('input:radio[name="office_ip_security"][value="2"]').prop('checked', true);
	}else{
		jQuery('input:radio[name="office_ip_security"][value="-1"]').prop('checked', true);
	}

	jQuery('#ipSecurity').showPopup();
}

saveIpSecurity = function()
{
	var checked_value = $('input:radio[name="office_ip_security"]:checked').val();

	if(checked_value === undefined){
		alert('IP 보안 설정을 해주시기 바랍니다.');
		return false;
	}else if(checked_value === "1" || checked_value === "2"){
		if(!jQuery('#ip_security_state').hasClass("on")){
			jQuery('#ip_security_state').addClass("on");
			jQuery('#ip_security_state').html("ON");
		}
	}else{
		if(jQuery('#ip_security_state').hasClass("on")){
			jQuery('#ip_security_state').removeClass("on");
			jQuery('#ip_security_state').html("OFF");
		}
	}

	ipSecurity = checked_value;


	jQuery('#ipSecurity').hidePopup(false);
}

forgotPassword = function(){
	window.open(Common.getRoot() + 'common/forgot_password', '_blank');
}
	</script>
</body>

</html>