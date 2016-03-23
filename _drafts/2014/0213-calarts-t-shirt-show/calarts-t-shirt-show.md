---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html.html

title: CalArts T-Shirt Show
subtitle: Promo Website
date: 2014-02-13
categories: interactive web
description: Web design and development for the 2014 CalArts T-Shirt Show (collaboration with [Brian Thompsen](http://www.brianthompsen.com/)). The show is an annual student fundraiser that invites current students, alumni, and faculty of the CalArts Graphic Design program to design t-shirts and tote bags which are then screen printed en masse and sold to the institute. The web page catalogs all designs and designers for the year and aesthetically builds on other collateral used to brand the event.

links:
    -   title: Web
        url: http://stedmanhalliday.com/sites/calarts-t-shirt-show/
        text: 2014 CalArts T-Shirt Show
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{media|strip}}file.jpg" alt="{{ page.title }}">