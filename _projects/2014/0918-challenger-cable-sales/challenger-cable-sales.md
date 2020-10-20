---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


#title: custom_title
#subtitle: optional_subtitle
thumbnail: thumbnail.png
date: 2014-09-18
tags: interactive web
description: Website for Challenger Cable Sales developed in collaboration with <a href="http://babcockdesign.net" target="_blank">Chris Babcock.</a> CCS manufactures power and cabling equipment for the telecommunications industry.

links:
    -   title: Web
        url: http://www.challengercable.com/
        text: challengercable.com
---

<!-- set project media path -->
{% capture media %}
    {{site.baseurl}}/projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{ site.data.global_assets.placeholder | relative_url }}" data-src="{{media|strip}}ccs.png" alt="{{ page.title }}">
