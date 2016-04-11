---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


#title: custom_title
subtitle: Part II
thumbnail: thumbnail.jpg
date: 2014-10-27
tags: print event
description: Poster for a collection of short films and videos presented at REDCAT as part of the Jack H. Skirball Series (collaboration with <a href="http://brianthompsen.com" target="_blank">Brian Thompsen</a>). Focusing on stories from the Black diaspora, this second installment of <a href="http://www.redcat.org/event/black-radical-imagination-ii" target="_blank">"The Black Radical Imagination"</a> is a collection of short films and videos about communing with the spiritual realm as a historical practice and point of collective memory.

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
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}bri-redcat-1.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}bri-redcat-2.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}bri-redcat-3.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-src="{{media|strip}}bri-redcat-4.jpg" alt="{{ page.title }}">
