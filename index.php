<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><br>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
Array()
);?>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>