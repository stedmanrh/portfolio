---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

title: Hyper-Stylized Heroes
thumbnail: thumbnail.png
subtitle: The Golden Age
date: 2014-03-05
tags: illustration
description: A series of hyper-stylized illustrations of various comic book characters representative of the Golden Age of Comic Books (circa 1940).

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
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}heroes-1.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}heroes-2.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}heroes-3.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}heroes-4.png" alt="{{ page.title }}">
