<x-header>
  <x-slot name="title">Home Page</x-slot>

  <x-slot name="bodycode">

<section class="container py-2 text-center">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <!-- Circular Profile Image -->
      <img src="{{ asset('/image/kmamish.jpeg') }}"
           alt="Jane Doe" 
           class="profile-image"
           id="profileImg"
           onload="this.classList.add('loaded');">

      <h2 class="mt-4 fade-in-text">🧭 About K. M. Amish</h2>
      <p class="lead fade-in-text" style="font-family: Merriweather, serif; font-size:15px">
        Meet <strong>K. M. Amish</strong> is a scholar, scientist, and visionary leader who rose from a humble farming family in Usri-Piperjhala to become a top academic achiever in the field of nanochemistry. With degrees in B.Sc., M.Sc., and M.Phil., he specialized in nano-particle synthesis and characterization, contributing to national science journals like Science Reporter, Vigyan Pragati, and Dream 2047. Passionate about education, he leads the Multidimensional Educational Technical & Research Society, mentoring thousands of students and advocating for grassroots access to scientific learning across Uttar Pradesh.
      </p>
      <p class="lead fade-in-text" style="font-family: Merriweather, serif; font-size:15px"">
      Inspired by the need to combat systemic corruption and educational neglect, Amish entered politics through the Aam Aadmi Party in 2016 and later founded the Bhartiya Bahuddeshiya Party (BAP) in 2021—a unique, research-driven political movement focused on innovation, transparency, and constitutional reform. With a new governance model centered on education, technology, and citizen accountability, he is pioneering India’s first truly multi-faceted political framework, aimed at creating a future where leadership is earned through knowledge, ethics, and service.
      </p>
    </div>
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-md-8 text-center">
      <ul class="list-group list-group-flush text-start">
        <li class="list-group-item">🏛 <a href="https://www.parliament.gov/janedoe" target="_blank">Legislative Record</a></li>
        <li class="list-group-item">📰 <a href="https://news.google.com/search?q=Jane+Doe" target="_blank">Recent Interviews & Media</a></li>
        <li class="list-group-item">📜 <a href="https://www.govtrack.us/congress/members/jane_doe" target="_blank">Policy Proposals</a></li>
        <li class="list-group-item">📸 <a href="https://www.instagram.com/janedoe" target="_blank">Instagram Gallery</a></li>
        <li class="list-group-item">🎥 <a href="https://www.youtube.com/@janedoe" target="_blank">Public Speeches</a></li>
        <li class="list-group-item">💼 <a href="https://www.linkedin.com/in/janedoe" target="_blank">LinkedIn Profile</a></li>
        <li class="list-group-item">🐦 <a href="https://twitter.com/janedoe" target="_blank">Twitter Updates</a></li>
        <li class="list-group-item">🗳 <a href="https://www.janedoeforchange.com" target="_blank">Volunteer & Campaign Info</a></li>
      </ul>
    </div>
  </div>
</section>

</x-slot>
</x-layout>
