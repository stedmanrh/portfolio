---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

#title: custom_title
#thumbnail: thumbnail.png
#subtitle: optional_subtitle
date: 2016-10-04
tags: identity interactive web
description: Basic identity assets and portfolio website commissioned by visual artist Alice Musher. The layout aims to evoke the feeling of browsing a gallery.

links:
    -   title: Web
        url: http://alicemusher.com
        text: Alice Musher Portfolio
---

<!-- set project media path -->
{% capture media %}
    {{site.baseurl}}/projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}file.jpg" alt="{{ page.title }}">
