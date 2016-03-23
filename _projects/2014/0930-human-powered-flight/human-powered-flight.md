---
#defaults
layout: project
permalink: /:collection/:year/:month/:title


#title:
#subtitle: optional_subtitle
date: 2014-09-30
categories: print
description: 30x40in foldout poster presenting compelling research and information about the phenomenon that is human-powered flight.

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
<img class="span8" src="{{media|strip}}hpa-wide.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}hpa-close.jpg" alt="{{ page.title }}">
