<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>Text here....<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>