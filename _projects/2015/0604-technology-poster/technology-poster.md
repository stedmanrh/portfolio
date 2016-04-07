---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


#title: custom_title
thumbnail: thumbnail.gif
#colspan: 2
subtitle: "\"Offset Printing\""
date: 2015-06-04
tags: print
description: Three large format posters interpreting the topic of offset printing. Each poster in the set presents research on this media technology and its relevance to graphic design using either a denotative or connotative visual strategy.

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
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_01.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_02.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_03.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_04.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_05.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_06.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_07.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_08.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_09.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_10.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}tech_11.jpg" alt="{{ page.title }}">
