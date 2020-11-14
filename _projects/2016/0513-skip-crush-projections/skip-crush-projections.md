---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

title: Skip/Crush Projections
thumbnail: thumbnail.jpg
#subtitle: Projection Mapping Installation
date: 2016-05-13
tags: interactive multimedia
description: This project is an 8-channel projection-mapped video installation set to the track "Skip/Crush" from Canadian techno duo, Graze. Generative, audio-responsive graphics were programmed and mapped in Quartz Composer, Ableton Live, and Resolume Arena. The installation can be automated with a MIDI score and/or performed live with MIDI input.

links:
    -   title: Video
        url: https://www.youtube.com/watch?v=BmXhTKkAY_c
        text: Live performance
---

<!-- set project media path -->
{% capture media %}
    {{site.baseurl}}/projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}skip-crush-1.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}skip-crush-2.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}skip-crush-3.jpg" alt="{{ page.title }}">
