---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

title: LNI Signs
#subtitle: optional_subtitle
date: 2014-01-06
categories: interactive web
description: Website for LNI developed in collaboration with [Chris Babcock.](http://babcockdesign.net) LNI designs, builds, and deploys custom shelters, signs, and facades for several municipalities and an impressive set of corporate clients such as Nike, Time Warner, and Disney.

links:
    -   title: Web
        url: http://lnisigns.com
        text: lnisigns.com
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media --><img class="span8" src="{{media|strip}}lni-1.png" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}lni-2.png" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}lni-3.png" alt="{{ page.title }}">
