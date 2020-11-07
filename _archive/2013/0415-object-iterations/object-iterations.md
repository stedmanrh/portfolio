---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

#title: custom_title
thumbnail: thumbnail.jpg
subtitle: Platypus Illustrations
date: 2013-04-15
tags: illustration
description: Platypuses rendered in a variety of different styles. Some selections draw inspiration from illustrations by <a href="http://www.chibirmingham.com/" target="_blank">Chi Birmingham,</a> <a href="http://www.klonek.de/" target="_blank">Roman Klonek,</a> <a href="http://www.diegopatino.com/" target="_blank">Diego Patiño,</a> <a href="http://www.briandanaher.com/" target="_blank">Brian Danaher,</a> and <a href="http://www.cartoonbrew.com/tag/genndy-tartakovsky" target="_blank">Genndy Tartakovsky.</a>

#links:
#    -   title: Link_Header
#        url: localhost
#        text: Lorem_ipsum
---

<!-- set project media path -->
{% capture media %}
    {{site.baseurl}}/projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}object-iterations-0.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}object-iterations-1.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}object-iterations-2.jpg" alt="{{ page.title }}">
<img class="span4" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}object-iterations-3.jpg" alt="{{ page.title }}">
<img class="span4" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}object-iterations-4.jpg" alt="{{ page.title }}">
<img class="span4" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}object-iterations-5.jpg" alt="{{ page.title }}">
<img class="span4" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}object-iterations-6.jpg" alt="{{ page.title }}">
