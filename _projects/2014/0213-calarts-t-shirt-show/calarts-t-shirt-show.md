---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

title: CalArts T-Shirt Show
thumbnail: thumbnail.png
subtitle: Promo Website
date: 2014-02-13
tags: interactive web event
description: Web design and development for the 2014 CalArts T-Shirt Show (collaboration with <a href="http://brianthompsen.com" target="_blank">Brian Thompsen</a>). The show is an annual student fundraiser that invites current students, alumni, and faculty of the CalArts Graphic Design program to design t-shirts and tote bags which are then screen printed en masse and sold to the institute. The web page catalogs all designs and designers for the year and aesthetically builds on other collateral used to brand the event.

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
<img class="span8" src="{{media|strip}}calarts-tee-show.png" alt="{{ page.title }} website">
