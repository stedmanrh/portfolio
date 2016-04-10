---
#defaults
layout: project
permalink: /:collection/:year/:month/:title.html


#title: custom_title
thumbnail: thumbnail.jpg
#colspan: 2
subtitle: Issue No. 2
date: 2015-01-22
tags: print editorial
description: 16-page newspaper and set of 5 typographic posters resulting from a workshop with esteemed designer <a href="http://www.ludovic-balland.com/" target="_blank">Ludovic Balland.</a> Over  five days, five distinguished citizens of Valencia were interviewed about what news they read the day before, their reading habits, and the city in which they live. Each day, one team of students designed and produced a newspaper article for the day's interview, while another team designed a typographic poster summarizing it. The final newspaper and poster series organize the content into a visual system as cultural commentary on how people remember information perceived in the daily media.

links:
    -   title: Ludovic Balland
        url: http://www.ludovic-balland.com/en/editorial/65/pday-after-readingbr-issue-ndeg2-ndashnbspvalencia-ca-p.html
        text: Full project info and credits
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<!-- media -->
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}paper.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}posters-2up.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}posters-3up.jpg" alt="{{ page.title }}">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}sheets.jpg" alt="{{ page.title }}">

<p class="span8 divider">Workshop Images</p>

<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}interview.jpg" alt="SCV Signal interviews Nick Humbel">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}teaching.jpg" alt="Ludovic Balland teaches">
<img class="span8" src="{{ site.data.global_assets.placeholder }}" data-original="{{media|strip}}interview-2.jpg" alt="SCV Signal interviews Ludovic Balland">
