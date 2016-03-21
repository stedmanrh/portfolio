---
#defaults
layout: project
permalink: /:collection/:year/:month/:title

date: 2016-02-22
categories: print
description: Two-sided tabloid flier resulting from a workshop with [Ed Fella.](http://edfella.com) The workshop began with a lecture about Fella's [lengthy and esteemed career](http://www.aiga.org/medalist-edfella/) as a graphic designer, artist, and educator. The following project prompt asked a group of graduating CalArts students to imagine themselves returning to the institute to give the same lecture after having achieved similar levels of career success.

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
<img class="span8" src="{{media|strip}}flier.jpg" alt="{{ page.title }}">
