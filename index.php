<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Todo list</title>
		<meta name="description" content="Design &amp; Develop..">
		<meta name="author" content="starfeeling">
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700" />
		<link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-creative/font-awesome/css/font-awesome.min.css" />

<style>

*, *::before, *::after {
  box-sizing: border-box;
}

html {
  min-height: 100%;
}

body {
  margin: 20px;
  color: #435757;
  background: linear-gradient(-20deg, #d0b782 20%, #a0cecf 80%);
  font: 500 1.2em/1.2 'Roboto', sans-serif;
}

.container {
  max-width: 450px;
  margin: 0 auto;
  border-top: 5px solid #435757;
  background-color: rgba(255, 255, 255, .2);
  box-shadow: 0 0 20px rgba(0, 0, 0, .1);
  user-select: none;
}

h1 {
  margin: 0;
  padding: 20px;
  background-color: rgba(255, 255, 255, .4);
  font-size: 1.8em;
  text-align: center;
}

.items {
  display: flex;
  flex-direction: column;
  padding: 20px;
  counter-reset: done-items undone-items;
}

h2 {
  position: relative;
  margin: 0;
  padding: 10px 0;
  font-size: 1.2em;
}

h2::before {
  content: '';
  display: block;
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: -20px;
  width: 5px;
  background-color: #435757;
}

h2::after {
  display: block;
  float: right;
  font-weight: normal;
}

.done {
  order: 1;
}

.done::after {
  content: ' (' counter(done-items) ')';
}

.undone {
  order: 3;
}

.undone::after {
  content: ' (' counter(undone-items) ')';
}

/* hide inputs offscreen, but at the same vertical positions as the correpsonding labels, so that tabbing scrolls the viewport as expected */
input {
  display: block;
  height: 53px;
  margin: 0 0 -53px -9999px;
  order: 4;
  outline: none;
  counter-increment: undone-items;
}

input:checked {
  order: 2;
  counter-increment: done-items;  
}

label {
  display: block;
  position: relative;
  padding: 15px 0 15px 45px;
  border-top: 1px dashed #fff;
  order: 4;
  cursor: pointer;
  animation: undone .5s;
}

label::before {
  content: '\f10c'; /* circle outline */
  display: block;
  position: absolute;
  top: 11px;
  left: 10px;
  font: 1.5em 'FontAwesome';
}

label:hover, input:focus + label {
  background-color: rgba(255, 255, 255, .2);
}

input:checked + label {
  order: 2;
  animation: done .5s;
}

input:checked + label::before {
  content: '\f058'; /* circle checkmark */
}

@keyframes done {
  0% {
    opacity: 0;
    background-color: rgba(255, 255, 255, .4);
    transform: translateY(20px);
  }
  50% {
    opacity: 1;
    background-color: rgba(255, 255, 255, .4);
  }
}

@keyframes undone {
  0% {
    opacity: 0;
    background-color: rgba(255, 255, 255, .4);
    transform: translateY(-20px);
  }
  50% {
    opacity: 1;
    background-color: rgba(255, 255, 255, .4);
  }
}
</style>
</head>
<body>

<!--
  Checkbox Trickery with CSS:
  http://codersblock.com/blog/checkbox-trickery-with-css/ 
-->

<div class="container">
  <h1>To-Do List</h1>
  <div class="items">
    <input id="item1" type="checkbox" checked>
    <label for="item1">Create a to-do list</label>

    <input id="item2" type="checkbox">
    <label for="item2">Take down Christmas tree</label>

    <input id="item3" type="checkbox">
    <label for="item3">Learn Ember.js</label>

    <input id="item4" type="checkbox">
    <label for="item4">Binge watch every episode of MacGyver</label>

    <input id="item5" type="checkbox">
    <label for="item5">Alphabetize everything in the fridge</label>

    <input id="item6" type="checkbox">
    <label for="item6">Do 10 pull-ups without dropping</label>

    <h2 class="done" aria-hidden="true">Done</h2>
    <h2 class="undone" aria-hidden="true">Not Done</h2>
  </div>
</div>

</body>
</html>