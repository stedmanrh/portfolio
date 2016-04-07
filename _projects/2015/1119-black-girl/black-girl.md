---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


title: BLACK GIRL
subtitle: Linguistic Play
thumbnail: thumbnail.jpg
date: 2015-11-19
tags: event print
description: Poster for a work by <a href="http://www.camilleabrown.org/" target="_blank">Camille A. Brown & Dancers</a> presented at <a href="http://www.redcat.org/event/camille-brown-dancers-black-girl-linguistic-play" target="_blank">REDCAT</a> (collaboration with <a href="http://www.janehongwon.com/" target="_blank">Jane Hong Won Choi</a>). Winner of a Bessie Award and a Doris Duke Artist Award, choreographer Camille A. Brown and her company perform a work which reveals the complexity of carving out a self-defined identity as a Black female in urban American culture.

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
