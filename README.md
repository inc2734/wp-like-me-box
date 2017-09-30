# WP Like Me Box

[![Build Status](https://travis-ci.org/inc2734/wp-like-me-box.svg?branch=master)](https://travis-ci.org/inc2734/wp-like-me-box)
[![Latest Stable Version](https://poser.pugx.org/inc2734/wp-like-me-box/v/stable)](https://packagist.org/packages/inc2734/wp-like-me-box)
[![License](https://poser.pugx.org/inc2734/wp-like-me-box/license)](https://packagist.org/packages/inc2734/wp-like-me-box)

## Install
```
$ composer require inc2734/wp-like-me-box
```

## How to use
```
<?php
// When Using composer auto loader
new Inc2734\WP_Like_Me_Box\Like_Me_Box();

// When not Using composer auto loader
// include_once( get_theme_file_path( '/vendor/inc2734/wp-like-me-box/src/wp-like-me-box.php' ) );
// new Inc2734_WP_Like_Me_Box();
```

## Shortcode
```
[wp_like_me_box facebook_page_name="xxxxx"]
```
