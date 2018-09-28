# PHP Framework: Responsive EDM

Grunt taskrunner framework for building responsive .html EDM files from .php components.

---

## Table of contents
1. [Features](#user-content-features)
2. [Shortcomings](#user-content-shortcomings)
2. [Getting Started](#user-content-getting-started)
3. [Resources](#user-content-resources)

## Features
- Responsive cells(columns).
- Abstracted components with email client-specific compatibility code.
- Automated inlining and embedding of .css rules from .scss.
- Browser sync for quicker development.

## Shortcomings
- Limited to 2 columns on mobile version.
- Single breakpoint.
- Can only diminish the number of columns from desktop version to a mobile version.

## Getting Started
This framework requires npm(https://www.npmjs.com/) installed.
`php2html`, the core package for converting and outputting .php files to .html files requires `php-cgi`(https://www.npmjs.com/package/grunt-php2html).

## Resources
- https://medium.freecodecamp.com/the-fab-four-technique-to-create-responsive-emails-without-media-queries-baf11fdfa848
