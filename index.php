<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("HomeSpace — Colorlib Website Template");
$arFilter = ['PROPERTY_PRIORITY' => 5];
?>
<?
$APPLICATION->IncludeComponent("bitrix:news.list", "ads", array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
    "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",    // Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
    "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE" => "A",    // Тип кеширования
    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
    "DISPLAY_DATE" => "Y",    // Выводить дату элемента
    "DISPLAY_NAME" => "Y",    // Выводить название элемента
    "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
    "FIELD_CODE" => array(    // Поля
        0 => "",
        1 => "",
    ),
    "FILTER_NAME" => "arFilter",    // Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "5",    // Код информационного блока
    "IBLOCK_TYPE" => "ads",    // Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT" => "20",    // Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
    "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
    "PAGER_TITLE" => "Новости",    // Название категорий
    "PARENT_SECTION" => "",    // ID раздела
    "PARENT_SECTION_CODE" => "",    // Код раздела
    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
    "PROPERTY_CODE" => array(    // Свойства
        0 => "",
        1 => "",
    ),
    "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
    "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",    // Устанавливать статус 404
    "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
    "SHOW_404" => "N",    // Показ специальной страницы
    "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
    "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
    "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
    "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
),
    false
); ?>
    <div class="slide-one-item home-slider owl-carousel">
        <div class="site-blocks-cover" style="background-image: url(/images/hero_bg_1.jpg);" data-aos="fade"
             data-stellar-background-ratio="0.5">
            <div class="text">
                <h2>853 S Lucerne Blvd</h2>
                <p class="location">
                    <span class="property-icon icon-room"></span> Los Angeles, CA 90005
                </p>
                <p class="mb-2">
                    <strong>$2,250,500</strong>
                </p>
                <p class="mb-0">
                    <a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a>
                </p>
            </div>
        </div>
        <div class="site-blocks-cover" style="background-image: url(/images/hero_bg_3.jpg);" data-aos="fade"
             data-stellar-background-ratio="0.5">
            <div class="text">
                <h2>625 S. Berendo St</h2>
                <p class="location">
                    <span class="property-icon icon-room"></span>607 Los Angeles, CA 90005
                </p>
                <p class="mb-2">
                    <strong>$2,250,500</strong>
                </p>
                <p class="mb-0">
                    <a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a>
                </p>
            </div>
        </div>
    </div>
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
                "",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "300",
                    "CACHE_TYPE" => "A",
                    "DETAIL_URL" => "",
                    "FIELD_CODE" => array("", ""),
                    "IBLOCKS" => array("5"),
                    "IBLOCK_TYPE" => "ads",
                    "NEWS_COUNT" => "9",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC"
                )
            ); ?>
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="property-details.html" class="prop-entry d-block">
                        <figure><img alt="Image" src="images/img_1.jpg" class="img-fluid"></figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">$1,930,000</span>
                                <h3 class="title">853 S Lucerne Blvd</h3>
                                <p class="location">
                                    Los Angeles, CA 90005
                                </p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        Area: <strong>240m<sup>2</sup></strong>
                                    </div>
                                    <div class="col">
                                        Beds: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Baths: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Garages: <strong>1</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="property-details.html" class="prop-entry d-block">
                        <figure><img alt="Image" src="images/img_2.jpg" class="img-fluid"></figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">$2,438,000</span>
                                <h3 class="title">853 S Lucerne Blvd</h3>
                                <p class="location">
                                    Los Angeles, CA 90005
                                </p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        Area: <strong>240m<sup>2</sup></strong>
                                    </div>
                                    <div class="col">
                                        Beds: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Baths: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Garages: <strong>1</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="property-details.html" class="prop-entry d-block">
                        <figure><img alt="Image" src="images/img_3.jpg" class="img-fluid"></figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">$5,320,000</span>
                                <h3 class="title">853 S Lucerne Blvd</h3>
                                <p class="location">
                                    Los Angeles, CA 90005
                                </p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        Area: <strong>240m<sup>2</sup></strong>
                                    </div>
                                    <div class="col">
                                        Beds: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Baths: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Garages: <strong>1</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="property-details.html" class="prop-entry d-block">
                        <figure><img alt="Image" src="images/img_4.jpg" class="img-fluid"></figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">$2,350,000</span>
                                <h3 class="title">853 S Lucerne Blvd</h3>
                                <p class="location">
                                    Los Angeles, CA 90005
                                </p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        Area: <strong>240m<sup>2</sup></strong>
                                    </div>
                                    <div class="col">
                                        Beds: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Baths: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Garages: <strong>1</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="property-details.html" class="prop-entry d-block">
                        <figure><img alt="Image" src="images/img_5.jpg" class="img-fluid"></figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">$1,550,000</span>
                                <h3 class="title">853 S Lucerne Blvd</h3>
                                <p class="location">
                                    Los Angeles, CA 90005
                                </p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        Area: <strong>240m<sup>2</sup></strong>
                                    </div>
                                    <div class="col">
                                        Beds: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Baths: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Garages: <strong>1</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="property-details.html" class="prop-entry d-block">
                        <figure><img alt="Image" src="images/img_6.jpg" class="img-fluid"></figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">$4,291,000</span>
                                <h3 class="title">853 S Lucerne Blvd</h3>
                                <p class="location">
                                    Los Angeles, CA 90005
                                </p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        Area: <strong>240m<sup>2</sup></strong>
                                    </div>
                                    <div class="col">
                                        Beds: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Baths: <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        Garages: <strong>1</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
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
                ".default",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "300",
                    "CACHE_TYPE" => "A",
                    "DETAIL_URL" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
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
                    "COMPONENT_TEMPLATE" => ".default"
                ),
                false
            ); ?>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
                        <h2 class="service-heading">Research Subburbs</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
                        <h2 class="service-heading">Sold Houses</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
                        <h2 class="service-heading">Security Priority</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
                        <h2 class="service-heading">Research Subburbs</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
                        <h2 class="service-heading">Sold Houses</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
                        <h2 class="service-heading">Security Priority</h2>
                        <p>
                            <span class="read-more">Learn More</span>
                        </p>
                    </a>
                </div>
            </div>
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
	".default",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
); ?>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="#"><img alt="Image" src="images/img_4.jpg" class="img-fluid"></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
                        <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem
                            veniam quae sunt.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <a href="#"><img alt="Image" src="images/img_2.jpg" class="img-fluid"></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
                        <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem
                            veniam quae sunt.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <a href="#"><img alt="Image" src="images/img_3.jpg" class="img-fluid"></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
                        <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem
                            veniam quae sunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>