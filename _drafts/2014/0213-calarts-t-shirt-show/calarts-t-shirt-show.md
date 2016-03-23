---
#defaults
layout: project
permalink: /:collection/:year/:month/:title

title: CalArts T-Shirt Show
subtitle: Promo Website
date: 2014-02-13
categories: interactive web
description: Web design and development for the 2014 CalArts T-Shirt Show. The show is an annual student fundraiser that invites current students, alumni, and faculty of the CalArts Graphic Design program to design t-shirts and tote bags which are then sold to the institute. This year, several students screen printed hundreds of items over a long, stressful day while one student in particular foolishly waited until that same evening to see if he could conceptualize and deploy the entire website before printing was done for the day.

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
