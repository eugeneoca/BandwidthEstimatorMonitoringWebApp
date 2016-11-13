$(document).ready(function() {
	$("#heavy").click(function(){
		clearSelection()
		$(this).css("background-color", "#d12030")
		$("#in-heavy").prop("checked", true)
	});

	$("#moderate").click(function(){
		clearSelection()
		$(this).css("background-color", "#d12030")
		$("#in-moderate").prop("checked", true)
	});

	$("#light").click(function(){
		clearSelection()
		$(this).css("background-color", "#d12030")
		$("#in-light").prop("checked", true)
	});

	$("#discover").click(function(){
		//window.location.href = "login.php"
		$("#best").show();
	});

	$("#apply").click(function(){
		window.location.href = "login.php"
	});
});

function clearSelection(){
	$("#light").css("background-color", "#f8f8f8")
	$("#in-light").prop("checked", false)

	$("#moderate").css("background-color", "#f8f8f8")
	$("#in-moderate").prop("checked", false)

	$("#heavy").css("background-color", "#f8f8f8")
	$("#in-heavy").prop("checked", false)
}