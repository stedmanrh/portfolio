---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


#title: custom_title
subtitle: No More Hiding
thumbnail: thumbnail.gif
date: 2015-07-17
tags: identity
description: Conceptual identity applications (webpage and endtag) for Snitch, the world's first dox-on-demand service. Snitch is a fictional digital service that processes requests to uncover and leak the private information of individuals classified as public enemies.

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
<video class="span8" data-src="{{media|strip}}endtag.mov" autoplay loop></video>
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}web-1.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}web-2.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}web-3.png" alt="{{ page.title }}">
