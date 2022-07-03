<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.random",
	".default",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"IBLOCKS" => array(0=>"2",),
		"IBLOCK_TYPE" => "products",
		"PARENT_SECTION" => ""
	)
);?>