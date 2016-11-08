# WordPress Plugin Ajax Test

A test plugin organized inside the namespace. Object oriented.

## Contents

This WordPress Plugin includes the following files:

* `.gitignore`. Used to exclude certain files from the repository.
* `CHANGELOG.md`. The list of changes to the core project.
* `README.md`. The file that you’re currently reading.
* A `plugin-name` directory that contains the source code - a fully executable WordPress plugin.

## Features

* Uses [Plugin API](http://codex.wordpress.org/Plugin_API).
* Uses [Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards).
* Uses [Documentation Standards](https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/).

* All classes, functions, and variables are documented.
* The Boilerplate uses a strict file organization scheme.
* The project includes a `.pot` file as a starting point for internationalization.

## Installation

To install the plugin move it directly into the plugins folder and activate from there.

You can use this `wp-cli` command sequnce to activate the plugin.
* `wp pugin install https://github.com/prosti/ajax-test.test.zip`
* `wp plugin activate ajax-test`

## Plugin Preparation

Please check the [plan.txt](https://github.com/prosti/ajax-test/plan.txt) document.

## Recommended Tools

### i18n Tools

The plugin uses a variable to store the text domain used when internationalizing strings throughout the Boilerplate. To take advantage of this method, there are tools that are recommended for providing correct, translatable files:

* [Poedit](http://www.poedit.net/)
* [makepot](http://i18n.svn.wordpress.org/tools/trunk/)
* [i18n](https://github.com/grappler/i18n)

Any of the above tools should provide you with the proper tooling to internationalize the plugin.

## License

Licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

## Important Notes

### Licensing

If you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).

### Includes

Note that if you include your own classes, or third-party libraries, there are three locations in which said files may go:

* `plugin-name/includes` is where functionality shared between the admin area and the public-facing parts of the site reside
* `plugin-name/admin` is for all admin-specific functionality
* `plugin-name/public` is for all public-facing functionality

Note that previous versions of the Boilerplate did not include `Plugin_Name_Loader` but this class is used to register all filters and actions with WordPress.

The example code provided shows how to register your hooks with the Loader class.

### What About Other Features?

The previous version of the WordPress Plugin Boilerplate included support for a number of different projects such as the [GitHub Updater](https://github.com/afragen/github-updater).

These tools are not part of the core of this Boilerplate, as I see them as being additions, forks, or other contributions to the Boilerplate.

The same is true of using tools like Grunt, Composer, etc. These are all fantastic tools, but not everyone uses them. In order to  keep the core Boilerplate as light as possible, these features have been removed and will be introduced in other editions, and will be listed and maintained on the project homepage

# Credits

The WordPress Plugin Boilerplate was started in 2011 by [Tom McFarlin](http://twitter.com/tommcfarlin/) and has since included a number of great contributions. In March of 2015 the project was handed over by Tom to Devin Vinson.

The current version of the Boilerplate was developed in conjunction with [Josh Eaton](https://twitter.com/jjeaton), [Ulrich Pogson](https://twitter.com/grapplerulrich), and [Brad Vincent](https://twitter.com/themergency).

The homepage is based on a design as provided by [HTML5Up](http://html5up.net), the Boilerplate logo was designed by  Rob McCaskill of [BungaWeb](http://bungaweb.com), and the site `favicon` was created by [Mickey Kay](https://twitter.com/McGuive7).

## Documentation, FAQs, and More

Origin ...[Pogramming Review](https://programming-review/) .
