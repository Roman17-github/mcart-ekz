<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<footer class="site-footer"><!--footer-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/footer/about.php"
                        )
                    ); ?>
                </div>


            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4"><?= GetMessage('NAVIGATIONS') ?></h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "menu-footer",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "bottom",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "menu-footer"
                            ),
                            false
                        ); ?>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu-footer", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom2",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu-footer"
	),
	false
); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer/follow.php"
                    )
                ); ?>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer/copyright.php"
                    )
                ); ?>
            </div>
        </div>
    </div>
</footer>


</body>

</html>