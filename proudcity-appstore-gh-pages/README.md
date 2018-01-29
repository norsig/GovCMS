# proudcity-appstore
The ProudCity plugin store and


## Suggest your plugin

Do you have a Wordpress plugin that you would like to include in the ProudCity plugin store?
If so, fill out the plugin metadata in the [create an issue template](https://github.com/proudcity/proudcity-appstore/issues/new).

If you have another product that could integrate with ProudCity in other ways, please [contact ProudCity](mailto:info@proudcity.com).


### Repo structure

Plugins are stored in `./plugins`. Each json filename matches the name of the WordPress plugin it represents. Assets are stored in the `./plugin/*` subdirs.  The list of plugins that appear in calypso for each distribution is in the list json files (`./plugin/proudcity.json`).  Plugins that don't have a json file will load their data from wordpress.org.  Plugins with a json file that doesn't include a `slug` value will also load their data from wordpress.org, overwriting the wp.org data with any values in its json file (see[events-manager.json](https://github.com/proudcity/proudcity-appstore/blob/gh-pages/plugins/events-manager.json) for an example).

Distrubtuions and related assets are in `./distributions`.  The definitive version of the list of distrubtions exists in `wp-calypso/client/signup/steps/theme-selection/index.json`, but a copy is included in `./distributions/distributions.json` for reference only.

Settings for each distrubtion are stored in `./settings/*`. More info to come.