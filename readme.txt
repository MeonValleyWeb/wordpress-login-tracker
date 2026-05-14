=== Custom Login Tracker ===
Contributors: andrewwilkinson
Donate link: https://meonvalleyweb.com
Tags: login, security, tracking, monitoring, analytics, bedrock
Requires at least: 6.0
Tested up to: 6.9
Requires PHP: 8.1
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Track and monitor WordPress user login activity with detailed statistics and enhanced security features.

== Description ==

Custom Login Tracker provides comprehensive monitoring of user login activity in your WordPress site. Designed to work seamlessly with Bedrock architecture, this plugin helps administrators keep track of who is accessing the site, when, and from where.

= Key Features =

* **Successful Login Tracking** - Record user information, location, browser, and device details
* **Failed Login Monitoring** - Track failed login attempts with IP tracking
* **Session Duration** - Calculate how long users stay logged in
* **Geolocation** - Track the geographical origin of logins
* **Security Alerts** - Receive email notifications for suspicious login activity  
* **Customizable Retention** - Set how long login data is stored
* **Data Export** - Export login history to CSV for reporting and compliance
* **Dashboard Widget** - Get a quick overview of recent login activity
* **Detailed Statistics** - Analyze login patterns and user behavior

= Perfect For =

* Security-conscious websites
* Membership sites
* Multi-author blogs
* Sites requiring compliance documentation
* Bedrock-based WordPress installations

== Installation ==

1. Upload the `custom-login-tracker` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Configure settings under Users > Login Tracker Settings

== Frequently Asked Questions ==

= Does this plugin work with Bedrock? =

Yes, Custom Login Tracker is specifically designed to work with Bedrock architecture.

= Will this plugin slow down my site? =

No, the plugin has minimal impact on site performance. Login tracking happens asynchronously and doesn't affect the user experience.

= How long is login data stored? =

By default, login data is stored for 90 days, but this can be configured in the settings.

= Can I export the login data? =

Yes, you can export both successful logins and failed login attempts to CSV format.

= Is location data accurate? =

The plugin uses IP-based geolocation which provides city/country level accuracy. It's not 100% precise but gives a good general indication of login origins.

= Does this work with WooCommerce or membership plugins? =

Yes, the plugin tracks all WordPress logins regardless of how they're initiated.

== Screenshots ==

1. Login History Dashboard - View all login activity in one place
2. Failed Login Attempts - Track and analyze failed login attempts
3. Statistics Overview - Visual representation of login data
4. Settings Page - Configure tracking and notification preferences

== Changelog ==

= 1.1.0 =
* Enhanced tracking of browser and device information
* Added data export functionality
* Improved dashboard widget
* Added statistics page
* WordPress.org release preparation

= 1.0.0 =
* Initial release
* Basic login tracking functionality
* Database table creation
* Admin interface

== Upgrade Notice ==

= 1.1.0 =
This update adds enhanced tracking capabilities and export functionality. Safe to upgrade.

== Privacy Policy ==

This plugin collects the following data for login tracking:

* User ID and username (when logged in)
* IP address
* Browser user agent string
* Login timestamp
* Login status (success/failure)

This data is stored in your WordPress database and is not transmitted to external servers. You can configure data retention settings in the plugin options.
