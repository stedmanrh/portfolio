---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

#title: custom_title
thumbnail: thumbnail.png
#colspan: 2
subtitle: Book Jackets
date: 2014-02-10
tags: print packaging
description: Two book jacket options for a novelistic adaptation of Alfred Hitchcock's "Spellbound" designed as a student exercise in symbolic narrative.

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
<img class="span8" src="{{media|strip}}books.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}maze-02.jpg" alt="{{ page.title }}">
<img class="span8" src="{{media|strip}}catscan-02.jpg" alt="{{ page.title }}">
