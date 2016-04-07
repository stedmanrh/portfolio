---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


#title: custom_title
thumbnail: thumbnail.gif
#subtitle: optional_subtitle
date: 2014-08-13
tags: interactive web
description: Proposed homepage variants for Trevanna Post (film industry post production accounting). The client wanted extend its previously existing identity with a new web presence and make bicoastal locations a core part of its identity to emphasize ties to the film industry by way of Los Angeles and New York.

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
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}trevanna-ny.png" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}trevanna-la.png" alt="{{ page.title }}">
