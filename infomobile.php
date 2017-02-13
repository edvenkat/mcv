ng -if diective parent : http://stackoverflow.com/questions/18342917/angularjs-ng-model-doesnt-work-inside-ng-if

http://www.tutorialspoint.com/html5/html5_web_sql.htm
http://sqlfiddle.com/#!7/330b5/1



select tbl_order.user_service_id,tbl_service.service_name,tbl_servicefrm.sub_service_name,lpad(tbl_servicefrm.points,2,0) as points,tbl_servicefrm.id from tbl_service as tbl_service inner join tbl_servicefrm as tbl_servicefrm on tbl_service.id=tbl_servicefrm.service_id left outer join tbl_order as tbl_order on tbl_servicefrm.id=tbl_order.user_service_id where tbl_order.user_order_id='0fd905' and tbl_service.is_deleted=0 and tbl_service.is_active=0

*************************************************************************************************************************************************************************
"BESTBUY" Information
---------------------
https://developer.bestbuy.com/documentation/products-api#documentation/products-api-pricing-and-sales-ranking


Category :
--------
http://api.remix.bestbuy.com/v1/categories?format=json&apiKey=u7yekz8vqwkduc9aawnjb75g&show=id,name

sub category :
-------------
http://api.remix.bestbuy.com/v1/categories(subCategories.id=abcat0101000)?show=subCategories&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g

Sub category Product :
--------------------
http://api.remix.bestbuy.com/v1/products(categoryPath.id=abcat0100000)?show=name,sku,description,shortDescription,longDescription,height,width,depth,weight&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g


specific product information and related product :
---------------------------------------------------
http://api.remix.bestbuy.com/v1/products(sku=2470519)?show=sku,name,description,shortDescription,longDescription,height,width,depth,weight,includedItemList.includedItem,accessories.sku,relatedProducts.sku&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g


http://api.remix.bestbuy.com/v1/products(name=classic*)?format=json&show=show=image,regularPrice,salePrice,name,sku,description,shortDescription,longDescription,height,width,depth,weight&apiKey=u7yekz8vqwkduc9aawnjb75g

****************************************************************************************************************************************************************************


maps
-----
https://maps.google.co.in/?q=Egmor Erode
http://maps.google.com/maps?saddr=Egmore&daddr=Erode+to:Erode

GEt direction :
https://maps.google.com/maps?saddr=Egmore&daddr=gobichettipalaiyam+to:gobichettipalaiyam
http://gearside.com/easily-link-to-locations-and-directions-using-the-new-google-maps/



http://api.remix.bestbuy.com/v1/categories?page=2&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g&show=id,name

http://api.remix.bestbuy.com/v1/categories(id=abcat0100000)?show=subCategories&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g


http://api.remix.bestbuy.com/v1/categories(subCategories.id=abcat0101000)?show=subCategories&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g

http://api.remix.bestbuy.com/v1/products(sku=6875503)?show=salePrice,sku,name,description,shortDescription,longDescription,height,width,depth,weight,includedItemList.includedItem,accessories.sku,relatedProducts.sku&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g

http://api.remix.bestbuy.com/v1/products(sku=2470519)?show=sku,name,description,shortDescription,longDescription,height,width,depth,weight,includedItemList.includedItem,accessories.sku,relatedProducts.sku&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g

http://api.remix.bestbuy.com/v1/products(name=iphone*)?show=name,sku&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g

http://api.remix.bestbuy.com/v1/products(categoryPath.id=abcat0100000)?page=2&show=regularPrice,salePrice,name,sku,description,shortDescription,longDescription,height,width,depth,weight&format=json&apiKey=u7yekz8vqwkduc9aawnjb75g


For button loading js :
-----------------------
http://msurguy.github.io/ladda-bootstrap/


https://github.com/don/ionic-nfc-reader

blog :
-----
http://www.rishabhsoft.com/blog/top-5-nfc-payment-apps



NFC information :
------------------
information :
http://don.github.io/slides/2014-04-07-apachecon-nfc/#/1

For Android :
https://github.com/chariotsolutions/phonegap-nfc



For plugin :
https://github.com/chariotsolutions/phonegap-nfc/issues/139





Offer Zone :
============
Search Result Page:
 - show more button

for password :
=============
ng-pattern="/^.*(?=.{6,20}$)(?=.*[a-z])(?=.*[\d\W]).*$/"
