---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

title: What Does It Cost?
thumbnail: thumbnail.jpg
subtitle: Political Poster
date: 2016-04-01
tags: print
description: Large format political poster resulting from a workshop with [Anette Lenz](https://www.anettelenz.com/). The content explores relationships between identity politics, capitalism, and integrity, with a focus on narrative, semantics, and context as potent strategies for visual language.

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
<img class="span8" src="{{media|strip}}mockup.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}lenz-poster_01.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}lenz-poster_02.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}lenz-poster_03.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}lenz-poster_04.jpg" alt="{{ page.title }}">
