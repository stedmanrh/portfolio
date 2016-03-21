---
#defaults
layout: project
permalink: /:collection/:year/:month/:title

#title: custom_title
subtitle: "\"Offset Printing\""
date: 2015-06-04
categories: print
description: Three 30x40in posters interpreting the topic of offset printing. Each poster in the set presents research on this media technology as its relevance to graphic design using either a denotative or connotative strategy.

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
<img class="span8" src="{{media|strip}}file.jpg" alt="{{ page.title }}">
