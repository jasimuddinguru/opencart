<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;tt-footer-custom&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;tt-row&quot;&gt;
      &lt;div class=&quot;tt-col-left&quot;&gt;
        &lt;div class=&quot;tt-col-item tt-logo-col&quot;&gt;
          &lt;!-- logo --&gt;
          &lt;a class=&quot;tt-logo tt-logo-alignment&quot; href=&quot;#&quot;&gt;
            &lt;img src=&quot;image/catalog/wokiee/custom/logo.png&quot; alt=&quot;&quot; class=&quot;loading&quot; data-was-processed=&quot;true&quot;&gt;
          &lt;/a&gt;
          &lt;!-- /logo --&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tt-col-item&quot;&gt;
          &lt;!-- copyright --&gt;
          &lt;div class=&quot;tt-box-copyright&quot;&gt;
            © Wokiee 2019. All Rights Reserved
          &lt;/div&gt;
          &lt;!-- /copyright --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-col-right&quot;&gt;
        &lt;div class=&quot;tt-col-item&quot;&gt;
          &lt;!-- payment-list --&gt;
          &lt;ul class=&quot;tt-payment-list&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-Stripe&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt; &lt;span class=&quot;icon-paypal-2&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-visa&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-mastercard&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-discover&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path14&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path15&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path16&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-american-express&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- /payment-list --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;tt-footer-custom&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;tt-row&quot;&gt;
      &lt;div class=&quot;tt-col-left&quot;&gt;
        &lt;div class=&quot;tt-col-item tt-logo-col&quot;&gt;
          &lt;!-- logo --&gt;
          &lt;a class=&quot;tt-logo tt-logo-alignment&quot; href=&quot;#&quot;&gt;
            &lt;img src=&quot;image/catalog/wokiee/custom/logo.png&quot; alt=&quot;&quot; class=&quot;loading&quot; data-was-processed=&quot;true&quot;&gt;
          &lt;/a&gt;
          &lt;!-- /logo --&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tt-col-item&quot;&gt;
          &lt;!-- copyright --&gt;
          &lt;div class=&quot;tt-box-copyright&quot;&gt;
            © Wokiee 2019. All Rights Reserved
          &lt;/div&gt;
          &lt;!-- /copyright --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-col-right&quot;&gt;
        &lt;div class=&quot;tt-col-item&quot;&gt;
          &lt;!-- payment-list --&gt;
          &lt;ul class=&quot;tt-payment-list&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-Stripe&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt; &lt;span class=&quot;icon-paypal-2&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-visa&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-mastercard&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-discover&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path12&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path13&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path14&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path15&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path16&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon-american-express&quot;&gt;
                    &lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path3&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path4&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path5&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path6&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path7&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path8&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path9&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path10&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path11&quot;&gt;&lt;/span&gt;
                    &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
          &lt;!-- /payment-list --&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'bottom',
    'status' => '1',
    'sort_order' => '',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;tt-promo-fixed&quot;&gt;
    &lt;button class=&quot;tt-btn-close&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;tt-img&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img  src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-14.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tt-description&quot;&gt;
      &lt;div class=&quot;tt-box-top&quot;&gt;
        &lt;p&gt;
          Someone purchased a
        &lt;/p&gt;
        &lt;p&gt;
          &lt;a href=&quot;#&quot;&gt;
            iPod Classic
          &lt;/a&gt;
        &lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-info&quot;&gt;
        14 Minutes ago from  New York, USA
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;tt-promo-fixed&quot;&gt;
    &lt;button class=&quot;tt-btn-close&quot;&gt;&lt;/button&gt;
    &lt;div class=&quot;tt-img&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img  src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/product/product-14.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tt-description&quot;&gt;
      &lt;div class=&quot;tt-box-top&quot;&gt;
        &lt;p&gt;
          Someone purchased a
        &lt;/p&gt;
        &lt;p&gt;
          &lt;a href=&quot;#&quot;&gt;
            iPod Classic
          &lt;/a&gt;
        &lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-info&quot;&gt;
        14 Minutes ago from  New York, USA
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'header_notice',
    'status' => '1',
    'sort_order' => '',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;tt-collapse open&quot;&gt;
  &lt;h3 class=&quot;tt-collapse-title&quot;&gt;TAGS&lt;/h3&gt;
  &lt;div class=&quot;tt-collapse-content&quot; style=&quot;&quot;&gt;
    &lt;ul class=&quot;tt-list-inline&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dresses&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shirts &amp;amp; Tops&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Polo Shirts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sweaters&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Blazers&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Vests&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jackets&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Outerwear&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Activewear&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Pants&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jumpsuits&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shorts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jeans&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Skirts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Swimwear&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;tt-collapse open&quot;&gt;
  &lt;h3 class=&quot;tt-collapse-title&quot;&gt;TAGS&lt;/h3&gt;
  &lt;div class=&quot;tt-collapse-content&quot; style=&quot;&quot;&gt;
    &lt;ul class=&quot;tt-list-inline&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Dresses&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shirts &amp;amp; Tops&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Polo Shirts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sweaters&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Blazers&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Vests&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jackets&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Outerwear&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Activewear&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Pants&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jumpsuits&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Shorts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jeans&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Skirts&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Swimwear&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '10',
  ),
  4 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;tt-content-aside&quot;&gt;
  &lt;a href=&quot;listing-left-column.html&quot; class=&quot;tt-promo-03&quot;&gt;
    &lt;img src=&quot;image/catalog/wokiee/custom/listing_promo_img_07.jpg&quot; alt=&quot;&quot; class=&quot;loading&quot; data-was-processed=&quot;true&quot;&gt;
  &lt;/a&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;tt-content-aside&quot;&gt;
  &lt;a href=&quot;listing-left-column.html&quot; class=&quot;tt-promo-03&quot;&gt;
    &lt;img src=&quot;image/catalog/wokiee/custom/listing_promo_img_07.jpg&quot; alt=&quot;&quot; class=&quot;loading&quot; data-was-processed=&quot;true&quot;&gt;
  &lt;/a&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '11',
  ),
  5 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;header&gt;
  &lt;div class=&quot;tt-top-panel&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;tt-row&quot;&gt;
        &lt;div class=&quot;tt-description&quot;&gt;
          20% STUDENT DISCOUNT PLUS FREE NEXT DAY DELIVEY, EXCLUDES SALE. &lt;a href=&quot;#&quot;&gt;DETAILS&lt;/a&gt;
        &lt;/div&gt;
        &lt;button class=&quot;tt-btn-close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/header&gt;',
      $language_id => '&lt;header&gt;
  &lt;div class=&quot;tt-top-panel&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;tt-row&quot;&gt;
        &lt;div class=&quot;tt-description&quot;&gt;
          20% STUDENT DISCOUNT PLUS FREE NEXT DAY DELIVEY, EXCLUDES SALE. &lt;a href=&quot;#&quot;&gt;DETAILS&lt;/a&gt;
        &lt;/div&gt;
        &lt;button class=&quot;tt-btn-close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/header&gt;',
    ),
    'layout_id' => '1',
    'position' => 'header_notice',
    'status' => '1',
    'sort_order' => '',
  ),
  6 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '  &lt;div class=&quot;container-indent&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;tt-block-title&quot;&gt;
        &lt;h1 class=&quot;tt-title&quot;&gt;ABOUT OUR STORE!&lt;/h1&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-text-box01&quot;&gt;
        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
      $language_id => ' &lt;div class=&quot;container-indent&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;tt-block-title&quot;&gt;
        &lt;h1 class=&quot;tt-title&quot;&gt;ABOUT OUR STORE!&lt;/h1&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tt-text-box01&quot;&gt;
        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '1',
  ),
  7 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;container-indent nomargin&quot;&gt;
  &lt;div class=&quot;container-fluid-custom&quot;&gt;
    &lt;div class=&quot;row tt-layout-promo-box&quot;&gt;
      &lt;div class=&quot;col-sm-12 col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index09-promo-img-01.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;WOMEN&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-sm-12 col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index09-promo-img-02.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;MENS&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index09-promo-img-03.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;SHOES&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;container-indent nomargin&quot;&gt;
  &lt;div class=&quot;container-fluid-custom&quot;&gt;
    &lt;div class=&quot;row tt-layout-promo-box&quot;&gt;
      &lt;div class=&quot;col-sm-12 col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index09-promo-img-01.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;WOMEN&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-sm-12 col-md-6&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index09-promo-img-02.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;MENS&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
        &lt;a href=&quot;#&quot; class=&quot;tt-promo-box tt-one-child&quot;&gt;
          &lt;img src=&quot;catalog/view/theme/wokiee/img/loader.svg&quot; data-src=&quot;image/catalog/wokiee/promo/index09-promo-img-03.jpg&quot; alt=&quot;&quot;&gt;
          &lt;div class=&quot;tt-description&quot;&gt;
            &lt;div class=&quot;tt-description-wrapper&quot;&gt;
              &lt;div class=&quot;tt-background&quot;&gt;&lt;/div&gt;
              &lt;div class=&quot;tt-title-small&quot;&gt;SHOES&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '0',
  ),
  8 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '  &lt;div class=&quot;container-indent&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;tt-slider-fullwidth arrow-location-center-02 slick-animated-show-js&quot;&gt;
        &lt;div class=&quot;item&quot;&gt;
          &lt;a href=&quot;blog-single-post.html&quot; class=&quot;tt-content-info&quot;&gt;
            &lt;h2 class=&quot;tt-title&quot;&gt;WHAT THEY’RE SAYING&lt;/h2&gt;
            &lt;p&gt;
              Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
            &lt;/p&gt;
            &lt;div class=&quot;tt-subscription&quot;&gt;
              &lt;div class=&quot;tt-text-large&quot;&gt;
                ADRIAN PARKER
              &lt;/div&gt;
              &lt;div class=&quot;tt-text-small&quot;&gt;Developer&lt;/div&gt;
            &lt;/div&gt;
          &lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;item&quot;&gt;
          &lt;a href=&quot;blog-single-post.html&quot; class=&quot;tt-content-info&quot;&gt;
            &lt;h2 class=&quot;tt-title&quot;&gt;WHAT THEY’RE SAYING&lt;/h2&gt;
            &lt;p&gt;
              Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
            &lt;/p&gt;
            &lt;div class=&quot;tt-subscription&quot;&gt;
              &lt;div class=&quot;tt-text-lage&quot;&gt;
                ADRIAN PARKER
              &lt;/div&gt;
              &lt;div class=&quot;tt-text-small&quot;&gt;Developer&lt;/div&gt;
            &lt;/div&gt;
          &lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
      $language_id => ' &lt;div class=&quot;container-indent&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
      &lt;div class=&quot;tt-slider-fullwidth arrow-location-center-02 slick-animated-show-js&quot;&gt;
        &lt;div class=&quot;item&quot;&gt;
          &lt;a href=&quot;blog-single-post.html&quot; class=&quot;tt-content-info&quot;&gt;
            &lt;h2 class=&quot;tt-title&quot;&gt;WHAT THEY’RE SAYING&lt;/h2&gt;
            &lt;p&gt;
              Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
            &lt;/p&gt;
            &lt;div class=&quot;tt-subscription&quot;&gt;
              &lt;div class=&quot;tt-text-large&quot;&gt;
                ADRIAN PARKER
              &lt;/div&gt;
              &lt;div class=&quot;tt-text-small&quot;&gt;Developer&lt;/div&gt;
            &lt;/div&gt;
          &lt;/a&gt;
        &lt;/div&gt;
        &lt;div class=&quot;item&quot;&gt;
          &lt;a href=&quot;blog-single-post.html&quot; class=&quot;tt-content-info&quot;&gt;
            &lt;h2 class=&quot;tt-title&quot;&gt;WHAT THEY’RE SAYING&lt;/h2&gt;
            &lt;p&gt;
              Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
            &lt;/p&gt;
            &lt;div class=&quot;tt-subscription&quot;&gt;
              &lt;div class=&quot;tt-text-lage&quot;&gt;
                ADRIAN PARKER
              &lt;/div&gt;
              &lt;div class=&quot;tt-text-small&quot;&gt;Developer&lt;/div&gt;
            &lt;/div&gt;
          &lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '2',
  ),
  9 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;container-indent&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row tt-carousel-brands arrow-location-center-02 tt-arrow-hover slick-animated-show-js&quot;&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-01.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-05.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-06.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-02.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-07.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-04.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-03.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-08.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;container-indent&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row tt-carousel-brands arrow-location-center-02 tt-arrow-hover slick-animated-show-js&quot;&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-01.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-05.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-06.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-02.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-07.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-04.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-03.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/wokiee/custom/brand-img-08.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '3',
  ),
); 

$output2 = array();
$output2["custom_module_module"] = $this->config->get('custom_module_module');

if(!is_array($output["custom_module_module"])) $output["custom_module_module"] = array();
if(!is_array($output2["custom_module_module"])) $output2["custom_module_module"] = array();
$output3 = array();
$output3["custom_module_module"] = array_merge($output["custom_module_module"], $output2["custom_module_module"]);

$this->model_setting_setting->editSetting( "custom_module", $output3 );	

?>