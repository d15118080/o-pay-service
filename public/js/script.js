//헤더 임시 인클루드
$(document).ready(function(){
	//헤더
	fetch("/include/header.html")
	  .then(response => {
		return response.text()
	  })
	  .then(data => {
		document.querySelector("header").innerHTML = data;
		
		//회원가입 모달창
		$(".login_btn").on("click" , function(){
			$(".modal_common").fadeIn(300);
		});

		$(".modal_common .modal_bg").on("click" , function(){
			$(".modal_common").fadeOut(300);
		});
	  });
});

//인풋 효과
$(".input_common").on("focusin" , function(){
    $(this).css("border-color" , "#fda44b")
});

$(".input_common").on("focusout" , function(){
    $(this).css("border-color" , "#ddd")
});

//앱 다운 연결
$(".apple_down").on("click" ,function(){
	alert("준비중입니다.")
})