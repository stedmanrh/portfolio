---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


#title: custom_title
#subtitle: optional_subtitle
thumbnail: thumbnail.png
date: 2014-09-18
categories: interactive web
description: Website for Challenger Cable Sales developed in collaboration with [Chris Babcock.](http://babcockdesign.net) CCS manufactures power and cabling equipment for the telecommunications industry.

links:
    -   title: Web
        url: http://www.challengercable.com/
        text: challengercable.com
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{media|strip}}ccs.png" alt="{{ page.title }}">
