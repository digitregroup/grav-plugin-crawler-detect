# Crawler Detect Plugin

The **Crawler Detect** Plugin is for [Grav CMS](http://github.com/getgrav/grav).

This plugin add a twig function to detect bots/crawlers/spiders using the [Crawler-Detect](https://github.com/JayBizzle/Crawler-Detect) library.

Crawler-Detect detects bots/crawlers/spiders via the user agent and http_from header.

## Installation

Installing the Crawler Detect plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install crawler-detect

This will install the Crawler Detect plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/crawler-detect`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `crawler-detect`. You can find these files on [GitHub](https://github.com/basile-trujillo/grav-plugin-crawler-detect) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/crawler-detect
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

### Admin Plugin

If you use the admin plugin, you can install directly through the admin plugin by browsing the `Plugins` tab and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/crawler-detect/crawler-detect.yaml` to `user/config/plugins/crawler-detect.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the admin plugin, a file with your configuration, and named crawler-detect.yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.

## Usage

This plugin provide a twig function to know if the current visitor is a bot or not.

```twig
{# Check the user agent of the current 'visitor' #}
{% if isCrawler() %}
    true if crawler user agent detected
{% endif %}

{# Pass a user agent as a string #}
{% if isCrawler('Mozilla/5.0 (compatible; Sosospider/2.0; +http://help.soso.com/webspider.htm)') %}
    true if crawler user agent detected
{% endif %}
```

## Credits

 * https://github.com/JayBizzle/Crawler-Detect

## To Do

- [ ] Add an abstaction over Crawler-Detect to potentially include other libs and/or functionnalities.
- [ ] Add a PHP higth level objet to call the crawler detector.


