# DwollaHub_Module2.0
--------------
## DWOLLA HUB Payment Module for OpenCart
 **Version**: 2.0 (English)<br>
 **Date**: July 2, 2012<br>
 **Tested on**: OpenCart 1.5.3.1


 **Author**: Jammes Luckett<br>
 **Author URL**: http://www.jammesluckett.com<br>
 **Based upon**: Check/Money Order Module, by OpenCart
<br>
<br>
<br>
<br>


## LICENSING AND SUPPORT
This module was released for free, to the OpenCart Community. If you find it helpful and wish to make a donation, you may do so via:
<br>
- my Website (above)<br>
- my Amazon Wish List (name: Jammes Luckett, Los Angeles)<br>
- my Dwolla Hub: https://www.dwolla.com/hub/jammesluckett<br>

I'm not a programmer by trade, so I cannot offer ongoing support for this module. I believe, with this included help file, you'll find it easy to use. You’ll also be able to modify the code, if needed, to keep up with future OpenCart releases.

This extension is released as free software under a GNU GPL – General Public License. You may use, copy, modify, or distribute the software as long as any derivative versions: 

  (a) no implied or claimed ownership/credit of pre-existing materials are made 

and 

  (b) the module is released in the same non-commercial spirit, with respect to the open source community. 

It is distributed in the hopes that it will be useful, without any warranty, whatsoever. See the GNU GPL for more details: http://www.gnu.org/licenses/
<br>
<br>
<br>
<br>

## REQUIREMENTS
1. A full installation of OpenCart eCommerce Shopping Cart, version 1.5.3.1 or higher.

2. The user must have a verified Dwolla account enabled, for use of this module.
<br>
<br>
<br>
<br>


## ABOUT THIS MODULE
The Dwolla Hub Payment Module enables you to accept payments processed by Dwolla, which offers lower rates than many other payment gateways. It is based upon the standard Check/Money Order module that comes with OpenCart and works similarly. Make minimal changes to the language file (if desired), install, configure, and you're done.

These are new files - they do not overwrite anything in your existing installation, require no
changes to the core code, and will not be overwritten upon upgrade of your OpenCart installation.

This module works akin to an 'offline" payment module, as commonly used for check or money order options. It does not redirect the customer to Dwolla to pay. 

Instead, after the customer completes payment, the store owner must manually process the order after verification of payment receipt. The customer can either pay after receiving the emailed invoice or while on the checkout page. With either option, the customer will see a link that will open to your Dwolla Hub page.

This version has only been coded in the English language. If you wish to translate for a different language, see the instructions for the Language file, and be sure to save the document in the appropriate language folder.
<br>
<br>
<br>
<br>


## UPGRADING
Upgrade instructions only apply if you previously installed an earlier version of this extension, otherwise, you may proceed to the Installation section. 

If you are uncertain, please look at the Changelog, to see what files have been changed. If needed, compare them to your current installation, to make sure you wonʼt overwrite any previous custom changes you have made.

Unless otherwise noted, the language files are all that you will have to change. After saving any custom changes needed, you may proceed to re-upload all changed and new files; following the tips in the Installation section.
<br>
<br>
<br>
<br>



## INSTALLATION
Unzip the module zip file. You will see two folders: admin and catalog. The contents of these
folders represent the file structure of your OpenCart installation, and the file paths that these files should be uploaded to. 

The "dwollahub" files will need to be saved to your OpenCart installation, within the corresponding folders on your server. 

First, you'll need to make a couple of changes to the language file, using a plain text editor. These changes will allow you to customize the text that your customers will see within the cart, if so desired.

Two changes you will need to make:

1. The language file

2. Your template folder name (if not using the default)
<br>
<br>




###### 1. LANGUAGE FILE
###### (located at: **DwollaModule/catalog/english/payment/dwollahub.php**)
Please note the following tags and their functions. Change the text, as needed:

- **text_title**: The name of the module, as you would like it to display in your Administration Panel, as well as in the Shopping Cart.

- **text_in_title**: The header block within the Checkout window, which will announce the instructions for paying with this method.

- **text_checkout**: A section of text that merely informs the customer of the following process, should they not make an immediate payment: after the checkout button is clicked, the payment URL will be emailed to them with brief instructions for quick and easy completion.

