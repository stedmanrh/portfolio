---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

#title: custom_title
thumbnail: thumbnail.jpg
#subtitle: optional_subtitle
date: 2013-04-18
tags: print
description: Crowds is a project that arose from a study of urban walking as an aesthetic practice, borrowing inspiration, text, and its title from a Baudelaire poem found in <em>Le Spleen de Paris</em>. It functions as a foldable map (of Santa Monica, CA), a typographic composition, and a series of abstract images that coalesce to subliminally address social and sensory awareness of constructed environments and movement within them.

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
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}crowds-1.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}crowds-2.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}crowds-3.jpg" alt="{{ page.title }}">
