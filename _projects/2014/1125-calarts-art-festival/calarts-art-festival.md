---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

#title: custom_title
#subtitle: optional_subtitle
thumbnail: thumbnail.jpg
date: 2014-11-25
tags: print event identity
description: Identity and printed collateral for the 2015 CalArts Art Festival. The CalArts Art Festival is a two-day event that celebrates and showcases the diverse art making practices within the community. The festival empowers the interdisciplinary capabilities of the institute by housing an infrastructure for collaborative art to thrive in.

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
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}flier-cards.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}overview.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}lineup.jpg" alt="{{ page.title }}">
