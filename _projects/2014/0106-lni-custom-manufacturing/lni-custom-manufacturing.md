---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

title: LNI Custom Manufacturing
thumbnail: lni-1.png
colspan: 2
#subtitle: optional_subtitle
date: 2014-01-06
tags: interactive web
description: Website for LNI Custom Manufacturing developed in collaboration with [Chris Babcock.](http://babcockdesign.net) LNI designs, builds, and deploys custom shelters, signs, and facades for several municipalities and an impressive set of corporate clients like Nike, Time Warner, and Disney.

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
