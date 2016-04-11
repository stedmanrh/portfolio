---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


title: Charles Gaines
subtitle: Manifestos 2
thumbnail: thumbnail.png
date: 2015-11-25
tags: event print
description: Poster for a work by Charles Gaines presented at REDCAT alongside his exhibition "Hotel Theory" (collaboration with <a href="http://dasoljung.com" target="_blank">Dasol Jung</a>). Charles Gaines fills the stage with a nine-piece orchestra and large-scale video projection to create <a href="http://www.redcat.org/event/charles-gaines-manifestos-2" target="_blank">Manifestos 2,</a> with a musical arrangement by director and composer Sean Griffin of Opera Povera. Gaines devised musical translations of four influential speeches using a conceptual rule-based musical notation system.

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
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}gaines-1.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}gaines-2.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}gaines-3.png" alt="{{ page.title }}">
