![Travis CI Build Status](https://travis-ci.org/agustealo/paper.svg?branch=master)

![Logo](https://scontent-b-lga.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/10649914_932239630138395_6272501221530320090_n.png?oh=2685f6b76c25dec1318307d4bf9b2578&oe=54F0ED53)

PAPER
===

Hi. I'm  `paper`, a starter theme base on the WordPress framework `underscores`. Like _s I'm meant to be hacked so I have no need for a child. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A sample custom header implementation in `inc/custom-header.php` that can be activated by uncommenting one line in `functions.php` and adding the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/extras.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

Download `paper` from GitHub. The first thing you want to do is copy the `paper` directory and change the name to something else (like, say, `paper_press`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'paper'` (inside single quotations) to capture the text domain.
2. Search for `paper_` to capture all the function names.
3. Search for `Text Domain: paper` in style.css.
4. Search for <code>&nbsp;paper</code> (with a space before it) to capture DocBlocks.
5. Search for `paper-` to capture prefixed handles.

OR

* Search for: `'paper'` and replace with: `'paper_press'`
* Search for: `paper_` and replace with: `paper_press_`
* Search for: `Text Domain: paper` and replace with: `Text Domain: paper_press` in style.css.
* Search for: <code>&nbsp;paper</code> and replace with: <code>&nbsp;paper_press</code>
* Search for: `paper-` and replace with: `paper_press-`

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
