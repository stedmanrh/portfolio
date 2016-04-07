---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


#title: custom_title
thumbnail: orphans-2.jpg
#subtitle: optional_subtitle
date: 2014-04-13
tags: print event
description: Promotional poster for a CalArts theatrical performance of Lyle Kessler's "Orphans." The story is one of childhood bereavement and abandonment and the resulting loss of innocence.

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
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}orphans-1.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}orphans-2.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}orphans-3.jpg" alt="{{ page.title }}">
