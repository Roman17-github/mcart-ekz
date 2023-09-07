<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("About Us");
?>

    <div class="site-section border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="/images/about.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="site-section-title mb-3">
                        <h2>Our Company</h2>
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/about.php"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>