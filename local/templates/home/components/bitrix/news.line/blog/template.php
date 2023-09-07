<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>

<div class="row">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <? $date = new DateTime($arItem['ACTIVE_FROM']);
        $month = $date->format('M');
        $day = $date->format('jS');
        $year = $date->format('Y');
        $formattedDate = $month . ' ' . $day . ', ' . $year;
        ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="col-md-6 col-lg-4 mb-5" data-aos="fade-up"
             data-aos-delay="100">
            <a href="#"><img alt="Image" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="img-fluid"></a>
            <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase"><?= $formattedDate ?></span>
                <h2 class="h5 text-black mb-3"><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?= $arItem['NAME'] ?></a></h2>
                <p>
                    <?= $arItem['PREVIEW_TEXT'] ?>
                </p>
            </div>
        </div>
    <? endforeach; ?>
</div>

