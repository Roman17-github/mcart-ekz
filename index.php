<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("HomeSpace — Colorlib Website Template");
$arFilter = ['PROPERTY_PRIORITY' => 5];
$arFilterLine = ['PROPERTY_PRIORITY' => ''];
?>
<?
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "slider",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "arFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "ads",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "ADDRESS",
            1 => "PRICE",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "slider",
        "TEMPLATE_THEME" => "blue",
        "MEDIA_PROPERTY" => "",
        "SLIDER_PROPERTY" => "",
        "SEARCH_PAGE" => "/search/",
        "USE_RATING" => "N",
        "USE_SHARE" => "N"
    ),
    false
); ?>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <div class="feature d-flex align-items-start">
                        <span class="icon mr-3 flaticon-house"></span>
                        <div class="text">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/main/wide-rage.php"
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <div class="feature d-flex align-items-start">
                        <span class="icon mr-3 flaticon-rent"></span>
                        <div class="text">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/main/rent-sale.php"
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                    <div class="feature d-flex align-items-start">
                        <span class="icon mr-3 flaticon-location"></span>
                        <div class="text">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/main/location.php"
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section site-section-sm bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="site-section-title">
                        <h2>New Properties for You</h2>
                    </div>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"ads", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "PROPERTY_PRICE",
			3 => "PROPERTY_AREA",
			4 => "PROPERTY_BEDS",
			5 => "PROPERTY_GARAGE_COUNT",
			6 => "PROPERTY_BATHROOMS",
			7 => "PROPERTY_BEDS",
			8 => "PROPERTY_ADDRESS",
			9 => "PROPERTY_PRIORITY",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "ads",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arFilter",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "ads"
	),
	false
); ?>

        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center mb-5">
                    <div class="site-section-title">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.line",
                "services",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "300",
                    "CACHE_TYPE" => "A",
                    "DETAIL_URL" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "PROPERTY_ICON",
                        2 => "",
                    ),
                    "IBLOCKS" => array(
                        0 => "6",
                    ),
                    "IBLOCK_TYPE" => "services",
                    "NEWS_COUNT" => "6",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "COMPONENT_TEMPLATE" => "services"
                ),
                false
            ); ?>
        </div>
    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"blog", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"IBLOCKS" => array(
			0 => "7",
		),
		"IBLOCK_TYPE" => "blog",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "blog"
	),
	false
); ?>

        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>