- **text_address**: The header that displays your Dwolla Hub URL.

- **text_payment**: The actual instructions for completing payment using the Hub. If you desire, you may also instruct the customer to include information in the Details box, to help you match the payment to the order. 

This can be an email address and/or order number. You may also instruct the customer to pay within x amount of days to avoid order cancellation. Whatever you desire.
<br>
<br>




###### 2. TEMPLATE NAME
If the theme you are using for your store is not the OpenCart default theme, you will need to rename a folder, to reflect your template name. This folder is located at:

**DwollaModule/catalog/view/theme/YOURTHEME/template/payment**

Replace **YOURTHEME** with the correct template folder name.
<br>
<br>




###### 3. UPLOAD
Once you have made all of your changes, save them and upload each of the dwollahub files to their corresponding folders on your server. 

If you are certain that your FTP client supports it, you can simply drag the entire admin and catalog folders on to the FTP window. It will then place the new files in their rightful location, without overwriting existing parent folders. 

If you are unsure whether the FTP client can support that feature, it is best to drag the folders to the corresponding location, one by one.
<br>
<br>





###### 4. CONFIGURATION
1. In your OpenCart Admin, go to **Extensions -> Payments**. You will see Dwolla (Secure Hub) in the list, alphabetically.

2. Click **‘Install’**

3. Click **‘Edit’**

4. Here, you can change the settings of this payment module, just as you would with Checks or Money Orders. Instead of Payee name, you will need to enter the full secure link to your Dwolla hub. 

NOTE: Your secure Dwolla hub link needs to be full, such as **https://www.dwolla.com/hub/myaccount**. 

This is necessary because the link will appear as a clickable item, in both checkout and the customer email invoice. Please make sure that the link begins with **https://** so that the customer can be certain that it's secure.

You may also make other changes, including the minimum amount the order must reach before Dwolla can be offered as a payment method, and the default order status of any order completed with Dwolla (i.e. Processing or Pending). It will be up to you to change the status, once payment is received.
<br>
<br>
<br>
<br>



###### 5. CONGRATULATIONS
Hooray! You're the proud owner of a Dwolla Hub payment link in your OpenCart. 

If you conduct a test, the payment module should show up as a choice within the Checkout screen, on all applicable order types. It will also be visible in the emailed invoice / payment confirmation.
<br>
<br>
<br>
<br>



## UNINSTALL
You can disable the module, the way you would disable any other. In your Admin, go to
Extensions - > Payments. 

Edit the module, select “Disable” and click save. Your settings will be saved, in case you want to enable it later.

If you wish to uninstall completely, click Uninstall next to the module, in the Payments modules admin table. It will not remove the files from your server. To completely remove the files from your server, you will need to manually remove all of the dwollahub files from their respective paths:

- **opencart/admin/controller/payment/dwollahub.php**

- **opencart/admin/language/english/payment/dwollahub.php**

- **opencart/admin/view/image/payment/dwollahub.png**

- **opencart/admin/view/template/payment/dwollahub.tpl**

- **opencart/catalog/controller/payment/dwollahub.php**

- **opencart/catalog/language/english/payment/dwollahub.php**

- **opencart/admin/view/image/payment/dwollahub.png**

- **opencart/admin/view/theme/default/YOURTHEME/template/payment/dwollahub.tpl**
<br>
<br>
<br>
<br>




## CHANGELOG
###### JULY 2, 2012 - Version 2.0 (major)
In this updated release, most files have been changed. I recommend a complete re-install / overwrite if you installed version 1.0, which was released earlier this morning.

1.	Secure Payment URL can now be (more conveniently) added via the Dwolla Hub Payment module editor in the Admin, instead of the language file.

2.	Dwolla Image has now been added to the Payment modules table.

3.	Fixed an error in the path previously given to the template file. In the previous release, the file was saved at:
**opencart/admin/view/theme/default/YOURTHEME/template/payment/dwollahub.tpl**

  The correct file path is:
  **opencart/admin/view/theme/YOURTHEME/template/payment/dwollahub.tpl**

4.	New Files:
**opencart/admin/view/image/payment/dwollahub.png**
<br>
<br>

###### JUNE 30, 2012 - Original Release, made public on the morning of July 2, 2012
Original version.
