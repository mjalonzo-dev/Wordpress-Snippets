# Wordpress Site Migration

Following is a step by step guide for migrating a Wordpress site from the Lab (lab.wearebully.com) Environment to a Production Environment.

1. Log into Media Temple, or the client's hosting providers Control Panel, and create a new Wordpress install:
	* For Media Temple, there's a "1 Click Application" option that will take care of the WP installation, DB and DB user creation for you.
	* If they're not on Media Temple, then either install Wordpress manually or use the Wordpress installation tools provided by the Host - most Hosts have a Wordpress install feature.
2. After the install completes, log out then create an archive of the Lab site's entire wp-content folder and download it.
3. Next, install the [WP Migrate DB plugin](http://wordpress.org/plugins/wp-migrate-db/) into the Lab Site.
4. After installing and activating the plugin, navigate to Tools > Migrate DB and fill out the required fields. Hit "Export" and save the SQL file.
5. Log back into Media Temple, or the client's Control Panel, and navigate to the production environment's PHPMyAdmin. 
6. Drop all the tables in the production site's Database then import the SQL dump from the WP DB migration plugin.
7. Log out of Media Temple, or the Control Panel.
8. Upload the wp-content archive to the production site's root Wordpress folder. Rename the existing "wp-content" folder to "wp-content-old" and unzip the archive.
9. The production site is almost ready. Log into the production site's admin area and navigate to "Settings" > "Permalinks" and verify that it's the same as the Lab site's. If so, then hit save.
10.	Check that the widgets are set up correctly ("Appearance" > "Widgets"), as well as the menu ("Appearance" > "Menus").
11.	Verify that no links, or assets, are pointing back to the Lab environment.
12.	Install any additional plugins: [Wordpress SEO by Yoast](http://wordpress.org/plugins/wordpress-seo/), [W3 Total Cache](http://wordpress.org/plugins/w3-total-cache/) and [Manage WP Worker](http://wordpress.org/plugins/worker/). 
13.	Log out and review your handy work.