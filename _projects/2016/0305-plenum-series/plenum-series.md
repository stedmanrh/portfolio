---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

#title: custom_title
subtitle: Collective Nature
date: 2016-03-05
tags: print
description: Poster for an immersive audiovisual installation by Brent Javier. "Collective Nature" explores ideas related to collective memories connecting humans with nature, including our intrinsically strong relationship towards the inorganic matter (e.g. hard drives and digital storage) which has become our memory’s gatekeeper.

#links:
#    -   title: Link_Header
#        url: localhost
#        text: Lorem_ipsum
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{media|strip}}collective-nature-poster.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}collective-nature-detail.jpg" alt="{{ page.title }}">
