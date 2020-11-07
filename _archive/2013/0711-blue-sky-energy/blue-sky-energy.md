---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html

#title: custom_title
thumbnail: thumbnail.jpg
#subtitle: optional_subtitle
date: 2013-07-11
tags: interactive web
description: Two websites developed for Blue Sky Energy in collaboration with designer <a href="http://babcockdesign.net" target="_blank">Christian Babcock.</a> Blue Sky Energy specializes in custom-built solutions for solar and renewable energy on residential, commercial, and utility scales in California and New Mexico.

links:
    -   title: Web
        url: /sites/bse_ca/
        text: California
    -   title: Web
        url: /sites/bse_nm/
        text: New Mexico
---

<!-- set project media path -->
{% capture media %}
    {{site.baseurl}}/projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}blue-sky-energy-0.png" alt="{{ page.title }} New Mexico">
<img class="span4 offset4" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}blue-sky-energy-1.png" alt="{{ page.title }} California">
