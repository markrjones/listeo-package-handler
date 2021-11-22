# listeo-package-handler
Custom display of packages in the Listeo theme for Wordpress

This plugin enables the packages which an Owner must buy to be presented based on the category of listing they are creating. 

Installation

Download as a zip file and use the standard method of uploading a plugin. You may place using FTP if you prefer.

Use

By default Listeo has a /add-listing page which contains the shortcode [listeo_submit_listing]. This plugin provide a new shortcode:

  [rdmrj_listeo_submit_listing]
  
You can remove Listeo's shortcode from the /add-listing page and replace it with this one. Alternatively, you can create your own custom page and define it as the page to be called when a listing is being added. You will find this option in Listeo Core - Pages - Submit Listing Page.

You will need to create categories for the packages you are offering and they must match the listing categories exactly. For example, if you have a listing category called "Food and Drink" then you will go to Products, find one of your packages, e.g. Extended, edit it, and create and assign it to a new category called "Food and Drink".

When a user selects the "Food and Drink" category for their listing, they will be offered all the packages which have "Food and Drink" as their category.

Note, if a user does not select and category when creating their listing they will be shown any package with a category called "Default". You should therefore immediately assign some of your packages to a category called "Default" which you will have to create. If there are no packages assigned to Default a user who creates a listing with no category will not be offered any packages.
