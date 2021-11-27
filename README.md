# listeo-package-handler

## Custom display of packages in the Listeo theme for Wordpress

Listeo is a theme for Wordpress. This plugin provides an alternative flow to the process of adding a listing. By default, an Owner who is creating a listing is first asked to choose a package and then enter details of the listing. This plugin changes that flow so that a site owner can present different packages depending on which category an Owner chooses for their listing. The Owner will go through the process of entering their listing's details, including the category or categories, and will finally be presented with applicable packages for selection.

## Installation

Download as a zip file and use the standard method of uploading a plugin. You may place using FTP if you prefer.

## Usage

By default Listeo has a /add-listing page which contains the shortcode [listeo_submit_listing]. This plugin provides a new shortcode:

  **[rdmrj_listeo_submit_listing]**
  
You can remove Listeo's shortcode from the /add-listing page and replace it with this one. Alternatively, you can create your own custom page and define it as the page to be called when a listing is being added. You will find this option in Listeo Core - Pages - Submit Listing Page.

You will need to create categories for the packages you are offering and they must match the listing categories exactly. For example, if you have a listing category called "Food and Drink" then you will go to Products, find one of your packages, e.g. Extended, edit it, and create and assign it to a new category called "Food and Drink".

When a user selects the "Food and Drink" category for their listing, they will be offered all the packages which have "Food and Drink" as their category.

Note, if a user does not select any category when creating their listing they will be shown any package with a category called "Default". You should therefore immediately assign some of your packages to a category called "Default" which you will have to create. If there are no packages assigned to Default a user who creates a listing with no category will not be offered any packages, which is not something you will want to happen! Be sure to assign at least one package to a category called "Default".

Update. The plugin now deals with there not being a package category that corresponds with a listing category. In the event that an Onwer chooses a listing category that is not also assigned to a package, the plugin will show all Default packages.

## Note

At this version the plugin contains some code that writes comments to the php error log for debugging purposes. These will remain until the person who this was written for confirms that the plugin works correctly. When testing is complete the debug code will be removed and a new version issued.
