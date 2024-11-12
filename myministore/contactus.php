<?php include 'header.php'; ?>
<br>
<br>
<br>
<br>
<br>
<style>

* {
  box-sizing:border-box;
  margin:0;
}


/* .container {
	background-color: $white;
	border-radius: 5px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
  min-width:370px;
} */

h2 {
  font-size:2rem;
  margin-bottom:1rem;
}

.form-container {
  display:flex;
}

.left-container {
  flex:1;
  /* height:auto; */
  background-color:$teal;
}

.right-container {
  display:flex;
  flex:1;
  /* height:460px; */
  background-color: $white;
  justify-content:center;
  align-items:center;
}

.left-container {
  display:flex;
  flex:1;
  /* height:480px; */
  justify-content:center;
  align-items:center;
    color:$white;
}

.left-container p {
  font-size:0.9rem;
}

.right-inner-container {
  width:70%;
  /* height:80%; */
  text-align:center;
}

.left-inner-container {
  /* height:50%; */
  width:80%;
  text-align:center;
  line-height:22px;
}

input, textarea {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
  font-size:0.8rem;
}

input:focus, textarea:focus{
  outline:1px solid $teal;
}

button {
	border-radius: 20px;
	border: 1px solid #00b4cf;
	background-color: #00b4cf;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
  cursor:pointer;
}

button:hover {
  opacity:0.7;
}
@media only screen and (max-width: 600px) {
  .left-container{
    display: none;
  }
  .lg-view {
    display:none;  
  }
}

@media only screen and (min-width: 600px) {
  .sm-view {
    display:none;  
  }
}

form p {
  text-align:left;
}
</style>
<div class="container">
  <div class="form-container">
    <div class="left-container">
      <div class="left-inner-container">
      <h2>Let's Chat</h2>
      <p>Whether you have a question, want to start a project or            simply want to connect.</p>
        <br>
        <p>Feel free to send me a message in the contact form</p>
    </div>
      </div>
    <div class="right-container">
      <div class="right-inner-container">
        <form action="#">
			<h2 class="lg-view">Contact</h2>
      <h2 class="sm-view">Let's Chat</h2>
           <p>* Required</p>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
          <input type="text" placeholder="Name *"  />
      <input type="email" placeholder="Email *" />
			<input type="text" placeholder="Company" />
			<input type="phone" placeholder="Phone" />
          <textarea rows="4" placeholder="Message"></textarea>
			<button>Submit</button>
		</form>
      </div>
    </div>
  </div>
</div>

<br/><br/>

<?php include 'footer.php'; ?>
