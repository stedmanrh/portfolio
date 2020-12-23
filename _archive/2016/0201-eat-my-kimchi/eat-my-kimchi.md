---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

#title: custom_title
thumbnail: thumbnail.gif
subtitle: A Platform for Korean Women
date: 2016-02-01
tags: interactive web
description: During my time studying graphic design at CalArts, graduate student <a href="http://cargocollective.com/irischung" target="_blank">Iris Chung</a> designed a web platform for Korean women to share thoughts about their experiences with misogyny as her MFA thesis. She contracted me to develop a prototype in order to demonstrate its functionality to faculty during her thesis presentation.

links:
    -   title: Web
        url: /sites/eat-my-kimchi/
        text: Prototype site
---

<!-- set project media path -->
{% capture media %}
    {{site.baseurl}}/projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}kimchi-1.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}kimchi-2.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}kimchi-3.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}kimchi-4.png" alt="{{ page.title }}">
