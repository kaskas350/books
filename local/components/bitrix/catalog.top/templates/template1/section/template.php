<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;


$this->addExternalCss('/bitrix/css/main/bootstrap.css');

global $APPLICATION;
?>

<div class="catalog-top bx-<?=$arParams['TEMPLATE_THEME']?>" data-entity="<?=$containerName?>">

    <div class="row <?=$rowData['CLASS']?>" data-entity="items-row">


						<div class="col-xs-12 product-item-small-card">
							<div class="row">
								<?
								foreach ($rowItems as $item)
								{
									?>
									<div class="col-sm-4 product-item-big-card">
										<div class="row">
											<div class="col-md-12">


												<?
												$APPLICATION->IncludeComponent(
													'users:catalog.item',
													'template12',
													array(
                                                        "CACHE_TYPE" => "N",
													)
												);

                                                ?>

											</div>
										</div>
									</div>
									<?
								}
								?>
							</div>
						</div>



			</div>

</div>
