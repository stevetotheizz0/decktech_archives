---
title: Tournament Reports
layout: reportsummary
permalink: /tournament_reports/
---

{% for post in site.reports %}
  <div class="center-block col-md-8 col-sm-8 portfolio-item decklists-index">
    <p>
      <a href="{{site.baseurl}}{{post.url}}"> {{post.title}} </a><br>
      {{post.author}} <br>
      {{ post.date | date: "%b" }} {{ post.date | date: "%d," }} {{ post.date | date: "%Y" }} :
    </p>
  </div>
{% endfor %}