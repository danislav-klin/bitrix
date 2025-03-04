<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кабинет покупателя");
?>Text here....<br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
Array()
);?><br>
<?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form",
	".default",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"PAGE" => "#SITE_DIR#about/subscr_edit.php",
		"SHOW_HIDDEN" => "Y",
		"USE_PERSONALIZATION" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>