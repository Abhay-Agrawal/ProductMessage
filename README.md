# Product Message Magento2 Module
**Add dynamic Message on the product**

# How to install

Add the module in app/code/ folder in magento root like as app/code/Abhay/ProductMsg
and run the command 
```php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento indexer:reindex
php bin/magento cache:clean
php bin/magento cache:flush
```
___
![Screenshot from 2020-08-29 21-10-05](https://user-images.githubusercontent.com/55655451/91640572-379a0700-ea3c-11ea-96e7-bb3c748f8cea.png)

# How to Enable 

* Navigate to STORES->Configuration in Magento Admin panel. Module Enable - Select “Yes” 
* Add Message on the product Image
* Click on ‘Save Config’ to save the configuration 

___
After Save the data in admin configuration message looking like as below image

![pro_msg](https://user-images.githubusercontent.com/55655451/91640588-4bde0400-ea3c-11ea-88eb-815b8fdeb2b5.png)
___



| S.No.| Module Name | Description |
| --- | --- | --- |
| 1.| [Learning Module](https://github.com/Abhay-Agrawal/Abhay_Learning-1.0.0) | To Add text message, Drop Down, Radio Button, Multi Select and Text Area in store configuration |
| 2.| [Custom Module](https://github.com/Abhay-Agrawal/CustomModule)| To Fetch the system configuration value and Product Information using GraphQl |
| 3.| [Custom Shipping](https://github.com/Abhay-Agrawal/Abhay_CustomShipping-1.0.0) | This module is used to add the Custom Shipping in the Website|
| 4.| [LatestNews](https://github.com/Abhay-Agrawal/Abhay_LatestNews-1.0.0) | Add Latest News Related to product offer with content in your website |
| 5.| [Customer Age](https://github.com/Abhay-Agrawal/Abhay_CustomerAge) |To add the age field on the registration page with custom validation |
| 6.| [Product Message](https://github.com/Abhay-Agrawal/ProductMessage) | Add dynamic Message on the product|
| 7.| [GroupProductOptions](https://github.com/Abhay-Agrawal/Abhay_GroupProductOptions-1.0.0) | To show the group product options like as child product available quantity, SKU and custom message |
