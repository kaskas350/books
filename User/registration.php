<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"users:system.auth.form",
	"template_form_register",
	Array(
		"FORGOT_PASSWORD_URL" => "/User",
		"PROFILE_URL" => "/User/profile.php",
		"REGISTER_URL" => "/User/test.php",
		"SHOW_ERRORS" => "N"
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>