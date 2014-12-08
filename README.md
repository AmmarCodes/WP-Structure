WP-Structure
============

WordPress applications boilerplate, composerized with OOP theme.


## Theme Development
The current theme is almost empty, it meant to be empty.

### Introduction
The theme is hashing the assets file names to prevent browser caching when the file content changed.

`assets/manifest.json` file containing array of the hashed files with a key refer to the original file name before being hashed.

### Installation
Make sure to have `npm`, `gulp` and `bower` installed on your system.
Run:
- `npm install`
- `bower install`

This will install the requried npm modules to run gulp and its tasks.

### Build
Running `gulp build` will do the following:
- Clean any old assets
- Compile styles using Sass
- auto-prefix compiled styles
- JShint scripts and combine them into one file
- Clean any non-usable files
- Send notify popup to the operating system

### Development
To watch styles changes, run:
`gulp watch`

This will tell gulp to watch any `*.scss` files in `dev/styles` folder.
When an update detected, gulp will re-compile scss files and do versioning.

## Plugins
- WordPress SEO by Yoast
- Google XML Sitemaps
- W3 Total Cache
- WP Smush.it
- Akismet

### Development only
- Debug Bar
- Debug Bar Console
- Disable WordPress updates
- P3 (Plugin Performance Profiler)
- Query Monitor

## References
- [Rarst - Site Stack](http://composer.rarst.net/recipe/site-stack).
