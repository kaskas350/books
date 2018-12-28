<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>






  <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12" style=" width: auto;">
         <div class="product">
             <div class="product__inner">
                 <div class="pro__thumb">
                     <a href="#">
                         <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="product images">
                     </a>
                 </div>
                 <div class="product__hover__info">
                     <ul class="product__action">


                        <a href="<?=$item['DETAIL_PAGE_URL']?>">О книге</a>

                     </ul>
                 </div>
             </div>
             <div class="product__details">
                 <h2><?=$productTitle?></h2>
             </div>
         </div>
     </div>
