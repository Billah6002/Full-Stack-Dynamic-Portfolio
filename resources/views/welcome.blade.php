@extends('index')
@push('style')
    <title>Portfolio</title>
@endpush
@section("main-content")

  <header>
    <h1>Masum Billah</h1>
    <nav>
      <a href="#about">About</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Hi, I'm Masum Billah</h2>
    <p>A passionate web developer and designer who builds modern, responsive websites and web apps.</p>
    <a href="#projects">View My Work</a>
  </section>

  <section id="about" class="about">
    <h2>About Me</h2>
    <p>I'm a front-end developer with a focus on clean design and user-friendly experiences. With a background in HTML, CSS, JavaScript, and frameworks like React, I create modern solutions that are both functional and visually appealing.</p>
  </section>

  <section id="projects" class="projects">
    <h2>Projects</h2>
    <div class="projects-grid">
      <div class="project-card">
        <h3>Portfolio Website</h3>
        <p>My personal portfolio built with HTML, CSS, and JavaScript. Fully responsive and minimal.</p>
      </div>
      <div class="project-card">
        <h3>Weather App</h3>
        <p>A weather forecast app using OpenWeatherMap API, with dynamic UI and location-based features.</p>
      </div>
      <div class="project-card">
        <h3>Task Manager</h3>
        <p>React-based task management app with local storage support and sleek user interface.</p>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>Contact</h2>
    <p>If you'd like to work together or just say hi, feel free to email me at <a href="mailto:masum@example.com">masum@example.com</a></p>
  </section>

  <footer>
    &copy; 2025 Masum Billah. All rights reserved.
  </footer>
@endsection