<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дилерам | Dantone");
?>
<section id="content">
    
        <div class="promo-about" style='background: url("<?=SITE_TEMPLATE_PATH?>/images/ART-6162.jpg") 50% 50% no-repeat; background-size: cover;'></div>

    <div class="container">
        <article class="base-article">
            <h1 class="h2">Дилерам</h1>
            <div class="divider-horisontal"></div>
            <p class="lead">Мы занимаемся изготовлением и производством  мягкой и корпусной мебели под брендом «Dantone Home»</p>
            <p>Компания «Dantone Home» организована &nbsp;в 2015 г. Мы занимаемся изготовлением и производством&nbsp; мягкой и корпусной мебели под брендом «Dantone Home», а также продажей мебели, аксессуаров и&nbsp; света из Китая и Индонезии под нашим брендом.</p>
<p>Мы предлагаем сотрудничество на условиях дилерства в регионах Российской Федерации в следующем формате:&nbsp;<strong>отдельный салон, площадью от 150 до 200 кв.м., оформленных в&nbsp; соответствии с требованиями «Dantone &nbsp;Home»</strong>.&nbsp;</p>
<p>Салон сети «Dantone Home» может быть открыт в городе с населением не менее 500 000 жителей. Территорией действия дилерского соглашения признается город в его административных границах, а&nbsp; также область по отдельному соглашению.&nbsp;</p>
<p>При заключении дилерского соглашения Дилер получает право на использование исключительных прав Дилера в следующем объеме:</p>
<ul>
<li>открытие Салона под Товарным знаком «Dantone Home» по адресу, определенному&nbsp; соглашением;</li>
<li>эксклюзивная торговля фирменным товаром в пределах Территории; &nbsp;</li>
<li>размещение информации о Салоне и его контактных данных на сайте www.dantonehome.ru;</li>
</ul>
<p>Оказываемые услуги на &nbsp;начальном этапе деятельности:</p>
<ul>
<li>Составление индивидуального дизайн-проекта Салона;</li>
<li>Формирование индивидуального Ассортимента для Салона на основе Обязательного Ассортиментного перечня товаров;</li>
<li>Предоставление обучающей информации для изучения сотрудниками Салона;</li>
<li>Первоначальное обучение двух сотрудников Салона в форме стажировки во флагманском салоне «Dantone Home» в г. Москва (оплата проживания и проезда происходит за счет дилера);</li>
<li>Передача первоначального пакета рекламных материалов, образцов тканей, паспортов качества «Dantone Home».</li>
</ul>
<p>В процессе повседневной деятельности:</p>
<ul>
<li>Информирование о новых поступлениях;</li>
<li>Рекламная поддержка (упоминание Салона Дилера во время всех проводимых рекламных&nbsp; мероприятий сети «Dantone Home»);</li>
<li>Обеспечение бесперебойных поставок Фирменного товара;</li>
<li>Поддержание в силе исключительных прав, переданных Дилеру;</li>
<li>Оказание консультационной поддержки и помощи в обучении вновь нанятых &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>
</ul>
<h1>&nbsp;</h1>
<h2 style="text-align: center;">Поставщикам&nbsp;</h2>
<div class="divider-horisontal" style="box-sizing: border-box; width: 40px; height: 1px; margin: 0px auto 22px; color: #333333; font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 14px; line-height: 26px; background: #516c9b;">&nbsp;</div>
<p>Компания Dantone Home открыта новым сотрудничествам!&nbsp; <br>Если Вы производитель предметов мебели и аксессуаров в американском стиле, если Вы производите или поставляете мебельные ткани или фурнитуру, а может быть, Вы — дизайнер мебели и хотите предложить подходящие нам по стилю модели, пишите на почту: info@dantonehome.ru &nbsp;и мы обязательно с Вами свяжемся!</p>        </article>  

 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.viewed.products", 
	"dantone_viewed", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "4",
		"SHOW_FROM_SECTION" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_NAME" => "Y",
		"SHOW_IMAGE" => "Y",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"PAGE_ELEMENT_COUNT" => "5",
		"LINE_ELEMENT_COUNT" => "3",
		"TEMPLATE_THEME" => "blue",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SHOW_OLD_PRICE" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"SHOW_PRODUCTS_5" => "Y",
		"DEPTH" => "2",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPERTY_CODE_2" => array(
			0 => "MANUFACTURER,MATERIAL,",
		),
		"CART_PROPERTIES_2" => array(
			0 => ",",
		),
		"ADDITIONAL_PICT_PROP_2" => "MORE_PHOTO",
		"LABEL_PROP_2" => "NEWPRODUCT",
		"PROPERTY_CODE_3" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
			3 => "",
		),
		"CART_PROPERTIES_3" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
			3 => "",
		),
		"ADDITIONAL_PICT_PROP_3" => "MORE_PHOTO",
		"OFFER_TREE_PROPS_3" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
		),
		"COMPONENT_TEMPLATE" => "dantone_viewed",
		"SHOW_PRODUCTS_4" => "Y",
		"PROPERTY_CODE_4" => array(
			0 => "META_DESCRIPTION",
			1 => "ARTIKUL",
			2 => "TITLE",
			3 => "MORE_PHOTO",
			4 => "KEYWORDS",
			5 => "BESTSELLER",
			6 => "MAXIMUM_PRICE",
			7 => "MINIMUM_PRICE",
			8 => "NEWPRODUCT",
			9 => "PREORDER",
			10 => "DISCOUNT",
			11 => "SPECIAL_OFFER",
			12 => "FEATURES",
			13 => "PRICE_FROM",
			14 => "",
		),
		"CART_PROPERTIES_4" => array(
			0 => "",
			1 => "DISCOUNT",
			2 => "SPECIAL_OFFER",
			3 => "PRICE_FROM",
			4 => "",
		),
		"ADDITIONAL_PICT_PROP_4" => "MORE_PHOTO",
		"LABEL_PROP_4" => "-",
		"PROPERTY_CODE_5" => array(
			0 => "ARTIKUL",
			1 => "MORE_PHOTO",
			2 => "CML2_LINK",
			3 => "",
		),
		"CART_PROPERTIES_5" => array(
			0 => "",
			1 => "",
		),
		"ADDITIONAL_PICT_PROP_5" => "MORE_PHOTO",
		"OFFER_TREE_PROPS_5" => array(
		),
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_ELEMENT_ID" => "",
		"SECTION_ELEMENT_CODE" => "",
		"SHOW_PRODUCTS_2" => "N"
	),
	false
);?>

  </div> <!-- /end .container -->

</section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>