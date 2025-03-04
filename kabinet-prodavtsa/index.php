<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кабинет продавца");
?>Text here....<?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
Array()
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>