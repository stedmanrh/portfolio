---
#defaults
layout: project
permalink: /:collection/:year/:month/:title

#date: yyyy-mm-dd
#categories: identity, print
#description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed pellentesque arcu. Vivamus a ipsum sollicitudin, accumsan nibh at, dapibus arcu. Vestibulum egestas imperdiet sem, a imperdiet diam. Nullam gravida libero nunc, iaculis consectetur sem efficitur efficitur. Proin non consectetur ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere luctus turpis non vehicula. Fusce lobortis sollicitudin eros nec pellentesque. Donec nulla enim, elementum in ultricies vitae, tincidunt quis ante. Vivamus at risus neque. Nam malesuada mi vel augue auctor, sit amet tempus augue pulvinar. Praesent scelerisque congue tortor, nec pharetra felis mattis at. Donec facilisis libero id ultrices ornare. Vestibulum varius fermentum tellus, ac sollicitudin nulla semper non.
---

<!-- set project media path -->
{% capture media %}
    /projects/{{ page.date | date: "%Y/%m%d" }}-{{ page.title | slugify }}/
{% endcapture %}
<!-- end -->

<img class="span8" src="{{media|strip}}filename" alt="filetext">
