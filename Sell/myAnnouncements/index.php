<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои объявления");
?><?$APPLICATION->IncludeComponent(
	"bitrix:landing.filter",
	"",
	Array(
		"BUTTONS" => "",
		"DRAFT_MODE" => "N",
		"FILTER_TYPE" => "Создатель объявлений",
		"FOLDER_SITE_ID" => "",
		"SETTING_LINK" => ""
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"",
Array()
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>