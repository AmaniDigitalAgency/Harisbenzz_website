<html>
    <head>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Nunito+Sans");
:root {
  --blue: #0e0620;
  --white: #fff;
  --green: #2ccf6d;
}

html,
body {
  height: 100%;
}

body {
     background: url('slide-7.jpg');
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Nunito Sans";
  color: var(--blue);
  font-size: 1em;
}
.overlay {
    position: absolute;
    content: '';
    background: rgb(31 31 31 / 93%);
    width: 100%;
    height: 100%;
    left: 0px;
    top: 0px;
}
main{
   z-index: 99;
}

button {
  font-family: "Nunito Sans";
}
p {
    color: white;
}

ul {
  list-style-type: none;
  -webkit-padding-start: 35px;
          padding-inline-start: 35px;
}

svg {
  width: 100%;
  visibility: hidden;
}

h1 {
  font-size: 7.5em;
  margin: 15px 0px;
  font-weight: bold;
  color: #cf952c;
}

h2 {
  font-weight: bold;
  color: white;
}


.btn {
  z-index: 1;
  overflow: hidden;
  background: transparent;
  position: relative;
  padding: 8px 50px;
  border-radius: 30px;
  cursor: pointer;
  font-size: 1em;
  letter-spacing: 2px;
  transition: 0.2s ease;
  font-weight: bold;
  margin: 5px 0px;
}
.btn.green {
  border: 4px solid #cf952c;
  color: #ffffff;
}
.btn.green:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 0%;
  height: 100%;
  background: #cf952c;
  z-index: -1;
  transition: 0.2s ease;
}
.btn.green:hover {
  color: var(--white);
  background:#cf952c;
  transition: 0.2s ease;
}
.btn.green:hover:before {
  width: 100%;
}

@media screen and (max-width: 768px) {
  body {
    display: block;
  }

  .container {
    margin-top: 70px;
    margin-bottom: 70px;
  }
}
        </style>
    </head>
    <body>
        <div class="overlay"></div>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center" style="text-align: center">
        <h1>404</h1>
        <h2>UH OH! You're lost.</h2>
        <p>The page you are looking for does not exist.
          How you got here is a mystery. <br>But you can click the button below
          to go back to the homepage.
        </p>
        <button class="btn green">HOME</button>
      </div>
    </div>
  </div>
</main>
        <script src="js.js"></script>
        <script src="jquery.js"></script>
    </body>
</html>